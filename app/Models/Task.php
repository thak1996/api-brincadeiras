<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * @var array<string>
     */
    protected $fillable = ['title', 'description', 'completed'];
    /**
     * @var bool|null
     */
    public ?bool $completed = null;
}