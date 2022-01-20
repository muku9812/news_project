<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\Permission;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function index()
    {
        $data['rows'] = Module::all();
        return view('backend.modules.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend/modules/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row = Module::create($request->all());
        if ($row) {
            $request->session()->flash('success', 'Permission Created Successfully');
        } else {
            $request->session()->flash('error', 'Permission Creation failed');

        }
        return redirect()->route('module.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['row'] = Module::find($id);
        return view('backend.modules.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['row'] = Module::find($id);
        if (!$data ['row']) {
            request()->session()->flash('error', 'Invalid Request');
            return redirect()->route('module.role.index');
        }
        return view('backend.modules.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data['row'] = Module::find($id);
        if (!$data ['row']) {
            request()->session()->flash('error', 'Invalid Request');
            return redirect()->route('module.index');
        }
        if ($data['row']->update($request->all())) {
            $request->session()->flash('success', 'Permission update Successfully');
        } else {
            $request->session()->flash('error', 'Permission Update failed');

        }
        return redirect()->route('module.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data['row'] = Module::find($id);
        if ($data['row']) {
            if ($data['row']->delete()) {
                request()->session()->flash('success', 'Permission Deleted Successfully');

            } else {
                request()->session()->flash('error', 'Permission Deletion failed');
            }
        } else {
            request()->session()->flash('error', 'Invalid request');
        }
        return redirect()->route('module.index');
    }
    public function ChangeModuleStatus(Request $request){

        $data['rows'] = Module::find($request->row_id);
        $data['rows'] -> status=$request->status;
        $data['rows']  ->save();


    }
}
