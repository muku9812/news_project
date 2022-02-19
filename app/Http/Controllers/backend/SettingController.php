<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Setting::all();
        $data['rows'] = Setting::all();
        return view('backend.setting.index',compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/setting/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SettingRequest $request)
    {

        $file = $request->file('image_file');
        if ($request->hasFile("image_file")) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images/setting/logo'), $fileName);
            $request->request->add(['logo' => $fileName]);
        }

        $file = $request->file('image_files');
        if ($request->hasFile("image_files")) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images/setting/fav_icon'), $fileName);
            $request->request->add(['fav_icon' => $fileName]);
        }

        $row = Setting::create($request->all());
        if($row){
            $request->session()->flash('success','Setting Created Successfully');
        } else{
            $request->session()->flash('error','Setting Creation failed');

        }
        return redirect()->route('setting.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data=Setting::all();
        $data['row'] = Setting::find($id);

        return view('backend.setting.show',compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['row'] = Setting::find($id);
        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('backend.setting.index');
        }
        return view('backend.setting.edit', compact('data'));
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
        $data['row'] = Setting::find($id);
        if (!$data ['row']) {
            request()->session()->flash('error', 'Invalid Request');
            return redirect()->route('setting.index');
        }
//        if ($data['row']->update($request->all())) {
//            $request->session()->flash('success', 'Setting update Successfully');
//        } else {
//            $request->session()->flash('error', 'Setting Update failed');
//
//        }
        $file = $request->file('image_file');

        if ($request->hasfile("image_file")) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images/setting/logo'), $fileName);
            $request->request->add(['logo' => $fileName]);
            File::delete(public_path() . '/uploads/images/setting/logo/'. $data['row']->image); // Delete old flyer
            if ($data['row']->update($request->all())) {

                $request->session()->flash('success', 'Setting updated Successfully');
            } else {
                $request->session()->flash('error', 'Setting update failed');
            }
        }

            return redirect()->route('setting.index');
        }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data['row'] =Setting::find($id);
        if ($data['row']) {
            if ($data['row']->delete()) {
                request()->session()->flash('success', 'Setting Deleted Successfully');

            } else {
                request()->session()->flash('error', 'Setting Deletion failed');
            }
        } else {
            request()->session()->flash('error', 'Invalid request');
        }
        return redirect()->route('setting.index');
    }
}
