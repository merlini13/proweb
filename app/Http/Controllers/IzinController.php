<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Response;
session_start();

class IzinController extends Controller
{
  public function index(){
    $this->CheckAuth();
    return view('pemrakarsa.add_sppl');
  }
  public function profile($id){
    $this->CheckAuth();
    $profile=DB::table('pemrakarsa')
                ->join('izin', 'pemrakarsa.no_ktp', '=', 'izin.no_ktp')
                ->select('pemrakarsa.*', 'izin.*',)
                ->where('id',$id)
                ->get();

    $manage_profile=view('pemrakarsa.profile')
                ->with('profile', $profile);
    return view('pemrakarsa_layout')
              ->with('pemrakarsa.profile', $manage_profile);
    return view('pemrakarsa.profile');
  }

  public function CheckAuth(){
    $pemrakarsa_id=Session::get('id');
    if ($pemrakarsa_id){
      return;
    }else{
      return Redirect::to('/login-check')->send();
  }
  }

  public function save_data(Request $request){
    $data=array();
    $data['nama_pemrakarsa']=$request->nama_pemrakarsa;
    $data['no_ktp']=$request->no_ktp;
    $data['nama_usaha']=$request->nama_usaha;
    $data['alamat_usaha']=$request->alamat_usaha;
    $data['matriks_id']=$request->matriks_id;
    $data['tahap']=$request->tahap;
    if($request->hasfile('sppl')){
      $file = $request->file('sppl');
      $extension = $file->getClientOriginalExtension();
      $filename = "$request->nama_pemrakarsa Sppl" .'.'.$extension;
      $file->move('uploads/sppl', $filename);
      $data['sppl']=$filename;
    }else{

      $data['sppl']='';
    }
    if($request->hasfile('rencana')){
      $file = $request->file('rencana');
      $extension = $file->getClientOriginalExtension();
      $filename = "$request->nama_pemrakarsa Rencana" .'.'.$extension;
      $file->move('uploads/rencana', $filename);
      $data['rencana']=$filename;
    }else{

      $data['rencana']='';
    }

    if($request->hasfile('fotocopyktp')){
      $file = $request->file('fotocopyktp');
      $extension = $file->getClientOriginalExtension();
      $filename = "$request->nama_pemrakarsa Fotocopy KTP" .'.'.$extension;
      $file->move('uploads/fotocopyktp', $filename);
      $data['fotocopyktp']=$filename;
    }else{

      $data['fotocopyktp']='';
    }

    if($request->hasfile('fotolokasi')){
      $file = $request->file('fotolokasi');
      $extension = $file->getClientOriginalExtension();
      $filename = "$request->nama_pemrakarsa Foto Lokasi" .'.'.$extension;
      $file->move('uploads/fotolokasi', $filename);
      $data['fotolokasi']=$filename;
    }else{

      $data['fotolokasi']='';
    }

    if($request->hasfile('fotocopyimb')){
      $file = $request->file('fotocopyimb');
      $extension = $file->getClientOriginalExtension();
      $filename = "$request->nama_pemrakarsa Fotocopy IMB" .'.'.$extension;
      $file->move('uploads/fotocopyimb', $filename);
      $data['fotocopyimb']=$filename;
    }else{

      $data['fotocopyimb']='';
    }

    if($request->hasfile('fotocopysertifikattanah')){
      $file = $request->file('fotocopysertifikattanah');
      $extension = $file->getClientOriginalExtension();
      $filename = "$request->nama_pemrakarsa Fotocopy Sertifikat Tanah" .'.'.$extension;
      $file->move('uploads/fotocopysertifikattanah', $filename);
      $data['fotocopysertifikattanah']=$filename;
    }else{

      $data['fotocopysertifikattanah']='';
    }

    if($request->hasfile('fotocopybuktipembayaranpbb')){
      $file = $request->file('fotocopybuktipembayaranpbb');
      $extension = $file->getClientOriginalExtension();
      $filename = "$request->nama_pemrakarsa Fotocopy Bukti Pembayaran PBB" .'.'.$extension;
      $file->move('uploads/fotocopybuktipembayaranpbb', $filename);
      $data['fotocopybuktipembayaranpbb']=$filename;
    }else{

      $data['fotocopybuktipembayaranpbb']='';
    }

    if($request->hasfile('gambarbangunan')){
      $file = $request->file('gambarbangunan');
      $extension = $file->getClientOriginalExtension();
      $filename = "$request->nama_pemrakarsa Gambar Bangunan" .'.'.$extension;
      $file->move('uploads/gambarbangunan', $filename);
      $data['gambarbangunan']=$filename;
    }else{

      $data['gambarbangunan']='';
    }

    if($request->hasfile('areaparkir')){
      $file = $request->file('areaparkir');
      $extension = $file->getClientOriginalExtension();
      $filename = "$request->nama_pemrakarsa Area Parkir" .'.'.$extension;
      $file->move('uploads/areaparkir', $filename);
      $data['areaparkir']=$filename;
    }else{

      $data['areaparkir']='';
    }

    if($request->hasfile('denahlokasi')){
      $file = $request->file('denahlokasi');
      $extension = $file->getClientOriginalExtension();
      $filename = "$request->nama_pemrakarsa Denah Lokasi" .'.'.$extension;
      $file->move('uploads/denahlokasi', $filename);
      $data['denahlokasi']=$filename;
    }else{

      $data['denahlokasi']='';
    }

    if($request->hasfile('greasetrap')){
      $file = $request->file('greasetrap');
      $extension = $file->getClientOriginalExtension();
      $filename = "$request->nama_pemrakarsa Grease Trap" .'.'.$extension;
      $file->move('uploads/greasetrap', $filename);
      $data['greasetrap']=$filename;
    }else{

      $data['greasetrap']='';
    }

    if($request->hasfile('aktapendiriancv')){
      $file = $request->file('aktapendiriancv');
      $extension = $file->getClientOriginalExtension();
      $filename = "$request->nama_pemrakarsa Akta Pendirian CV" .'.'.$extension;
      $file->move('uploads/aktapendiriancv', $filename);
      $data['aktapendiriancv']=$filename;
    }else{

      $data['aktapendiriancv']='';
    }

    $sppl_id=DB::table('izin')
    ->insertGetId($data);
    return Redirect::to('/');
  }

