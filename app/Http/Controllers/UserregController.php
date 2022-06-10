<?php

namespace App\Http\Controllers;

use App\Models\Userreg;
use Illuminate\Http\Request;

class UserregController extends Controller
{

public function index()
{
    return view('index');
}


    public function userreg()
    {
        return view('userregistration');
    }
public function login()
{
    $email=request('username');
    $password=request('password');
    if(auth()->attempt([
     'email'=>$email,
     'password'=>$password
    ]))
    {
          return redirect()->route('viewadmindashboard');
    }
    else
    {
        
        return view('user_dashboard');

        // return redirect()->route('invalidlogin')->with('message','invalid login');
    }
}
  
public function viewadmindashboard()
{
    return view('admindashboard');
}
public function invalidlogin()

{
    return view('index');
}

public function logout()
{
    auth()->logout();
    return redirect()->route('index');
}

    public function userregistration()
    {
        $name=request('name');
        $date_of_birth=request('date_of_birth');
        $gender=request('gender');
        $qualification='SSLC';
        $hobbies='cricket';
        $email=request('email');
        $password=request('password');
        $myself=request('myself');
        $image='SSS'; 
        $status='register';
       
        
Userreg::create([
'name'=>$name,
'date_of_birth'=>$date_of_birth,
'gender'=>'male',
'qualification'=>$qualification,
'hobbies'=>$hobbies,
'email'=>$email,
'password'=>$password,
'myself'=>$myself,
'image'=>$image,
'status'=>$status

]);
// return 'completed successfully';
return redirect()->route('index');
    }
public function viewuserreg()
{
   
    $viewdata=Userreg::where('status','=','register')->paginate(4);
    // // return $viewdata;
    // $data = 'hiiiii';
     return view('adminview_userreg',compact('viewdata'));

}
public function view_userreg($id)
    {
 $viewreg=Userreg::find($id);
//  return $viewreg;
 return view('admin_approveusereg',compact('viewreg'));

    }

public function approve()
{
    $id=request('id');
    
    $status=Userreg::find($id);
    $status->update([
        'status'=>'approve'
    ]);

    return view('admindashboard');

}
public function viewprofile()
{
    // $id=auth()->user()->name;
    // return $id;
//    $viewdata= Userreg::find($id);
//    return redirect('user_viewprofile',compact($viewdata));


}



}
