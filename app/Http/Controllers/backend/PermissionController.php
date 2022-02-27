<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        $data['rows'] = Permission::latest()->get();
        return view('backend.permission.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['module_id'] = Module::all();
        return view('backend.permission.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row = Permission::create($request->all());
        if ($row) {
            $request->session()->flash('success', 'Permission Created Successfully');
        } else {
            $request->session()->flash('error', 'Permission Creation failed');

        }
        return redirect()->route('permission.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['row'] = Permission::find($id);
        return view('backend.permission.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['row'] = Permission::find($id);
        if (!$data ['row']) {
            request()->session()->flash('error', 'Invalid Request');
            return redirect()->route('permission.role.index');
        }
        return view('backend.permission.edit', compact('data'));
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
        $data['row'] = Permission::find($id);
        if (!$data ['row']) {
            request()->session()->flash('error', 'Invalid Request');
            return redirect()->route('permission.index');
        }
        if ($data['row']->update($request->all())) {
            $request->session()->flash('success', 'Permission update Successfully');
        } else {
            $request->session()->flash('error', 'Permission Update failed');

        }
        return redirect()->route('permission.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data['row'] = Permission::find($id);
        if ($data['row']) {
            if ($data['row']->delete()) {
                request()->session()->flash('success', 'Permission Deleted Successfully');

            } else {
                request()->session()->flash('error', 'Permission Deletion failed');
            }
        } else {
            request()->session()->flash('error', 'Invalid request');
        }
        return redirect()->route('permission.index');
    }
    public function ChangePermissionStatus(Request $request){

        $data['rows'] = Permission::find($request->row_id);
        $data['rows'] -> status=$request->status;
        $data['rows']  ->save();


    }
}
