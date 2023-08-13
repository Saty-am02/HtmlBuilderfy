<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


use App\Models\profiles;
use App\Models\login_tbles;
use App\Helpers\Helper;
use Illuminate\Support\Facades\Hash;

class UserLogin extends Controller
{
    public function register(){
        return view('sinup');
    }

    public function add(Request $request){
        $request->validate(
            [
                'fname' => 'required|string|max:20|regex:/^[A-Z][a-z]+$/',
                'lname' => 'required|string|max:20|regex:/^[A-Z][a-z]+$/',
                'username' => 'required|string|min:6|max:15|lowercase|regex:/^[a-z0-9_]+$/i|unique:profiles,user_name',
                'password' => 'required|string|min:8|max:20|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^\w\s]).{8,}$/',
                

            ]);

        $user_id = Helper::IDGenerator( new profiles, 'user_id', 5, 'USR');
        $frstname = $request->fname;
        $lastname = $request->lname;
        $uname = $request->username;
        $password = Hash::make($request->password);
        $gender = $request->gender;

        $q = new profiles;
        $q->user_id = $user_id;
        $q->first_name = $frstname;
        $q->last_name = $lastname;
        $q->user_name = $uname;
        $q->password = $password;
        $q->gender = $gender;
        $q->save();
        return view('login');
    }

    public function login(){
        return view('login');
    }

    public function LoginUser(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $profile = profiles::where(['user_name'=>$request->username])->first();
        if(!$profile || !Hash::check($request->password, $profile->password))
        {
            return "Username or password is not matched";
            
        }
        else{
            $request->session()->put('profile',$profile);

            $uid = DB::table('profiles')->where('user_name',$request->username)->value('user_id');
            $usrname = $request->username;
            $psswd = Hash::make($request->password);

            $q = new login_tbles;
            $q->log_id = $uid;
            $q->user_name = $usrname;
            $q->password = $psswd;
            $q->save();

            return redirect('/indexafter');
            
        }
    }
     
    public function about(){
        return view('about');
    }

    public function index1(){
        return view('index1');
    }

    public function indexafter(){
        return view('index_after_login');
    }

    public function htmlcodegen(){
        return view('htmlcodegen');
    }
    public function htmltable()
    {
        return view('html-table-generator-2');
    }

    public function satyam(){
        return view('satyam');
    }
    public function dhaivat(){
        return view('dhaivat');
    }
    public function sneha(){
        return view('sneha');
    }
    public function divyanka(){
        return view('divyanka');
    }
    public function subramanya(){
        return view('subh');
    }
    public function prasanna(){
        return view('presennna');
    }
}

