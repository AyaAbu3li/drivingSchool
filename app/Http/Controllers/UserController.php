<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactMail;
use Exception;
class LoginController extends Controller
{

    public function signin()
    {
        return view('userout/login');
    }
    
    public function login(Request $request)
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required',
            ]);
            
        if(empty($request->input('email')) 
         or (empty($request->input('password')))) {
            return back()->with('message_not_sent','inputs are empty!');
        } 
        
        $user = User::where('email', '=', $request->email)->first();
        if ($user === null) {
            return back()->with('message_not_sent','This account does not exit.');
        }

        if ( Hash::check($request->password, $user->password)) {
            if($user->role === 0)
            return view('in/home');
            else return view('in/roadsafety');
            
        }else return back()->with('message_not_sent','The password is not correct');
       
    }

    public function signup()
    {
        return view('userout/signup');
    }

    public function create(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            ]);
        if(empty($request->input('email')) 
        or (empty($request->input('password'))) 
        or (empty($request->input('password1'))) 
        or (empty($request->input('name'))) 
        ){
           return back()->with('message_not_sent','inputs are empty!');
       } 
        if (User::where('email', '=', $request->email)->exists()) {
            return back()->with('message_not_sent','Email already exits');
        }
        if($request->password != $request->password1){
            return back()->with('message_not_sent','Passwords do not match');
        }
        $data=[
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            ];
           
        $check = $this->createUser($data);
        return back()->with('message_sent','Great! You have Successfully SignUp');
    }
    public function createUser(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }

    public function about()
    {
        $team = DB::select('select * from team');
        return view('userout/about',['team'=>$team]);

        // return view('userout/about');
    }
    public function courses()
    {
        $courses = DB::select('select * from courses');
        return view('userout/courses',['courses'=>$courses]);
        // return view('userout/courses');

    }
    public function contact()
    {
        return view('userout/contact');

    }

    public function sendEmail(Request $request){

        $data=[
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            ];
            try{
                Mail::to('aya.angel9099@gmail.com')->send(new contactMail($data));
                return back()->with('message_sent','Your Message has been sent successfully!');
            } catch (Exception $th){
                return back()->with('message_not_sent','Your Message can not be send!');
            }
    }

    public function logout() {
        Session::flush();  
        return view('userout/welcome');
    }
}
