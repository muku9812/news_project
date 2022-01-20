<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';


    protected $fillable = ['name','slug','rank','status','created_by','updated_by'];

    public function UserId(){
        return$this->belongsTo(User::class,'created_by');
    }
    public function UpdatedId(){
        return$this->belongsTo(User::class,'updated_by');
    }
}
