<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddPlacement extends Model
{
    use HasFactory;
    protected $table = 'adds_place';


    protected $fillable = ['name','status'];

}
