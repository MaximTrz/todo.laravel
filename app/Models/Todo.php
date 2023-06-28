<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $attributes = [
        'completed' => '0',
    ];


    public function user()
    {
        return $this->hasOne(User::class);
    }

}
