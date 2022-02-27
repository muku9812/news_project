<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Category;
use App\Models\Permission;
use App\Models\Setting;
use App\Models\User;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['category'] = Category::count();
        $data['user'] = User::count();
       $data['news'] = News::count();
       $data['setting'] =Setting::find(1);
        $data['permission'] =Permission::count();
        $data['active_adds'] = Advertisement::Where('status','1')->count();
        $data['news_upload']=News::all();
        $data['login_user_post']=News::where('created_by',Auth::id())->get();
        $data['count']=News::where('created_by',Auth::id())->count();
        $data['count_post']=News::whereMonth('created_at', Carbon::now()->month)->count();
        return view('home',compact('data'));

    }




    public function showChangePasswordGet() {
        return view('auth.passwords.change-password');
    }

    public function changePasswordPost(Request $request) {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            // Current password and new password same
            return redirect()->back()->with("error","New Password cannot be same as your current password.");
        }

        /** @var TYPE_NAME $validatedData */
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:8|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password =($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password successfully changed!");
    }

}
