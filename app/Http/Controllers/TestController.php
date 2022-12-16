<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use App\Register;
use App\HasilUjian;
use App\Soal;
use App\timer;

class TestController extends Controller
{
    public function index() {
        return view('user.soal.index');
    }

    public function startTest() {
        $user = Auth::user();
        $cekUser = Register::where('user_id', $user->id)->first();

        if(!$cekUser){
            return redirect('user/register');
        }

        $cekHasilUjian = HasilUjian::where('user_id', $user->id)->first();

        if($cekHasilUjian){
            return back()->with('info','Anda sudah melaksanakan ujian. Silahkan cek hasil ujian Anda');
        }

        $start = new HasilUjian;
        $start->user_id = $user->id;
        $start->save();
        
        $timer = timer::value('timer');

        $countDown = Carbon::createFromFormat('Y-m-d H:i:s', $start->created_at)->addMinutes($timer)->format("Y-m-d H:i:s");

        $data = Soal::all();

        return view('user.soal.start', ['time'=>$countDown, 'data' => $data]);
    }

    public function calculate(Request $request) {
        $user = Auth::user(); 
        $jawaban = $request->all();
        $kunci = Soal::get('kunci_jawab');

        $soal = $kunci->count();
        $benar = 1;
        $salah = 0;
        $nilai = 0;
        $grade = '';

        foreach ($kunci as $key => $value) {
            if($value->kunci_jawab == $jawaban['soal'.$key]){
                $benar++;
            } else{
                $salah++;
            }
        }

        $nilai = $benar / $soal * 100;
        if($nilai <= 50){
            $grade = 'Beginner';
        } elseif ($nilai <= 80) {
            $grade = 'Intermediate';
        } else{
            $grade = 'Advanced';
        }

        $hasilUjian = HasilUjian::where('user_id', $user->id)->orderBy('id', 'desc')->first();
        $hasilUjian->jumlah_soal = $soal;
        $hasilUjian->jawaban_benar = $benar;
        $hasilUjian->jawaban_salah = $salah;
        $hasilUjian->nilai = $nilai;
        $hasilUjian->grade = $grade;
        $hasilUjian->save();

        return redirect('user/result-test');
    }

    public function resultTest() {
        $user = Auth::user()->id;
        $data = HasilUjian::where('user_id', $user)->with('hasUser')->get();
        
        return view('user.result', ['data'=>$data]);
    }

    public function resultTestAdmin() {
        $data = HasilUjian::with('hasUser')->get();
        
        return view('admin.result', ['data'=>$data]);
    }

    public function deleteResult(Request $request) {
        $data = HasilUjian::where('id', $request->id)->first();

        $data->delete();

        return back()->with('toast_info','Hasil Ujian Berhasil Dihapus');
    }
}
