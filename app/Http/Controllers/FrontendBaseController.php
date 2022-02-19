<?php

namespace App\Http\Controllers;

use App\Models\AddPlacement;
use App\Models\Advertisement;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Setting;
use App\Models\News;
use Krishnahimself\DateConverter\DateConverter;
use Carbon\Carbon;

class FrontendBaseController extends Controller
{
    public function index(){
        $data['brk']= News::where('slider_key','1')->latest()->take(9)->get();
        $data['row']= Setting::find(1);
       $data['new'] = News::latest()->take(3)->where('status','1')->where('feature_key','1')->get();
        $data['news'] = News::all();
        $data['slide']=News::where('slider_key','1')->get();
        $data['breaking']=News::Where('breaking_key','1')->orderBy('id','desc')->take(7)->where('status','1')->get();
        $data['break']=News::where('breaking_key','1')->orderBy('id','desc')->skip(1)->take(4)->where('status','1')->get();
        $data['latest_break'] = News::where('breaking_key','1')->orderBy('created_at','desc')->skip(5)->take(4)->where('status','1')->get();
        $data['category']=Category::all();
        $data['features']=News::where('breaking_key','1')->latest()->take(1)->where('status','1')->get();
//        $ent=Category::where('name','मनोरन्जन')->pluck('id');
//
////        $data['entertain']=News::Where('category_id',$ent)->where('status','1')->latest()->take(4)->get();
        $ent1=Category::where('name','मनोरञ्जन')->pluck('id');
        $data['entertainment1']=News::Where('category_id',$ent1)->where('status','1')->latest()->skip(1)->take(2)->get();

        $ent2=Category::where('name','मनोरञ्जन')->pluck('id');
        $data['entertainment2']=News::Where('category_id',$ent2)->where('status','1')->latest()->take(1)->get();

        $ent3=Category::where('name','मनोरञ्जन')->pluck('id');
        $data['entertainment3']=News::Where('category_id',$ent3)->where('status','1')->latest()->skip(3)->take(2)->get();

        $inter=Category::where('name','अन्तर्राष्ट्रिय')->pluck('id');
        $data['international']=News::Where('category_id',$inter)->where('status','1')->latest()->skip(1)->take(4)->get();

        $inter1=Category::where('name','अन्तर्राष्ट्रिय')->pluck('id');
        $data['international1']=News::Where('category_id',$inter1)->where('status','1')->latest()->take(1)->get();

        $sport1=Category::where('name','खेलकुद')->pluck('id');
        $data['sport1']=News::Where('category_id',$sport1)->where('status','1')->latest()->take(3)->get();

//        $sport2=Category::where('name','खेलकुद')->pluck('id');
        $data['sport2']=News::Where('category_id',$sport1)->where('status','1')->latest()->skip(1)->take(2)->get();

//        $sport3=Category::where('name','खेलकुद')->pluck('id');
        $data['sport3']=News::Where('category_id',$sport1)->where('status','1')->latest()->skip(3)->take(2)->get();

        $uncat1=Category::where('name','अन्य')->pluck('id');
        $data['uncat1']=News::Where('category_id',$uncat1)->where('status','1')->latest()->take(1)->get();

        $data['uncat2']=News::Where('category_id',$uncat1)->where('status','1')->latest()->skip(1)->take(4)->get();

        $data['uncat3']=News::Where('category_id',$uncat1)->where('status','1')->latest()->skip(5)->take(1)->get();

        $data['lok']=News::where('status','1')->orderBy('view_count', 'DESC')->take(7)->get();

        $data['lok1']=News::where('status','1')->orderBy('view_count', 'DESC')->take(1)->get();
        $data['lok2']=News::where('status','1')->orderBy('view_count', 'DESC')->skip(1)->take(4)->get();
        $data['lok3']=News::where('status','1')->orderBy('view_count', 'DESC')->skip(5)->take(4)->get();

        $shr=Category::where('name','सेयर बजार')->pluck('id');
        $data['shr']=News::Where('category_id',$shr)->where('status','1')->where('breaking_key','1')->latest()->take(1)->get();
        $data['shr1']=News::Where('category_id',$shr)->where('status','1')->where('breaking_key','1')->latest()->skip(1)->take(1)->get();





        $edu=Category::where('name','शिक्षा')->pluck('id');
        $data['edu']=News::Where('category_id',$edu)->where('status','1')->latest()->take(4)->get();
        $data['edu1']=News::Where('category_id',$edu)->where('status','1')->latest()->skip(4)->take(4)->get();
        $data['edu2']=News::Where('category_id',$edu)->where('status','1')->latest()->skip(8)->take(4)->get();



        $data['pd1']=News::where('pradesh','1')->where('status','1')->latest()->take(3)->get();
        $data['pd2']=News::where('pradesh','2')->where('status','1')->latest()->take(3)->get();
        $data['pd3']=News::where('pradesh','3')->where('status','1')->latest()->take(3)->get();
        $data['pd4']=News::where('pradesh','4')->where('status','1')->latest()->take(3)->get();
        $data['pd5']=News::where('pradesh','5')->where('status','1')->latest()->take(3)->get();
        $data['pd6']=News::where('pradesh','6')->where('status','1')->latest()->take(3)->get();
        $data['pd7']=News::where('pradesh','7')->where('status','1')->latest()->take(3)->get();
        $data['latests']=News::where('status','1')->latest()->take(4)->where('slider_key','1')->get();
        $data['change'] = Advertisement::where('expire_date','<',now())->update(['status'=>'0']);

        $place=AddPlacement::where('name','Top Down')->where('status','1')->pluck('id');
        $data['adds']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',$place)->get();

        $places=AddPlacement::where('name','Top')->where('status','1')->pluck('id');
        $data['add_top']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id', $places)->take(1)->get();


        $mid=AddPlacement::where('name','Mid Left')->where('status','1')->pluck('id');
        $data['top']=Advertisement::where('status','1')->where('expire_date','>',now())->latest()->take(1)->where('placement_id',$mid)->get();

        $year=carbon::now()->year;
        $month=carbon::now()->month;
        $day=carbon::now()->day;
        $nepaliDate = DateConverter::fromEnglishDate($year,$month,$day)->toFormattedNepaliDate();
        $place=AddPlacement::where('name','Top Right')->where('status','1')->pluck('id');
        $data['addss']=Advertisement::where('status','1')->where('expire_date','>',now())->take(3)->where('placement_id',$place)->get();
        $data['addsss']=Advertisement::where('status','1')->where('expire_date','>',now())->take(2)->where('placement_id',$place)->get();

        $down=AddPlacement::where('name','Index Down')->where('status','1')->pluck('id');
        $data['index_down']=Advertisement::where('status','1')->where('expire_date','>',now())->take(4)->where('placement_id',$down)->get();


        return view('frontend.index',compact('data','nepaliDate'));
    }
    public function details($slug){
        $data['brk']= News::where('feature_key','1')->latest()->take(9)->get();
        $data['row']= Setting::find(1);
        $data['news'] = News::where('slug',$slug)->first();
        $data['news']->view_count=$data['news']->view_count +1;
        $data['news']->update();
        $data['category']=Category::all();
        $skip=News::where('slug',$slug)->pluck('id');
        $data['cate']=News::where('Category_id', $data['news']->CategoryId->id)->where('status','1')->take(4)->orderBy('id','desc')->get();
        $places=AddPlacement::where('name','Top')->where('status','1')->pluck('id');
        $place=AddPlacement::where('name','Top Right')->where('status','1')->pluck('id');
        $data['adds']=Advertisement::where('status','1')->where('expire_date','>',now())->take(2)->where('placement_id',$place)->get();
        $data['add_top']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',$places)->take(1)->get();
        $down=AddPlacement::where('name','Details Down')->where('status','1')->pluck('id');
        $data['details_down1']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',$down)->take(1)->latest()->get();
        $data['details_down']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',$down)->take(2)->skip(1)->latest()->get();
        $year=carbon::now()->year;
        $month=carbon::now()->month;
        $day=carbon::now()->day;
        $nepaliDate = DateConverter::fromEnglishDate($year,$month,$day)->toFormattedNepaliDate();


        $data['comm'] = News::where('slug',$slug)->pluck('id');
        $data['comment']=Comment::where('news_id',$data['comm']  )->take(3)->orderBy('id','desc')->get();

//      dd($data);
        return view('frontend.details',compact('data','nepaliDate'));
    }
    public function blog(){

        return view('frontend.blog');
    }
    public function categori(){

        $data['brk']= News::where('slider_key','1')->latest()->take(9)->get();
        $data['row']= Setting::find(1);
        $data['adds']=Advertisement::where('status','1')->get();
        $places=AddPlacement::where('name','Top')->where('status','1')->pluck('id');
        $data['add_top']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',$places)->take(1)->get();

        $year=carbon::now()->year;
        $month=carbon::now()->month;
        $day=carbon::now()->day;
        $international=News::where('category_id','2')->orderby('id','desc')->get();
        $nepaliDate = DateConverter::fromEnglishDate($year,$month,$day)->toFormattedNepaliDate();
        return view('frontend.categori',compact('data','nepaliDate','international'));
    }

