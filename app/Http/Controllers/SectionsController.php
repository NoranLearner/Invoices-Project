<?php

namespace App\Http\Controllers;

use App\Models\sections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SectionsController extends Controller
{
    function __construct(){
        // $this->middleware('permission: الاعدادات', ['only' => ['index']]);
        // $this->middleware('permission: الاقسام', ['only' => ['index']]);
        // $this->middleware('permission: اضافة قسم', ['only' => ['store']]);
        // $this->middleware('permission: تعديل قسم', ['only' => ['update']]);
        // $this->middleware('permission: حذف قسم', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = sections::all();
        return view('sections.sections', compact('sections'));
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
        // First Code
        /* $input = $request->all();
        $b_exists = sections::where('section_name' , '=' , $input['section_name']) -> exists();
        if ($b_exists) {
            session()->flash('Error', 'خطأ القسم مسجل مسبقا');
            return redirect('/sections');
        } else {
            sections::create(
                [
                    'section_name' => $request->section_name,
                    'description' => $request->description,
                    'Created_by' => (Auth::user()->name),
                ]
            );
            session()->flash('Add', 'تم اضافة القسم بنجاح ');
            return redirect('/sections');
        } */

        // Second Code
        $validatedData = $request->validate(
            [
            'section_name' => 'required|unique:sections|max:255',
            'description' => 'required',
            ],[
            'section_name.required' =>'يرجي ادخال اسم القسم',
            'section_name.unique' =>'اسم القسم مسجل مسبقا',
            'description.required' =>'يرجي ادخال الوصف',
            ]
        );
        sections::create(
            [
            'section_name' => $request->section_name,
            'description' => $request->description,
            'Created_by' => (Auth::user()->name),
            ]
        );
        session()->flash('Add', 'تم اضافة القسم بنجاح ');
        return redirect('/sections');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sections  $sections
     * @return \Illuminate\Http\Response
     */
    public function show(sections $sections)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sections  $sections
     * @return \Illuminate\Http\Response
     */
    public function edit(sections $sections)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sections  $sections
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;

        $this->validate($request, [
            'section_name' => 'required|max:255|unique:sections,section_name,'.$id,
            'description' => 'required',
        ],[

            'section_name.required' =>'يرجي ادخال اسم القسم',
            'section_name.unique' =>'اسم القسم مسجل مسبقا',
            'description.required' =>'يرجي ادخال الوصف',
        ]);

        $sections = sections::find($id);
        $sections->update([
            'section_name' => $request->section_name,
            'description' => $request->description,
        ]);

        session()->flash('edit','تم تعديل القسم بنجاح');
        return redirect('/sections');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sections  $sections
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        sections::find($id)->delete();
        session()->flash('delete','تم حذف القسم بنجاح');
        return redirect('/sections');
    }
}
