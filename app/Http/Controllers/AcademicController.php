<?php

namespace App\Http\Controllers;

use App\Models\Academic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AcademicController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.academic_year.index',['academics' => Academic::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.academic_year.create');
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
        // $validator = Validator::make($request->all(),[
        //     'year' => 'required'
        // ],[

        // ]);

        // if($validator->fails()){
        //     return back()
        //             ->withErrors($validator)
        //             ->withInput();
        // }
        $request->validate(
        ['year' => 'required'],
        ['year.required' => 'Please Enter Academic Year field.']
        );

        if(Academic::create($request->except('_token'))){
            return redirect()->route('academic.index');
        }
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
        return view('admin.academic_year.edit',['year' => Academic::find($id)]);
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
        $request->validate(
            ['year' => 'required'],
            ['year.required' => 'Please Enter Academic Year field.']
        );

        if(Academic::where('id',$id)->update($request->except(['_token','_method']))){
            return redirect()->route('academic.index');
        }
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
        $year = Academic::find($id);

        if($year->delete()){
            return redirect()->route('academic.index'); 
        }
    }
}
