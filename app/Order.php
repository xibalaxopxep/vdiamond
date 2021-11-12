<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    protected $table = 'order';
    protected $fillable = ['ref', 'status', 'name', 'discount', 'payment_method', 'mobile', 'note', 'transport_method', 'total', 'address','coupon','thanh_pho', 'quan_huyen','phuong_xa'];

    public function created_at() {
        return date("d/m/Y", strtotime($this->created_at));
    }

    public function products() {
        return $this->belongsToMany('App\Product', 'order_detail', 'order_id', 'product_id')->withPivot('order_id', 'product_id', 'quantity', 'sub_total');
    }

    public function detail() {
        return $this->hasMany('App\OrderDetail');
    }

    public function member() {
        return $this->belongsTo('App\Member');
    }
    public function total_format(){
        return number_format($this->total);
    }
}
