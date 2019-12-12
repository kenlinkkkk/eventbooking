<?php


namespace App\Repositories\Admin;


use App\Model\User;
use App\Repositories\EloquentRepository;

class UserEloquentRepository extends EloquentRepository
{

    /**
     * @inheritDoc
     */
    public function getModel()
    {
        return User::class;
    }
}