    public function politics(){

        $data['brk']= News::where('slider_key','1')->latest()->take(9)->get();
        $data['row']= Setting::find(1);
        $data['adds']=Advertisement::where('status','1')->get();
        $places=AddPlacement::where('name','Top')->where('status','1')->pluck('id');
        $place=AddPlacement::where('name','Top Down')->where('status','1')->pluck('id');


        $data['add_top']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',  $places)->take(1)->get();
        $data['add_td']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',$place)->take(2)->get();
        $year=carbon::now()->year;
        $month=carbon::now()->month;
        $day=carbon::now()->day;
        $international=News::where('category_id','2')->orderby('id','desc')->get();
        $nepaliDate = DateConverter::fromEnglishDate($year,$month,$day)->toFormattedNepaliDate();
        $dat=Category::where('name','राजनीति')->pluck('id');
//        dd($dat);
        $cat=News::where('category_id',$dat)->orderBy('created_at','desc')->paginate(9);



        return view('frontend.politics',compact('data','nepaliDate','international','cat'));
    }
    public function entertainment(){

        $data['brk']= News::where('slider_key','1')->latest()->take(9)->get();
        $data['row']= Setting::find(1);
        $data['adds']=Advertisement::where('status','1')->get();
        $places=AddPlacement::where('name','Top')->where('status','1')->pluck('id');
        $data['add_top']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',$places)->take(1)->get();
        $place=AddPlacement::where('name','Top Down')->where('status','1')->pluck('id');
        $data['add_td']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',$place)->take(2)->get();

        $year=carbon::now()->year;
        $month=carbon::now()->month;
        $day=carbon::now()->day;
        $international=News::where('category_id','2')->orderby('id','desc')->get();
        $nepaliDate = DateConverter::fromEnglishDate($year,$month,$day)->toFormattedNepaliDate();
        $dat=Category::where('name','मनोरञ्जन')->pluck('id');
//        dd($dat);
        $cat=News::where('category_id',$dat)->orderBy('created_at','desc')->paginate(9);



        return view('frontend.entertainment',compact('data','nepaliDate','international','cat'));
    }

