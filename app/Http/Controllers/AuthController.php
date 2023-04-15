<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Hash;
use Session;

class AuthController extends Controller
{
    public function login()
    {
        return view ("auth.login");
    }

    public function register()
    {
        return view ( "auth.register");
    }

    public function registerUser(Request $request)

    
    {
         
        $request -> validate([
            'name'=> 'required',
            'email' => 'required| email| unique:users',
            'location'=> 'required | max:255',
            'password' => 'required| min:4 | max:10'
        ]);

       $user = new user;

        $user -> name = $request ->name;

        $user -> email = $request -> email;

        $user -> password = Hash::make($request -> password);

        $res = $user -> save();

        if($res)
        {
            return redirect("login")->with('success','you have registred successfully');
        }
        else
        {
          return back()->with('fail','your gegistration failed');
        }    
        
    }

    public function LoginUser(Request $request)
    {
        $request -> validate([
            'email' => 'required| email',
            'password' => 'required| min:4 | max:10'
        ]);

      $user = user::where('email','=', $request->email)->first();
      if($user)
      {
        if(Hash::check($request->password, $user->password))
        {
           $request->Session()->put('loginId', $user->id) ;
           return redirect('dashboard');
        }
        else{
            return back()->with('fail','wrong password');
        }
      }else{

        return back()->with('fail','mail do not registered');
      }



    }

    public function dashboard()
    {
    
       if(Session::has('loginId'))
       {
        $data = user::where('id','=', Session::get('loginId'))->first();
       }

        return view('auth.dashboard', compact('data'));
    }

    public function logout()
    {
        if(Session::has('loginId'))
        {
            Session::pull('loginId');

            return redirect('login');
        }
    }

   
}
