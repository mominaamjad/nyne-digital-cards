<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    public function login(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');
        $user=DB::table('user')->where('email', $email)->first();

        //user found and password correct: login
        if($user && ($user->password === $password)){
            $request->session()->put('email', $email);
            $username = $user->fname;
            return View::make("user_dashboard", compact('username'));
        }
        //if user found but password inorrect
        if($user){
            $comment="Incorrect password, Try again";
            return View::make('login_page', compact('comment'));
        }
        //user not found then sign up
        else{
            $comment="User not found, Sign up instead";
            return View::make('signup_page', compact('comment'));
        }
    }
    public function showDashboard(Request $request) {
        $email = $request->session()->get('email');
        $user=DB::table('user')->where('email', $email)->first();

        if ($user) {
            $username = $user->fname;
            return view('user_dashboard')->with('username', $username);
        } else {
            // Handle the case where the user is not found
            return redirect()->route('login_page'); // Redirect to the login page for example
        }
    }
    public function showPersonal(Request $request) {
        $email = $request->session()->get('email');
        $user=DB::table('user')->where('email', $email)->first();
        $user_personal=DB::table('personal')->where('email',$email)->first();

        if ($user) {
            $username = $user->fname ." " . $user->lname;
            $location= $user->location;
            $useremail = $user->email;
            $phone= $user_personal->phone;
            return view('personal_card')
            ->with('username', $username)
            ->with('email', $useremail)
            ->with('location', $location)
            ->with('phone',$phone);
        }
         else {
            // Handle the case where the user is not found
            return redirect()->route('login_page'); // Redirect to the login page for example
        }
    }
    public function showCompany(Request $request) {
        $email = $request->session()->get('email');
        $user=DB::table('user')->where('email', $email)->first();
        $company=DB::table('company')->where('email', $email)->first();

        if ($user && $company) {
            $username = $user->fname ." " . $user->lname;
            $location= $user->location;
            $useremail = $user->email;
            $cname=$company->comp_name;
            $role=$company->job_title;

            return view('company_card')
            ->with('username', $username)
            ->with('email', $useremail)
            ->with('cname', $cname)
            ->with('role', $role)
            ->with('location', $location);
        } 
        else {
            // Handle the case where the user is not found
            return redirect()->route('login_page'); // Redirect to the login page for example
        }
    }
    public function showEditProfile(Request $request) {
        $email = $request->session()->get('email');
        $user=DB::table('user')->where('email', $email)->first();
        $company=DB::table('company')->where('email', $email)->first();
        $personal=DB::table('personal')->where('email', $email)->first();

        if ($user && $company && $personal) {
            $fname = $user->fname;
            $lname = $user->lname;
            $location= $user->location;
            $pass= $user->password;
            $useremail = $user->email;
            $phone= $personal->phone;
            $cname=$company->comp_name;
            $role=$company->job_title;

            return view('edit_profile')
            ->with('fname', $fname)
            ->with('lname', $lname)
            ->with('email', $useremail)
            ->with('cname', $cname)
            ->with('role', $role)
            ->with('password', $pass)
            ->with('location', $location)
            ->with('phone',$phone);
        } 
        else {
            // Handle the case where the user is not found
            return redirect()->route('login_page'); // Redirect to the login page for example
        }
    }
    public function editProfile(Request $request){
        $email = $request->session()->get('email');
        $user=DB::table('user')->where('email', $email)->first();
        $fname=$user->fname;
        $lname=$user->lname;
        $password=$request->input('password');
        $phone=$request->input('phone');
        $location=$request->input('location');
        $cname=$request->input('cname');
        $role=$request->input('job-role');


        DB::table('user')->where('email', $email)->update([
            'email' =>$email,
            'fname' => $fname,
            'lname' => $lname,
            'password' => $password,
            'location' => $location,
        ]);

        DB::table('personal')->where('email', $email)->update([
            'email' =>$email,
            'phone' => $phone,
        ]);

        DB::table('company')->where('email', $email)->update([
            'email' =>$email,
            'comp_name' => $cname,
            'job_title' => $role,
        ]);

        $user=DB::table('user')->where('email', $email)->first();
        // dd($user);
        if($user){
            $name=$user->fname;
            return redirect('user_dashboard')->with('username', $name);
        }
        else {
            // Handle the case where the user is not found
            return redirect('login_page'); // Redirect to the login page for example
        }
        
    }
    public function logout(Request $request) {
        session()->forget('email');
        session()->flush();
        return redirect('/login_page');
    }
    public function signup(Request $request) {
        $fname=$request->input('fname');
        $lname=$request->input('lname');
        $email=$request->input('email');
        $password=$request->input('password');
        $phone=$request->input('phone');
        $location=$request->input('location');
        $cname=$request->input('cname');
        $role=$request->input('job-role');
      
        // Insert data into the 'user' table
        DB::table('user')->insert([
            'email' => $email,
            'fname' => $fname,
            'lname' => $lname,
            'password' => $password,
            'location' => $location,
        ]);
        
        // Insert data into the 'personal' table
        DB::table('personal')->insert([
            'email' => $email,
            'phone' => $phone,
        ]);

        // Insert data into the 'company' table
        DB::table('company')->insert([
            'email' => $email, // Assuming 'email' is a foreign key in the 'company' table
            'comp_name' => $cname,
            'job_title' => $role,
        ]);

        $comment = "Signup Successful, Login to Continue";
        return view('login_page')->with('comment', $comment);
        
    }

}
