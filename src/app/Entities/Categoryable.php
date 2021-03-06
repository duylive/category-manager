<?php

namespace VCComponent\Laravel\Category\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Categoryable extends Model implements Transformable
{
    use TransformableTrait;
    const STATUS_PENDING = 2;
    const STATUS_ACTIVE  = 1;
    protected $table     = 'categoryables';
    protected $fillable  = [
        'category_id',
        'categoryable_id',
        'categoryable_type',
    ];
}
