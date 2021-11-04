<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model {

    protected $table = 'attribute';

    const TYPE_SELECT = 'select';
    const TYPE_TEXT = 'text';
    const MODULE_PRODUCT = 'product';
    const MODULE_COLOR = 'color';

    protected $fillable = [
        'title', 'parent_id', 'type', 'module','color'
    ];
    public $timestamps = false;

    public function products() {
        return $this->belongsToMany('\App\Product', 'product_attribute', 'attribute_id', 'product_id');
    }

}
