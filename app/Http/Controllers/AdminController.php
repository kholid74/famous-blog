<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
//use Session;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    // public function __construct()
    // {
    //   $this->middleware('auth');
    // }

    public function formregister()
    {
        return view('admin.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:50',
            'email' => 'required|email|max:100|unique:users,email',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password'
        ]);

        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        
        Auth::loginUsingId($user->id);
       
        return redirect('/admincms/dashboard');
    }

    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
             if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
                
                return redirect('/admincms/dashboard');
            }else{
                return redirect('/admincms/login')->with('flash_message_error','Invalid Username or Password');
            }
        }
        return view('admin.login');
    }

    public function dashboard(){
       
        return view('admin.dashboard');
    }

    public function changepassword()
    {
        return view('admin.change-password');
    }


    public function chkPassword(Request $request){
        $data = $request->all();
        $current_password = $data['current_pwd'];
        $check_password = User::where(['email', Auth::user()->email])->first();
        if(Hash::check($current_password,$check_password->password)){
            echo "true"; die;
        }else {
            echo "false"; die;
        }
    }

    public function updatePassword(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            $check_password = User::where(['email' => Auth::user()->email])->first();
            $current_password = $data['current_pwd'];
            if(Hash::check($current_password,$check_password->password)){
                $password = bcrypt($data['new_pwd']);
                User::where('id','1')->update(['password'=>$password]);
                return redirect('/admin/settings')->with('flash_message_success','Password updated Successfully!');
            }else {
                return redirect('/admin/settings')->with('flash_message_error','Incorrect Current Password!');
            }
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/admincms')->with('flash_message_success','Logged out Successfully'); 
    }
}
