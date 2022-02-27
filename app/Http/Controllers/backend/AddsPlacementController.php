<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\AddPlacement;
use Illuminate\Http\Request;

class AddsPlacementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rows'] = AddPlacement::all();
        return view('backend.placement.index',compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend/placement/create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row = AddPlacement::create($request->all());
        if($row){
            $request->session()->flash('success','New placement for Advertisement Created Successfully');
        } else{
            $request->session()->flash('error','New placement for Advertisement Creation failed');

        }
        return redirect()->route('placement.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['row'] = AddPlacement::find($id);
        return view('backend.placement.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['row'] = AddPlacement::find($id);
        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('backend.placement.index');
        }
        return view('backend.placement.edit', compact('data'));
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
        $data['row'] = AddPlacement::find($id);
        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('placement.index');
        }
        if ($data['row']->update($request->all())) {
            $request->session()->flash('success', 'Placement update Successfully');
        } else {
            $request->session()->flash('error', 'Placement Update failed');

        }
        return redirect()->route('placement.index');
    }
    public function ChangePlacementStatus(Request $request){

        $data['rows'] = AddPlacement::find($request->row_id);
        $data['rows'] -> status=$request->status;
        $data['rows']  ->save();


    }
}
