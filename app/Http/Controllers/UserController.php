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
class UserController extends Controller
{

    public function signin()
    {
        return view('userout/login');
    }
    
    public function login(Request $request)
    {  
        if(empty($request->input('email')) 
         or (empty($request->input('password')))) {
            return back()->with('message_not_sent','inputs are empty!');
        } 
        
        $user = User::where('email', '=', $request->email)->first();
        if ($user === null) {
            return back()->with('message_not_sent','This account does not exit.');
        }

        if ( Hash::check($request->password, $user->password)) {
            if($user->role === 0){
                    $request->session()->put('user_id', $user->id);
                    $request->session()->put('user_name', $user->name);
                    return redirect('/in');
            }
            
        }else return back()->with('message_not_sent','The password is not correct');
       
    }
    public function protect(Request $r)
    {
        if($r->session()->get('user_id')== ""){
            return redirect('/login');
        } else{
        $username = $r->session()->get('user_name');
        $capsule = array('username' => $username);
        return view('in/home')->with($capsule);
        }
    }
    public function logout(Request $r) {
        $r->session()->forget('user_id');
        $r->session()->forget('user_name');
        return view('userout/login');
    }
    public function signup()
    {
        return view('userout/signup');
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'password' => 'required|min:5',
            'email' => 'required|email|unique:users'
        ], [
            'name.required' => 'Name field is required.',
            'password.required' => 'Password field is required.',
            'email.required' => 'Email field is required.',
            'email.email' => 'Email field must be email address.'
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
           
        // $check = $this->createUser($data);
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
          ]);
        return redirect('/login')->with('message_sent','Great! Account created successfully, please login');
        // return back()->with('message_sent','Great! You have Successfully SignUp');

    }
    // public function createUser(array $data)
    // {
    //   return User::create([
    //     'name' => $data['name'],
    //     'email' => $data['email'],
    //     'password' => Hash::make($data['password'])
    //   ]);
    // }

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

    
}
