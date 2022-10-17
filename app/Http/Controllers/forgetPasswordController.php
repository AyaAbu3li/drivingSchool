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


class forgetPasswordController extends Controller
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
            'token' => Str::random(6),
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

    // public function checkCode(Request $request)
    // {

    // }
    // public function resetpassword(Request $request)
    // {
        
    // }
}
// class forgetPasswordController extends Controller
// {
//     private $data = [  ];

//     public function index()
//     {
//         return view('userout/forgetPassword1');
//     }
//     public function index2()
//     {
//         return view('userout/forgetPassword2');
//     }
//     public function index3()
//     {
//         return view('userout/forgetPassword3');
//     }
//     public function index4()
//     {
//         return view('userout/forgetPassword4');
//     }
    

//     public function forgetPass(Request $request)
//     {
//         if (empty($request->input('email'))) {
//             return back()->with('message_not_sent', 'inputs are empty!');
//         }
//         $user = User::where('email', '=', $request->email)->first();
//         if ($user === null) {
//             return back()->with('message_not_sent', 'This account does not exit.');
//         }

//         //Create Password Reset Token
//         // DB::table('password_resets')->insert([
//         //     'email' => $request->email,
//         //     'token' => Str::random(10),
//         //     'created_at' => Carbon::now()
//         // ]);
//         // $tokenData = DB::table('password_resets')
//         //     ->where('email', $request->email)->first();

//         //     $this->data = [
//         //     'email' => $request->email,
//         //     'token' => $tokenData->token,
//         // ];
//         $link = 'http://127.0.0.1:8000/forgetPassword3';

//         try {
//             Mail::to($request->email)->send(new passwordMail(
//                 // $this->data,
//                  $link,));
//             return back()->with('message_sent', 'check your email');
//             // return view('userout/forgetPassword2')->with('message_sent', 'check your email');
//         } catch (Exception $th) {
//             return back()->with('message_not_sent', $th);
//         }
//     }

//     // public function checkCode(Request $request)
//     // {
//     //     if (empty($request->input('code'))) {
//     //         return back()->with('message_not_sent', 'inputs are empty!');
//     //     }
//     //     if($request->code != $this->data['token']){
//     //         return back()->with('message_not_sent',$this->data['token'] );
//     //     }
//     //     return view('userout/forgetPassword3');
//     // }

//     public function resetpassword(Request $request)
//     {
//         if((empty($request->input('password'))) 
//         or (empty($request->input('password1'))) 
//         ){
//            return back()->with('message_not_sent','inputs are empty!');
//        } 
//         if($request->password != $request->password1){
//             return back()->with('message_not_sent','Passwords does not match');
//         }
//         $password = $request->password;

//         return view('userout/forgetPassword4');
//     }
// }
