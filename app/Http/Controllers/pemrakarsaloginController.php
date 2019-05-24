<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class pemrakarsaloginController extends Controller{

public function login_check(){
  return view('pemrakarsa.pemrakarsa_login');
}

public function pemrakarsa_login(Request $request){
  $pemrakarsa_username=$request->pemrakarsa_username;
  $pemrakarsa_password=md5($request->pemrakarsa_password);
  $result=DB::table('pemrakarsa')
        ->where('username', $pemrakarsa_username)
        ->where('password', $pemrakarsa_password)
        ->first();

        if ($result){
          Session::put('nama_pemrakarsa', $result->nama_pemrakarsa);
          Session::put('id', $result->id);
          Session::put('no_ktp', $result->no_ktp);
          Session::put('alamat', $result->alamat);
          Session::put('jabatan', $result->jabatan);
          Session::put('no_telp', $result->no_telp);
          return Redirect::to('/');
        }else{
          Session::put('message', 'invalid Username or Password');
          return Redirect::to('/login-check');
        }
}

public function pemrakarsa_register(Request $request){
  $data=array();
  $data['nama_pemrakarsa']=$request->pemrakarsa_name;
  $data['no_ktp']=$request->no_ktp;
  $data['jabatan']=$request->jabatan;
  $data['alamat']=$request->alamat;
  $data['no_telp']=$request->no_telp;
  $data['username']=$request->pemrakarsa_username;
  $data['password']=md5($request->pemrakarsa_password);

  $pemrakarsa_id=DB::table('pemrakarsa')
  ->insertGetId($data);

  Session::put('id',$pemrakarsa_id);
  Session::put('nama_pemrakarsa',$request->pemrakarsa_name);
  return Redirect('/login-check');
}
}
