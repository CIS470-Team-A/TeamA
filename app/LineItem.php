<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineItem extends Model
{
        protected $table = 'LineItems';
        public $timestamps = false;
        protected $fillable = [
          'Order_Id','Quantity','Product_Id','Price','Product_Content'
        ];
		public function product()
        {
          return $this->hasOne('\App\Product','Id','Product_Id');
        }
      
}
