<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=News::all();
        $data['rows'] = News::orderBy('id', 'DESC')->get();
        return view('backend.news.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['category_id'] = Category::all();
        return view('backend/news/create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {   $file = $request->file('image_file');
        if ($request->hasFile("image_file")) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images/news'), $fileName);
            $request->request->add(['feature_image' => $fileName]);
        }
        $row = News::create($request->all());
        if($row){
            $request->session()->flash('success','News Created Successfully');
        } else{
            $request->session()->flash('error','News Creation failed');

        }
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=News::all();
        $data['row'] = News::find($id);

        return view('backend.news.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['category_id'] = Category::all();
        $data['row'] = News::find($id);
        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('backend.news.index');
        }
        return view('backend.news.edit', compact('data'));
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
        $data['row'] = News::find($id);
        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('news.index');
        }
        if ($data['row']->update($request->all())) {
            $request->session()->flash('success', 'News update Successfully');
        } else {
            $request->session()->flash('error', 'News Update failed');

        }
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data['row'] =News::find($id);
        if ($data['row']) {
            if ($data['row']->delete()) {
                request()->session()->flash('success', 'News Deleted Successfully');

            } else {
                request()->session()->flash('error', 'News Deletion failed');
            }
        } else {
            request()->session()->flash('error', 'Invalid request');
        }
        return redirect()->route('news.index');
    }
    public function ChangeNewsStatus(Request $request){

        $data['rows'] = News::find($request->row_id);
        $data['rows'] -> status=$request->status;
        $data['rows']  ->save();


    }
    public function ChangeFeatureKey(Request $request){

        $data['rows'] = News::find($request->row_id);
        $data['rows'] -> feature_key=$request->feature_key;
        $data['rows']  ->save();
    }

    public function ChangeSliderKey(Request $request){

        $data['rows'] = News::find($request->row_id);
        $data['rows'] -> slider_key=$request->slider_key;
        $data['rows']  ->save();
    }

    public function ChangeBreakingKey(Request $request){

        $data['rows'] = News::find($request->row_id);
        $data['rows'] -> breaking_key=$request->breaking_key;
        $data['rows']  ->save();
    }
}
