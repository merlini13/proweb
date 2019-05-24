<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class loginController extends Controller
{
  public function index()
  {
    return view('admin_login');
  }

  public function login(Request $request){
    $admin_email=$request->admin_email;
    $admin_password=md5($request->admin_password);
    $result=DB::table('admin')
            ->where('admin_email', $admin_email)
            ->where('admin_password', $admin_password)
            ->first();

          if ($result){
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_id', $result->admin_id);
            return Redirect::to('/admin-dashboard');

          }else{
            Session::put('message', 'invalid Email or Password');
            return Redirect::to('/admin-login');
          }
    }

    public function register(){
      return view('admin.admin_registration');
    }
    public function adminregister(Request $request){
      $data=array();
      $data['admin_email']=$request->admin_email;
      $data['admin_password']=md5($request->admin_password);
      $data['admin_name']=$request->admin_name;
      $data['admin_phone']=$request->admin_phone;

      $customer_id=DB::table('admin')
      ->insertGetId($data);
      return Redirect::to('/admin-registration');

    }


  }
