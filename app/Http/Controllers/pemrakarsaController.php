<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class pemrakarsaController extends Controller {

public function index(){
  $this->CheckAuth();
  $all_izin=DB::table('izin')
              ->select('izin.*')
              ->get();

  $manage_izin=view('pemrakarsa.dashboard')
              ->with('all_izin', $all_izin);
  return view('pemrakarsa_layout')
              ->with('pemrakarsa.dashboard', $manage_izin);
}

public function registration(){
  return view('pemrakarsa.registrasi');
}
public function pemrakarsa_logout()
{
  Session::flush();
  return Redirect::to('/login-check');
}
public function CheckAuth(){
  $pemrakarsa_id=Session::get('id');
  if ($pemrakarsa_id){
    return;
  }else{
    return Redirect::to('/login-check')->send();
}
}
}
