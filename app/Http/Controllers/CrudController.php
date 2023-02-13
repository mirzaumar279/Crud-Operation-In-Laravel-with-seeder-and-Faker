<?php

namespace App\Http\Controllers;

use App\Models\crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res=new crud;
        $res->name=$request->input('name');
        $res->email=$request->input('email');
        $res->address=$request->input('address');
        $res->phone=$request->input('phone');
        $res->save();
        $request->session()->flash('msg','Data has been Added Successfully');
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
          $search = $request['search'] ?? '';
        if ($search != '') {
            $crudArr = crud::where('name', 'LIKE', "%$search%")
                ->orWhere('email', 'LIKE', "%$search%")
                ->get();
        } else {
            $crudArr = crud::all();
        }
        $data = compact('crudArr', 'search');
        return view('home')->with($data);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function edit(crud $crud,$id)
    {
        return view('edit')->with('crudArr',crud::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, crud $crud)
    {
        $res=crud::find($request->id);
        $res->name=$request->input('name');
        $res->email=$request->input('email');
        $res->address=$request->input('address');
        $res->phone=$request->input('phone');
        $res->save();
        $request->session()->flash('msg','Data has been Updated Successfully');
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function destroy(crud $crud,$id)
    {
        crud::destroy(array('id',$id));
        return redirect('/');
    }
    public function detail(crud $crud,$id)
    {
        return view('detail')->with('crudArr',crud::find($id));
    }
}