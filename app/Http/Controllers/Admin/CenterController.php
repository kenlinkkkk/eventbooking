<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Center\CenterAddRequest;
use App\Http\Requests\Center\CenterUpdateRequest;
use App\Repositories\Admin\CenterEloquentRepository;
use App\Repositories\Admin\UserEloquentRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CenterController extends Controller
{
    public function __construct(CenterEloquentRepository $centerEloquentRepository, UserEloquentRepository $userEloquentRepository)
    {
        $this->centerEloquentRepository = $centerEloquentRepository;
        $this->userEloquentRepository = $userEloquentRepository;
    }

    public function index()
    {

    }

    public function add()
    {

    }

    public function edit($id_center)
    {

    }

    public function create(CenterAddRequest $request)
    {

    }

    public function update(CenterUpdateRequest $request, $id_center)
    {

    }

    public function delete(Request $request, $id_center)
    {

    }
}
