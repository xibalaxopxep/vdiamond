<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model {

    //
    protected $table = "member";
    protected $fillable = [
        'username', 'email', 'password', 'status', 'full_name','mobile','address','facebook_id', 'google_id','activation'
    ];

    public function created_at() {
        return date("d/m/Y", strtotime($this->created_at));
    }

    public function updated_at() {
        return date("d/m/Y", strtotime($this->updated_at));
    }

}