    public function sports(){

        $data['brk']= News::where('slider_key','1')->latest()->take(9)->get();
        $data['row']= Setting::find(1);
        $data['adds']=Advertisement::where('status','1')->get();
        $place=AddPlacement::where('name','Top Down')->where('status','1')->pluck('id');
        $data['add_td']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',$place)->take(2)->get();

        $places=AddPlacement::where('name','Top')->where('status','1')->pluck('id');
        $data['add_top']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',$places)->take(1)->get();
        $year=carbon::now()->year;
        $month=carbon::now()->month;
        $day=carbon::now()->day;
        $international=News::where('category_id','2')->orderby('id','desc')->get();
        $nepaliDate = DateConverter::fromEnglishDate($year,$month,$day)->toFormattedNepaliDate();
        $dat=Category::where('name','खेलकुद')->pluck('id');
//        dd($dat);
        $cat=News::where('category_id',$dat)->orderBy('created_at','desc')->paginate(9);



        return view('frontend.sports',compact('data','nepaliDate','international','cat'));
    }
    public function international(){
        $data['brk']= News::where('slider_key','1')->latest()->take(9)->get();
        $data['row']= Setting::find(1);
        $data['adds']=Advertisement::where('status','1')->get();
        $places=AddPlacement::where('name','Top')->where('status','1')->pluck('id');
        $place=AddPlacement::where('name','Top Down')->where('status','1')->pluck('id');

        $data['add_td']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',$place)->take(2)->get();

        $data['add_top']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',$places)->take(1)->get();
        $year=carbon::now()->year;
        $month=carbon::now()->month;
        $day=carbon::now()->day;
        $international=News::where('category_id','2')->orderby('id','desc')->get();
        $nepaliDate = DateConverter::fromEnglishDate($year,$month,$day)->toFormattedNepaliDate();
        $dat=Category::where('name','अन्तर्राष्ट्रिय')->pluck('id');
//        dd($dat);
        $cat=News::where('category_id',$dat)->orderBy('created_at','desc')->paginate(9);



        return view('frontend.international',compact('data','nepaliDate','international','cat'));
    }
    public function pradesh1(){

        $data['brk']= News::where('slider_key','1')->latest()->take(9)->get();
        $data['row']= Setting::find(1);
        $data['adds']=Advertisement::where('status','1')->get();
        $places=AddPlacement::where('name','Top')->where('status','1')->pluck('id');
        $place=AddPlacement::where('name','Top Down')->where('status','1')->pluck('id');


        $data['add_top']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',  $places)->take(1)->get();
        $data['add_td']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',$place)->take(2)->get();
        $year=carbon::now()->year;
        $month=carbon::now()->month;
        $day=carbon::now()->day;
        $international=News::where('category_id','2')->orderby('id','desc')->get();
        $nepaliDate = DateConverter::fromEnglishDate($year,$month,$day)->toFormattedNepaliDate();

//        dd($dat);
        $cat=News::where('pradesh','1')->paginate(9);



        return view('frontend.pradesh1',compact('data','nepaliDate','international','cat'));
    }
    public function pradesh2(){

        $data['brk']= News::where('slider_key','1')->latest()->take(9)->get();
        $data['row']= Setting::find(1);
        $data['adds']=Advertisement::where('status','1')->get();
        $places=AddPlacement::where('name','Top')->where('status','1')->pluck('id');
        $place=AddPlacement::where('name','Top Down')->where('status','1')->pluck('id');


        $data['add_top']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',  $places)->take(1)->get();
        $data['add_td']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',$place)->take(2)->get();
        $year=carbon::now()->year;
        $month=carbon::now()->month;
        $day=carbon::now()->day;
        $international=News::where('category_id','2')->orderby('id','desc')->get();
        $nepaliDate = DateConverter::fromEnglishDate($year,$month,$day)->toFormattedNepaliDate();

//        dd($dat);
        $cat=News::where('pradesh','2')->paginate(9);



        return view('frontend.pradesh2',compact('data','nepaliDate','international','cat'));
    }

