<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function course(){
        return $this->belongsTo('App\Models\Course');
    }



    public function history() {
        return $this->belongsTo('App\Models\History','id','material_id')->where('user_id',auth()->user()->id);
    }
 


}
