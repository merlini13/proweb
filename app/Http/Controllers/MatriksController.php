<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class MatriksController extends Controller
{
  public function index(){
    $this->AdminAuthCheck();
    $all_matriks=DB::table('matriks')
                ->select('matriks.*')
                ->get();

    $manage_matriks=view('admin.all_matriks')
                  ->with('all_matriks', $all_matriks);
    return view('layout')
              ->with('admin.all_matriks', $manage_matriks);
  }
  public function createword(){
    $wordtest = new \PhpOffice\PhpWord\PhpWord();
    $newSection = $wordtest->addSection();
  }

  public function AdminAuthCheck(){
    $admin_id=Session::get('admin_id');
    if ($admin_id){
      return;
    }else{
      return Redirect::to('/admin-login')->send();
}
}

public function add(){
  return view('admin.add_matriks');
}

public function save(Request $request){
  $data=array();
  $data['jenis_usaha']=$request->jenis_usaha;
  if($request->hasfile('content')){
    $file = $request->file('content');
    $extension = $file->getClientOriginalExtension();
    $filename = "$request->jenis_usaha" .'.'.$extension;
    $file->move('uploads/matriks', $filename);
    $data['content']=$filename;
  }else{
    $data['content']='';
  }
  $matriks_id=DB::table('matriks')
  ->insertGetId($data);
  return Redirect::to('/index-matriks');
}

public function update_page($matriks_id){
  $matriks_info=DB::table('matriks')
                ->where('matriks_id', $matriks_id)
                ->first();

  $matriks_info=view('admin.edit_matriks')
              ->with('matriks_info', $matriks_info);
              return view('layout')
              ->with('admin.edit_matriks', $matriks_info);
}

public function update_matriks(Request $request, $matriks_id){
  $data=array();
  $data['jenis_usaha']=$request->jenis_usaha;
  if($request->hasfile('content')){
    $file = $request->file('content');
    $extension = $file->getClientOriginalExtension();
    $filename = "$request->jenis_usaha" .'.'.$extension;
    $file->move('uploads/matriks', $filename);
    $data['content']=$filename;
  }else{
    $data['content']='';
  }
  DB::table('matriks')
    ->where('matriks_id',$matriks_id)
    ->update($data);
    return Redirect::to('/index-matriks');
}
}
