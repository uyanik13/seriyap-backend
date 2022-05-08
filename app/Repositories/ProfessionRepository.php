<?php

namespace  App\Repositories;

use App\Models\User;
use App\Models\Service;
use Illuminate\Http\Request;


class ProfessionRepository {


   
    public function paginate($max = 10)
    {

        return Service::paginate($max);

    }


   

}