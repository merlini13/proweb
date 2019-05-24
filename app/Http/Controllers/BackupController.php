<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class BackupController extends Controller
{
  public function index(){
      $this->AdminAuthCheck();
      $admin_all_izin=DB::table('izin')
                  ->select('izin.*')
                  ->get();

      $manage_admin_all_izin=view('admin.sppl_admin')
                  ->with('admin_all_izin', $admin_all_izin);
      return view('layout')
                ->with('admin.sppl_admin', $manage_admin_all_izin);
    }

  public function AdminAuthCheck(){
      $admin_id=Session::get('admin_id');
      if ($admin_id){
        return;
      }else{
        return Redirect::to('/admin-login')->send();
      }
      }
      public function detail_izin($izin_id){
        $izin_by_details=DB::table('izin')
                            ->join('pemrakarsa', 'izin.no_ktp', '=', 'pemrakarsa.no_ktp')
                            ->select('izin.*', 'pemrakarsa.no_ktp', 'pemrakarsa.jabatan', 'pemrakarsa.alamat')
                            ->where('izin.izin_id', $izin_id)
                            ->get();

        $manage_izin_by_details=view('admin.detail_perizinan')
            ->with('izin_by_details', $izin_by_details);
        return view('layout')
            ->with('admin.detail_perizinan',$manage_izin_by_details);
          }
          public function download_sppl($sppl){
            $file_path = public_path('uploads/sppl/'.$sppl);
              return response()->download($file_path);
          }

          public function download_rencana($rencana){
            $file_path = public_path('uploads/rencana/'.$rencana);
              return response()->download($file_path);
          }

          public function download_fotocopyktp($fotocopyktp){
            $file_path = public_path('uploads/fotocopyktp/'.$fotocopyktp);
              return response()->download($file_path);
          }

          public function download_fotolokasi($fotolokasi){
            $file_path = public_path('uploads/fotolokasi/'.$fotolokasi);
              return response()->download($file_path);
          }

          public function download_fotocopyimb($fotocopyimb){
            $file_path = public_path('uploads/fotocopyimb/'.$fotocopyimb);
              return response()->download($file_path);
            }

          public function download_fotocopysertifikattanah($fotocopysertifikattanah){
            $file_path = public_path('uploads/fotocopysertifikattanah/'.$fotocopysertifikattanah);
              return response()->download($file_path);
          }

          public function download_fotocopybuktipembayaranpbb($fotocopybuktipembayaranpbb){
            $file_path = public_path('uploads/fotocopybuktipembayaranpbb/'.$fotocopybuktipembayaranpbb);
              return response()->download($file_path);
          }

          public function download_gambarbangunan($gambarbangunan){
            $file_path = public_path('uploads/gambarbangunan/'.$gambarbangunan);
              return response()->download($file_path);
          }

          public function download_areaparkir($areaparkir){
            $file_path = public_path('uploads/areaparkir/'.$areaparkir);
              return response()->download($file_path);
          }

          public function download_denahlokasi($denahlokasi){
            $file_path = public_path('uploads/denahlokasi/'.$denahlokasi);
              return response()->download($file_path);
          }

          public function download_greasetrap($greasetrap){
            $file_path = public_path('uploads/greasetrap/'.$greasetrap);
              return response()->download($file_path);
          }

          public function download_aktapendiriancv($aktapendiriancv){
            $file_path = public_path('uploads/aktapendiriancv/'.$aktapendiriancv);
              return response()->download($file_path);
          }
          
          public function accept($izin_id){
            DB::table('izin')
                ->where('izin_id', $izin_id)
                ->update(['status_publikasi' => 1]);
                return Redirect::to('/perizinan_sppl');
          }

          public function not_accept($izin_id){
            DB::table('izin')
                ->where('izin_id', $izin_id)
                ->update(['status_publikasi' => 0]);
                return Redirect::to('/perizinan_sppl');
          }

          public function comment($izin_id){
            $izin_keterangan=DB::table('izin')
                                ->select('izin.*')
                                ->where('izin.izin_id', $izin_id)
                                ->get();

            $manage_izin_keterangan=view('admin.pesan')
                ->with('izin_keterangan', $izin_keterangan);
            return view('layout')
                ->with('admin.pesan',$manage_izin_keterangan);
          }

          public function comment_submit(Request $request, $izin_id){
            $konten=array();
            $konten['keterangan']=$request->content_message;
            DB::table('izin')
                ->where('izin_id', $izin_id)
                ->update($konten);
                return Redirect::to('/perizinan_sppl');
          }

          public function download_page($izin_id){

          }
}
