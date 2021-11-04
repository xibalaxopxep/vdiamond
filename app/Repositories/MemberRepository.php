<?php

namespace App\Repositories;

use Repositories\Support\AbstractRepository;

class MemberRepository extends AbstractRepository {

    public function __construct(\Illuminate\Container\Container $app) {
        parent::__construct($app);
    }

    public function model() {
        return 'App\Member';
    }

    public function validate() {
        return $rules = [
            'username' => 'required',
            'password' => 'required|min:6|max:32'
        ];
    }


}
