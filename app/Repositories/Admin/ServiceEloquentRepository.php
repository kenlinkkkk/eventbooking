<?php


namespace App\Repositories\Admin;


use App\Model\Service;
use App\Repositories\EloquentRepository;

class ServiceEloquentRepository extends EloquentRepository
{

    /**
     * @inheritDoc
     */
    public function getModel()
    {
        return Service::class;
    }
}
