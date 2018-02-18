<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $primaryKey='Id';
    protected $table = 'Customer';
    public $timestamps = false;
    protected $attributes = ['Address'=>'','Phone_Num'=>0,'City'=>'','State'=>''];
	  protected $fillable = [
        'First_Name','Last_Name', 'Address', 'Phone_Num','User_Id','City','State'
    ];

    public function orders()
    {
      return $this->hasMany('\App\Order','Customer_Id','Id');
    }
}