    public function bagmati(){

        $data['brk']= News::where('slider_key','1')->latest()->take(9)->get();
        $data['row']= Setting::find(1);
        $data['adds']=Advertisement::where('status','1')->get();
        $places=AddPlacement::where('name','Top')->where('status','1')->pluck('id');
        $place=AddPlacement::where('name','Top Down')->where('status','1')->pluck('id');


        $data['add_top']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',  $places)->take(1)->get();
        $data['add_td']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',$place)->take(2)->get();
        $year=carbon::now()->year;
        $month=carbon::now()->month;
        $day=carbon::now()->day;
        $international=News::where('category_id','2')->orderby('id','desc')->get();
        $nepaliDate = DateConverter::fromEnglishDate($year,$month,$day)->toFormattedNepaliDate();

//        dd($dat);
        $cat=News::where('pradesh','3')->paginate(9);
        return view('frontend.bagmati',compact('data','nepaliDate','international','cat'));
    }


    public function gandaki(){

        $data['brk']= News::where('slider_key','1')->latest()->take(9)->get();
        $data['row']= Setting::find(1);
        $data['adds']=Advertisement::where('status','1')->get();
        $places=AddPlacement::where('name','Top')->where('status','1')->pluck('id');
        $place=AddPlacement::where('name','Top Down')->where('status','1')->pluck('id');


        $data['add_top']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',  $places)->take(1)->get();
        $data['add_td']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',$place)->take(2)->get();
        $year=carbon::now()->year;
        $month=carbon::now()->month;
        $day=carbon::now()->day;
        $international=News::where('category_id','2')->orderby('id','desc')->get();
        $nepaliDate = DateConverter::fromEnglishDate($year,$month,$day)->toFormattedNepaliDate();

//        dd($dat);
        $cat=News::where('pradesh','4')->paginate(9);
        return view('frontend.gandaki',compact('data','nepaliDate','international','cat'));
    }


