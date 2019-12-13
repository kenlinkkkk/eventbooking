<?php


namespace App\Repositories\Admin;


use App\Model\Blog;
use App\Repositories\EloquentRepository;

class BlogEloquentRepository extends EloquentRepository
{

    /**
     * @inheritDoc
     */
    public function getModel()
    {
        return Blog::class;
    }
}
