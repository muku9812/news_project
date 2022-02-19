<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdvertisementRequest;
use App\Models\AddPlacement;
use App\Models\Advertisement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Advertisement::all();
        $data['rows'] = Advertisement::orderBy('id','desc')->get();
        return view('backend.advertisement.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['placements'] = AddPlacement::all();
        return view('backend/advertisement/create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdvertisementRequest $request)
    {

        $file = $request->file('image_file');
        if ($request->hasFile("image_file")) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images/advertisement'), $fileName);
            $request->request->add(['image' => $fileName]);
        }
        $row = Advertisement::create($request->all());
        if($row){
            $request->session()->flash('success','Advertisement Created Successfully');
        } else{
            $request->session()->flash('error','Advertisement Creation failed');

        }
        return redirect()->route('advertisement.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data=Advertisement::all();
        $data['row'] = Advertisement::find($id);

        return view('backend.advertisement.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['row'] = Advertisement::find($id);
        $data['placements'] = AddPlacement::all();
        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('backend.advertisement.index');
        }
        return view('backend.advertisement.edit', compact('data'));
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
        $data['row'] = Advertisement::find($id);
        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('advertisement.index');
        }
        $file = $request->file('image_file');
        if ($request->hasFile("image_file")) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images/advertisement'), $fileName);
            $request->request->add(['image' => $fileName]);
            File::delete(public_path() . 'uploads/images/advertisement/'. $data['row']->image); // Delete old flyer

            if ($data['row']->update($request->all())) {

                $request->session()->flash('success', 'Advertisement updated Successfully');
            } else {
                $request->session()->flash('error', 'Advertisement update failed');
            }
        }
        return redirect()->route('advertisement.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data['row'] =Advertisement::find($id);
        if ($data['row']) {
            if ($data['row']->delete()) {
                File::delete(public_path() . 'uploads/images/advertisement/'. $data['row']->image); // Delete old flyer
                request()->session()->flash('success', 'Advertisement Deleted Successfully');

            } else {
                request()->session()->flash('error', 'Advertisement Deletion failed');
            }
        } else {
            request()->session()->flash('error', 'Invalid request');
        }
        return redirect()->route('advertisement.index');
    }

    public function active()
    {
        $data['adds_active']=Advertisement::where('status','1')->get();
        return view('backend.advertisement.active',compact('data'));
    }
    public function ChangeAdvertisementStatus(Request $request){

       $data['rows'] = Advertisement::find($request->row_id);
       $data['rows'] -> status=$request->status;
        $data['rows']  ->save();


    }
}
