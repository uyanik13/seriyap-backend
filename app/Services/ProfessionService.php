<?php

namespace  App\Services;

use App\Models\User;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Repositories\ProfessionRepository;


class ProfessionService {


    private $repository;

    public function __construct(ProfessionRepository $professionRepository)
    {
        $this->repository = $professionRepository;
    }


    /**
     * Instantiate a new controller instance.
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function all()
    {

        return $this->repository->paginate();

    }


    /**
     * Instantiate a new controller instance.
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function create(Request $request)
    {



    }



    /**
     * Instantiate a new controller instance.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User $user
     * @param  int  $id
     * @return void
     */
    public function update(Request $request,$id,User $user)
    {

    }


    /**
     * Instantiate a new controller instance.
     * @param  int  $id
     * @return void
     */
    public function delete($id,User $user)
    {

    }



}