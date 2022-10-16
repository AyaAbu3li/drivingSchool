<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\passwordMail;
use Exception;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class forgetPassword extends Controller
{
    public function index()
    {
        return view('userout/forgetPassword1');
    }

    public function forgetPass(Request $request)
    {
        if (empty($request->input('email'))) {
            return back()->with('message_not_sent', 'inputs are empty!');
        }
        $user = User::where('email', '=', $request->email)->first();
        if ($user === null) {
            return back()->with('message_not_sent', 'This account does not exit.');
        }
          
        //Create Password Reset Token
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => Str::random(10),
            'created_at' => Carbon::now()
        ]);
        $tokenData = DB::table('password_resets')
            ->where('email', $request->email)->first();

        $data = [
            'email' => $request->email,
            'token' => $tokenData->token,
        ];

        try {
            Mail::to($request->email)->send(new passwordMail($data));
            return back()->with('message_sent', 'check your email');
        } catch (Exception $th) {
            return back()->with('message_not_sent', $th);
        }
    }
}
