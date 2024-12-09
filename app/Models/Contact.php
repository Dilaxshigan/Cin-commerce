<?php

namespace App\Models;
use Haruncpi\LaravelIdGenerator\IdGenerator;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->Customer_id = IdGenerator::generate([
                'table' => 'contacts',
                'field' => 'Customer_id',
                'length' => 7,
                'prefix' => 'CUS'
            ]);
        });
    }
}
