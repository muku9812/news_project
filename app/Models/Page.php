<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $table = 'pages';


    protected $fillable = ['title','slug','short_description','description','page_image','status','created_by','updated_by'];

    public function UserId(){
        return$this->belongsTo(User::class,'created_by');
    }
    public function UpdatedId(){
        return$this->belongsTo(User::class,'updated_by');
    }
}
