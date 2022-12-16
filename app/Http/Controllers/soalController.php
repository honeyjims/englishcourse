<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Soal;
use App\timer;
use Illuminate\Support\Str;


class soalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soal = Soal::all();
        $timer = timer::value('timer');
        return view('admin.soal.index', ['soal'=>$soal, 'timer'=>$timer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.soal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'soal' => 'required',
            'jawab_a' => 'required',
            'jawab_b' => 'required',
            'jawab_c' => 'required',
            'jawab_d' => 'required',
            'jawab_e' => 'required',
            'kunci_jawab' => 'required',
        ]);

        $soal = new Soal;
        $soal->soal = $request->soal;
        $soal->jawab_a = $request->jawab_a;
        $soal->jawab_b = $request->jawab_b;
        $soal->jawab_c = $request->jawab_c;
        $soal->jawab_d = $request->jawab_d;
        $soal->jawab_e = $request->jawab_e;
        $soal->kunci_jawab = $request->kunci_jawab;

        if($request->file){
            $file = $request->file;
            $file_name = time()."_".Str::random(10);
            $file->move('audio', $file_name);
            $soal->url_audio = $file_name;
        }

        $soal->save();

        return redirect('admin/daftar-soal')->with('toast_success','Soal Telah Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $soal = Soal::findorfail($id);
        return view('admin.soal.edit', compact('soal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $soal = Soal::findorfail($id);
        $soal->soal = $request->soal;
        $soal->jawab_a = $request->jawab_a;
        $soal->jawab_b = $request->jawab_b;
        $soal->jawab_c = $request->jawab_c;
        $soal->jawab_d = $request->jawab_d;
        $soal->jawab_e = $request->jawab_e;
        $soal->kunci_jawab = $request->kunci_jawab;

        if($request->file){
            $file = $request->file;
            $file_name = time()."_".Str::random(10);
            $file->move('audio', $file_name);
            $soal->url_audio = $file_name;
        }

        $soal->save();
  
        return redirect('admin/daftar-soal')->with('toast_success','Soal Telah Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $soal = Soal::findorfail($id);
        $soal->delete();
  
        return back()->with('toast_info','Soal Berhasil Dihapus');
    }

    public function setTimer(Request $request)
    {
        $data = timer::first();

        if($data){
            $data->timer = $request->timer;
            $data->save();
        } else{
            $data = new timer;
            $data->timer = $request->timer;
            $data->save();
        }

        return back()->with('toast_info', 'Waktu Pengerjaan Tes Berhasil Diatur');
    }
}
