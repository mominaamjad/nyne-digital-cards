<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    public function login(Request $request) {
        $admin = $request->input('admin_user');
        $password = $request->input('admin_pass');

        //user found and password correct: login
        if($admin && ( $password === "secure")){
            $request->session()->put('user', $admin);
            return redirect('admin_dashboard');
        }
        //if user found but password inorrect
        else{
            $comment="Incorrect password, Try again";
            return View::make('admin_login', compact('comment'));
        }
    }
    public function showResults($search_by,$term){
        if($search_by == 'fname'){

            $data = DB::table('user')
            ->leftJoin('personal', 'user.email', '=', 'personal.email')
            ->leftJoin('company', 'user.email', '=', 'company.email')
            ->select('user.*', 'personal.phone', 'company.comp_name', 'company.job_title')
            ->where(function ($query) use ($term) {
                $query->where('user.fname', 'like', '%' . $term . '%')
                    ->orWhere('user.lname', 'like', '%' . $term . '%');
            })
            ->get();
            return $data;
        }
        else if($search_by == 'email'){

            $data = DB::table('user')
            ->leftJoin('personal', 'user.email', '=', 'personal.email')
            ->leftJoin('company', 'user.email', '=', 'company.email')
            ->select('user.*', 'personal.phone', 'company.comp_name', 'company.job_title')
            ->where(function ($query) use ($term) {
                $query->where('user.email', 'like', '%' . $term . '%');
            })
            ->get();
            return $data;
        }
        else if($search_by == 'comp_name'){

            $data = DB::table('user')
            ->leftJoin('personal', 'user.email', '=', 'personal.email')
            ->leftJoin('company', 'user.email', '=', 'company.email')
            ->select('user.*', 'personal.phone', 'company.comp_name', 'company.job_title')
            ->where(function ($query) use ($term) {
                $query->where('company.comp_name', 'like', '%' . $term . '%');
            })
            ->get();
            return $data;
        }
        else if($search_by == 'job_title'){

            $data = DB::table('user')
            ->leftJoin('personal', 'user.email', '=', 'personal.email')
            ->leftJoin('company', 'user.email', '=', 'company.email')
            ->select('user.*', 'personal.phone', 'company.comp_name', 'company.job_title')
            ->where(function ($query) use ($term) {
                $query->where('company.job_title', 'like', '%' . $term . '%');
            })
            ->get();
            return $data;
        }
    }
    public function showDashboard(){
        $data = DB::table('user')
            ->leftJoin('personal', 'user.email', '=', 'personal.email')
            ->leftJoin('company', 'user.email', '=', 'company.email')
            ->select('user.*', 'personal.phone', 'company.comp_name', 'company.job_title')
            ->get();

        return view('admin_dashboard', compact('data'));
    }
    public function showAllUserCards($email){
        $user=DB::table('user')->where('email', $email)->first();
        $company=DB::table('company')->where('email', $email)->first();
        $personal=DB::table('personal')->where('email', $email)->first();

        if ($user && $company && $personal) {
            $fname = $user->fname;
            $lname = $user->lname;
            $location= $user->location;
            $useremail = $user->email;
            $phone= $personal->phone;
            $cname=$company->comp_name;
            $role=$company->job_title;

            return view('all_cards_admin')
            ->with('fname', $fname)
            ->with('lname', $lname)
            ->with('email', $useremail)
            ->with('cname', $cname)
            ->with('role', $role)
            ->with('location', $location)
            ->with('phone',$phone);
    }
}
    public function showUpdate($email){
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

            return view('update')
            ->with('fname', $fname)
            ->with('lname', $lname)
            ->with('email', $useremail)
            ->with('password', $pass)
            ->with('cname', $cname)
            ->with('role', $role)
            ->with('location', $location)
            ->with('phone',$phone);
        } 
        else {
            // Handle the case where the user is not found
            return redirect('admin_dashboard'); // Redirect to the login page for example
        }
    }
    public function updateUser(Request $request,$email){

        $user=DB::table('user')->where('email', $email)->first();
        $fname=$user->fname;
        $lname=$user->lname;
        $password=$user->password;
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
        
        if($user){
            return redirect('admin_dashboard');
        }
        else {
            return redirect('admin_login'); 
        }
    }
    public function deleteUser($email){
        $user=DB::table('user')->where('email', $email)->first();

        if ($user) {
            DB::table('user')->where('email', $email)->delete();
            return redirect('admin_dashboard');
        } else {
            return redirect('admin_dashboard');
        }
    }
}