  public function detail_izin_profile($izin_id){
    $detail=DB::table('izin')
                        ->join('pemrakarsa', 'izin.no_ktp', '=', 'pemrakarsa.no_ktp')
                        ->select('izin.*', 'pemrakarsa.no_ktp', 'pemrakarsa.jabatan', 'pemrakarsa.alamat')
                        ->where('izin.izin_id', $izin_id)
                        ->get();

    $manage_profile_izin_detail=view('pemrakarsa.detail')
        ->with('detail', $detail);
    return view('pemrakarsa_layout')
        ->with('pemrakarsa.detail', $manage_profile_izin_detail);
  }

  public function edit_izin($izin_id){
    $izin_info=DB::table('izin')
                  ->where('izin_id', $izin_id)
                  ->first();

    $izin_info=view('pemrakarsa.edit_izin')
                  ->with('izin_info', $izin_info);
                  return view('pemrakarsa_layout')
                  ->with('pemrakarsa.edit_izin', $izin_info);
  }

  public function update_izin(Request $request, $izin_id)
  {
    $data['nama_usaha']=$request->nama_usaha;
    $data['alamat_usaha']=$request->alamat_usaha;
    $data['jenis_usaha']=$request->jenis_usaha;
    $data['tahap']=$request->tahap;
    if($request->hasfile('sppl')){
      $file = $request->file('sppl');
      $extension = $file->getClientOriginalExtension();
      $filename = "$request->nama_pemrakarsa Sppl" .'.'.$extension;
      $file->move('uploads/sppl', $filename);
      $data['sppl']=$filename;
    }else{

      $data['sppl']=NULL;
    }
    if($request->hasfile('rencana')){
      $file = $request->file('rencana');
      $extension = $file->getClientOriginalExtension();
      $filename = "$request->nama_pemrakarsa Rencana" .'.'.$extension;
      $file->move('uploads/rencana', $filename);
      $data['rencana']=$filename;
    }else{

      $data['rencana']='';
    }

    if($request->hasfile('fotocopyktp')){
      $file = $request->file('fotocopyktp');
      $extension = $file->getClientOriginalExtension();
      $filename = "$request->nama_pemrakarsa Fotocopy KTP" .'.'.$extension;
      $file->move('uploads/fotocopyktp', $filename);
      $data['fotocopyktp']=$filename;
    }else{

      $data['fotocopyktp']='';
    }

    if($request->hasfile('fotolokasi')){
      $file = $request->file('fotolokasi');
      $extension = $file->getClientOriginalExtension();
      $filename = "$request->nama_pemrakarsa Foto Lokasi" .'.'.$extension;
      $file->move('uploads/fotolokasi', $filename);
      $data['fotolokasi']=$filename;
    }else{

      $data['fotolokasi']='';
    }

    if($request->hasfile('fotocopyimb')){
      $file = $request->file('fotocopyimb');
      $extension = $file->getClientOriginalExtension();
      $filename = "$request->nama_pemrakarsa Fotocopy IMB" .'.'.$extension;
      $file->move('uploads/fotocopyimb', $filename);
      $data['fotocopyimb']=$filename;
    }else{

      $data['fotocopyimb']='';
    }

    if($request->hasfile('fotocopysertifikattanah')){
      $file = $request->file('fotocopysertifikattanah');
      $extension = $file->getClientOriginalExtension();
      $filename = "$request->nama_pemrakarsa Fotocopy Sertifikat Tanah" .'.'.$extension;
      $file->move('uploads/fotocopysertifikattanah', $filename);
      $data['fotocopysertifikattanah']=$filename;
    }else{

      $data['fotocopysertifikattanah']='';
    }

    if($request->hasfile('fotocopybuktipembayaranpbb')){
      $file = $request->file('fotocopybuktipembayaranpbb');
      $extension = $file->getClientOriginalExtension();
      $filename = "$request->nama_pemrakarsa Fotocopy Bukti Pembayaran PBB" .'.'.$extension;
      $file->move('uploads/fotocopybuktipembayaranpbb', $filename);
      $data['fotocopybuktipembayaranpbb']=$filename;
    }else{

      $data['fotocopybuktipembayaranpbb']='';
    }

    if($request->hasfile('gambarbangunan')){
      $file = $request->file('gambarbangunan');
      $extension = $file->getClientOriginalExtension();
      $filename = "$request->nama_pemrakarsa Gambar Bangunan" .'.'.$extension;
      $file->move('uploads/gambarbangunan', $filename);
      $data['gambarbangunan']=$filename;
    }else{

      $data['gambarbangunan']='';
    }

    if($request->hasfile('areaparkir')){
      $file = $request->file('areaparkir');
      $extension = $file->getClientOriginalExtension();
      $filename = "$request->nama_pemrakarsa Area Parkir" .'.'.$extension;
      $file->move('uploads/areaparkir', $filename);
      $data['areaparkir']=$filename;
    }else{

      $data['areaparkir']='';
    }

    if($request->hasfile('denahlokasi')){
      $file = $request->file('denahlokasi');
      $extension = $file->getClientOriginalExtension();
      $filename = "$request->nama_pemrakarsa Denah Lokasi" .'.'.$extension;
      $file->move('uploads/denahlokasi', $filename);
      $data['denahlokasi']=$filename;
    }else{

      $data['denahlokasi']='';
    }

    if($request->hasfile('greasetrap')){
      $file = $request->file('greasetrap');
      $extension = $file->getClientOriginalExtension();
      $filename = "$request->nama_pemrakarsa Grease Trap" .'.'.$extension;
      $file->move('uploads/greasetrap', $filename);
      $data['greasetrap']=$filename;
    }else{

      $data['greasetrap']='';
    }

    if($request->hasfile('aktapendiriancv')){
      $file = $request->file('aktapendiriancv');
      $extension = $file->getClientOriginalExtension();
      $filename = "$request->nama_pemrakarsa Akta Pendirian CV" .'.'.$extension;
      $file->move('uploads/aktapendiriancv', $filename);
      $data['aktapendiriancv']=$filename;
    }else{

      $data['aktapendiriancv']='';
    }
    DB::table('izin')
      ->where('izin_id',$izin_id)
      ->update($data);
      return Redirect::to('/');

  }

  public function download_page($izin_id){
    $download=DB::table('izin')
            ->join('matriks', 'izin.matriks_id', '=', 'matriks.matriks_id')
            ->select('izin.*', 'matriks.*')
            ->where('izin_id', $izin_id)
            ->get();

            $manage_download=view('pemrakarsa.download_page')
                ->with('download', $download);
            return view('pemrakarsa_layout')
                ->with('pemrakarsa.download_page', $manage_download);
  }

  public function download_matriks($content){
    $file_path = public_path('uploads/matriks/'.$content);
      return response()->download($file_path);
  }
}
