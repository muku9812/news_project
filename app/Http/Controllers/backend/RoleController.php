<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rows'] = Role::all();
        return view('backend.role.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend/role/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row = Role::create($request->all());
        if($row){
            $request->session()->flash('success','Role Created Successfully');
        } else{
            $request->session()->flash('error','Role Creation failed');

        }
        return redirect()->route('role.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['row'] = Role::find($id);
        return view('backend.role.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['row'] = Role::find($id);
        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('backend.role.index');
        }
        return view('backend.role.edit', compact('data'));
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
        $data['row'] = Role::find($id);
        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('role.index');
        }
        if ($data['row']->update($request->all())) {
            $request->session()->flash('success', 'Role update Successfully');
        } else {
            $request->session()->flash('error', 'Role Update failed');

        }
        return redirect()->route('role.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data['row'] =Role::find($id);
        if ($data['row']) {
            if ($data['row']->delete()) {
                request()->session()->flash('success', 'Role Deleted Successfully');

            } else {
                request()->session()->flash('error', 'Role Deletion failed');
            }
        } else {
            request()->session()->flash('error', 'Invalid request');
        }
        return redirect()->route('role.index');
    }

    function assignPermission($roleId){
        $data['row'] = Role::find($roleId);

        /* to get assigned permission*/
        $data['permissions'] = $data['row']->permissions()->get();
        $assigned_permission = [];
        foreach($data['permissions'] as $permission){
            array_push($assigned_permission,$permission->id);
        }
        $data['assigned_permission'] = $assigned_permission;
        /*end of assigned permission*/

        $data['modules'] = Module::all();
        return view('backend.role.assignrole',compact('data'));
    }

    function postPermission(Request $request){
        $data['row'] = Role::find($request->input('role_id'));
        $data['row']->permissions()->sync($request->input('permission_id'));
        return redirect()->route('role.index');

    }
    public function ChangeRoleStatus(Request $request){

        $data['rows'] = Role::find($request->row_id);
        $data['rows'] -> status=$request->status;
        $data['rows']  ->save();


    }


    }
