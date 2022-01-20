<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';


    protected $fillable = ['title','slug','feature_image','short_description','description','category_id','feature_key','breaking_key','slider_key','status','pradesh','created_by','updated_by'];


    public function UserId(){
        return$this->belongsTo(User::class,'created_by');
    }
    public function UpdatedId(){
        return$this->belongsTo(User::class,'updated_by');
    }
    public function CategoryId(){
        return$this->belongsTo(Category::class,'category_id');
    }
}
