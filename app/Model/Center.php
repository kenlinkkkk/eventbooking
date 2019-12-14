<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    protected $table = 'centers';

    protected $fillable = [
        'name',
        'short_tag',
        'address',
        'phone',
        'thumbnail',
        'pictures',
        'description'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'id_center');
    }
}
