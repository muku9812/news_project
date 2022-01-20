<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;
    protected $table = 'advertisement';


    protected $fillable = ['title','image','expire_date','link','status','placement_id','created_by','updated_by'];

    public function UserId(){
        return$this->belongsTo(User::class,'created_by');
    }
    public function UpdatedId(){
        return$this->belongsTo(User::class,'updated_by');
    }
    public function PlacementId(){
        return$this->belongsTo(AddPlacement::class,'placement_id');
    }
}