    public function lumbini(){

        $data['brk']= News::where('slider_key','1')->latest()->take(9)->get();
        $data['row']= Setting::find(1);
        $data['adds']=Advertisement::where('status','1')->get();
        $places=AddPlacement::where('name','Top')->where('status','1')->pluck('id');
        $place=AddPlacement::where('name','Top Down')->where('status','1')->pluck('id');


        $data['add_top']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',  $places)->take(1)->get();
        $data['add_td']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',$place)->take(2)->get();
        $year=carbon::now()->year;
        $month=carbon::now()->month;
        $day=carbon::now()->day;
        $international=News::where('category_id','2')->orderby('id','desc')->get();
        $nepaliDate = DateConverter::fromEnglishDate($year,$month,$day)->toFormattedNepaliDate();

//        dd($dat);
        $cat=News::where('pradesh','5')->paginate(9);
        return view('frontend.lumbini',compact('data','nepaliDate','international','cat'));
    }


    public function karnali(){

        $data['brk']= News::where('slider_key','1')->latest()->take(9)->get();
        $data['row']= Setting::find(1);
        $data['adds']=Advertisement::where('status','1')->get();
        $places=AddPlacement::where('name','Top')->where('status','1')->pluck('id');
        $place=AddPlacement::where('name','Top Down')->where('status','1')->pluck('id');


        $data['add_top']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',  $places)->take(1)->get();
        $data['add_td']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',$place)->take(2)->get();
        $year=carbon::now()->year;
        $month=carbon::now()->month;
        $day=carbon::now()->day;
        $international=News::where('category_id','2')->orderby('id','desc')->get();
        $nepaliDate = DateConverter::fromEnglishDate($year,$month,$day)->toFormattedNepaliDate();

//        dd($dat);
        $cat=News::where('pradesh','6')->paginate(9);
        return view('frontend.karnali',compact('data','nepaliDate','international','cat'));
    }

    public function sudurpashchim(){

        $data['brk']= News::where('slider_key','1')->latest()->take(9)->get();
        $data['row']= Setting::find(1);
        $data['adds']=Advertisement::where('status','1')->get();
        $places=AddPlacement::where('name','Top')->where('status','1')->pluck('id');
        $place=AddPlacement::where('name','Top Down')->where('status','1')->pluck('id');


        $data['add_top']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',  $places)->take(1)->get();
        $data['add_td']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',$place)->take(2)->get();
        $year=carbon::now()->year;
        $month=carbon::now()->month;
        $day=carbon::now()->day;
        $international=News::where('category_id','2')->orderby('id','desc')->get();
        $nepaliDate = DateConverter::fromEnglishDate($year,$month,$day)->toFormattedNepaliDate();

//        dd($dat);
        $cat=News::where('pradesh','7')->paginate(9);
        return view('frontend.sudurpashchim',compact('data','nepaliDate','international','cat'));
    }

    public function share(){

        $data['brk']= News::where('slider_key','1')->latest()->take(9)->get();
        $data['row']= Setting::find(1);
        $data['adds']=Advertisement::where('status','1')->get();
        $places=AddPlacement::where('name','Top')->where('status','1')->pluck('id');
        $place=AddPlacement::where('name','Top Down')->where('status','1')->pluck('id');


        $data['add_top']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',  $places)->take(1)->get();
        $data['add_td']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',$place)->take(2)->get();
        $year=carbon::now()->year;
        $month=carbon::now()->month;
        $day=carbon::now()->day;
        $international=News::where('category_id','2')->orderby('id','desc')->get();
        $nepaliDate = DateConverter::fromEnglishDate($year,$month,$day)->toFormattedNepaliDate();

//        dd($dat);
        $chk=Category::where('name','सेयर बजार')->pluck('id');
        $cat=News::where('category_id',$chk)->orderby('id','desc')->paginate(9);
        return view('frontend.share',compact('data','nepaliDate','international','cat'));
    }


    public function corporate(){

        $data['brk']= News::where('slider_key','1')->latest()->take(9)->get();
        $data['row']= Setting::find(1);
        $data['adds']=Advertisement::where('status','1')->get();
        $places=AddPlacement::where('name','Top')->where('status','1')->pluck('id');
        $place=AddPlacement::where('name','Top Down')->where('status','1')->pluck('id');


        $data['add_top']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',  $places)->take(1)->get();
        $data['add_td']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',$place)->take(2)->get();
        $year=carbon::now()->year;
        $month=carbon::now()->month;
        $day=carbon::now()->day;
        $international=News::where('category_id','2')->orderby('id','desc')->get();
        $nepaliDate = DateConverter::fromEnglishDate($year,$month,$day)->toFormattedNepaliDate();

//        dd($dat);

        $cat=News::where('status','1')->orderby('view_count','desc')->paginate(9);
        return view('frontend.corporate',compact('data','nepaliDate','international','cat'));
    }

