<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'settings';


    protected $fillable = ['name','address','pam_vat','reg_no','facebook','youtube','twitter','gmail','skype','phone','logo','fav_icon','created_by','updated_by'];

    public function UserId(){
        return$this->belongsTo(User::class,'created_by');
    }
    public function UpdatedId(){
        return$this->belongsTo(User::class,'updated_by');
    }
}
