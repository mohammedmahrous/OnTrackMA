<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
  protected $fillable = [
      'name', 'description', 'asign_to','colleprator','start_at','end_at','status','starttime','endtime'
  ];
  public function userasign(){
 return $this->belongsTo('App\User','asign_to','id');
}

public function usercolleprator(){
return $this->belongsTo('App\User','colleprator','id');
}
public function statuss(){
return $this->belongsTo('App\statu','status','id');
}




}
