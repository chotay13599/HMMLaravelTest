<?php

namespace App\Http\Controllers;

use App\Models\Academic;
use App\Models\Program;
use App\Models\StudentRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FEStudentRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        //
        
        $programs=Program::all();
        $academics=Academic::all();


        // dd($programs);

        return view('index',['programs'=>$programs,'academics'=>$academics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->except('_token');
        // $file=$request->file('nrc_img');

        // $name=$request->file('nrc_img')->getClientOriginalName();
        // $new_name=time().$name;

        // $destinationPath=public_path().'/img';
        // $file->move($destinationPath,$new_name);

        DB::table('student_registers')->insert($data);
        return redirect()->route('registerForm.index');
        
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
