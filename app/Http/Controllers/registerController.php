<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;
use Auth;

class registerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $register = Register::paginate(5);
        return view('admin.index', compact('register'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Auth::user();

        return view('user.create', ['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'jenis_kelamin' => 'required',
            'status' => 'required',
            'school_name' => 'required',
            'address' => 'required',
            'no_hp' => 'required|min:11|numeric',
        ]);

        $valid = \Validator::make($request->all(),[
            'email' => 'unique:register_course,email',
            'no_hp' => 'unique:register_course',
        ]);

        if ($valid->fails()) {
            return back()->with('info','Anda sudah terdaftar.');
        }

        if ($validator->fails()) {
            $errors = $validator->errors();
            return back()->with('info','Data yang anda masukkan kosong');
            } else {
                Register::create($request->all());
                return redirect('user/placement-test')->with('success','Registered Successfully!');
        }
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reg = Register::findorfail($id);
        return view('admin.edit',compact('reg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reg = Register::findorfail($id);
        $reg->update($request->all());
  
        return redirect('admin/data')->with('success','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reg = Register::findorfail($id);
        $reg->delete();
  
        return back()->with('info','Data Deleted Successfully');
    }
}