    public function samachar(){

        $data['brk']= News::where('slider_key','1')->latest()->take(9)->get();
        $data['row']= Setting::find(1);
        $data['adds']=Advertisement::where('status','1')->get();
        $places=AddPlacement::where('name','Top')->where('status','1')->pluck('id');
        $place=AddPlacement::where('name','Top Down')->where('status','1')->pluck('id');


        $data['add_top']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',  $places)->take(1)->get();
        $data['add_td']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',$place)->take(2)->get();
        $year=carbon::now()->year;
        $month=carbon::now()->month;
        $day=carbon::now()->day;
        $international=News::where('category_id','2')->orderby('id','desc')->get();
        $nepaliDate = DateConverter::fromEnglishDate($year,$month,$day)->toFormattedNepaliDate();

//        dd($dat);
        $dat=Category::Where('name','अन्य')->pluck('id');

        $cat=News::where('category_id',$dat)->orderBy('created_at','desc')->paginate(9);
        return view('frontend.samachar',compact('data','nepaliDate','international','cat'));
    }


    public function insurance(){

        $data['brk']= News::where('slider_key','1')->latest()->take(9)->get();
        $data['row']= Setting::find(1);
        $data['adds']=Advertisement::where('status','1')->get();
        $places=AddPlacement::where('name','Top')->where('status','1')->pluck('id');
        $place=AddPlacement::where('name','Top Down')->where('status','1')->pluck('id');


        $data['add_top']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',  $places)->take(1)->get();
        $data['add_td']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',$place)->take(2)->get();
        $year=carbon::now()->year;
        $month=carbon::now()->month;
        $day=carbon::now()->day;
        $international=News::where('category_id','2')->orderby('id','desc')->get();
        $nepaliDate = DateConverter::fromEnglishDate($year,$month,$day)->toFormattedNepaliDate();

//        dd($dat);
        $dat=Category::Where('name','इन्स्योरेन्स')->pluck('id');

        $cat=News::where('category_id',$dat)->orderBy('created_at','desc')->paginate(9);
        return view('frontend.insurance',compact('data','nepaliDate','international','cat'));
    }

    public function udyog(){

        $data['brk']= News::where('slider_key','1')->latest()->take(9)->get();
        $data['row']= Setting::find(1);
        $data['adds']=Advertisement::where('status','1')->get();
        $places=AddPlacement::where('name','Top')->where('status','1')->pluck('id');
        $place=AddPlacement::where('name','Top Down')->where('status','1')->pluck('id');


        $data['add_top']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',  $places)->take(1)->get();
        $data['add_td']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',$place)->take(2)->get();
        $year=carbon::now()->year;
        $month=carbon::now()->month;
        $day=carbon::now()->day;
        $international=News::where('category_id','2')->orderby('id','desc')->get();
        $nepaliDate = DateConverter::fromEnglishDate($year,$month,$day)->toFormattedNepaliDate();

//        dd($dat);
        $dat=Category::Where('name','उधोग')->pluck('id');

        $cat=News::where('category_id',$dat)->orderBy('created_at','desc')->paginate(9);
        return view('frontend.udyog',compact('data','nepaliDate','international','cat'));
    }
    public function education(){

        $data['brk']= News::where('slider_key','1')->latest()->take(9)->get();
        $data['row']= Setting::find(1);
        $data['adds']=Advertisement::where('status','1')->get();
        $places=AddPlacement::where('name','Top')->where('status','1')->pluck('id');
        $place=AddPlacement::where('name','Top Down')->where('status','1')->pluck('id');


        $data['add_top']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',  $places)->take(1)->get();
        $data['add_td']=Advertisement::where('status','1')->where('expire_date','>',now())->where('placement_id',$place)->take(2)->get();
        $year=carbon::now()->year;
        $month=carbon::now()->month;
        $day=carbon::now()->day;
        $international=News::where('category_id','2')->orderby('id','desc')->get();
        $nepaliDate = DateConverter::fromEnglishDate($year,$month,$day)->toFormattedNepaliDate();

         $dat=Category::Where('name','शिक्षा')->pluck('id');
        $cat=News::where('category_id',$dat)->orderBy('created_at','desc')->paginate(9);
        return view('frontend.education',compact('data','nepaliDate','international','cat'));
    }
}
