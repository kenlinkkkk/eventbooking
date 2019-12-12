<?php


namespace App\Repositories\Admin;


use App\Model\Center;
use App\Repositories\EloquentRepository;

class CenterEloquentRepository extends EloquentRepository
{

    /**
     * @inheritDoc
     */
    public function getModel()
    {
        return Center::class;
    }
}
