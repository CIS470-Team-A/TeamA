<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
        protected $table = 'Order';
        public $timestamps = false;
		protected $primaryKey ="Id";
        protected $fillable = [
            'Customer_id','Status','Product_Content','Date', 'Total', 'Payment_Amount', 'Payment_Type',
        ];

        public function lineItems()
        {
          return $this->hasMany('\App\LineItem','Order_Id','Id');
        }
		public function customer()
        {
          return $this->hasOne('\App\Customer','Id','Customer_Id');
        }
		public function employee()
        {
          return $this->hasOne('\App\Employee','Id','Employee_Id');
        }
}
