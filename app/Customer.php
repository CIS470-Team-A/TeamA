<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'Customer';
	    protected $fillable = [
        'fname','lname', 'email', 'password',
    ];

    public function orders()
    {
      return $this->hasMany('\App\Order','Customer_Id','Id');
    }
}
