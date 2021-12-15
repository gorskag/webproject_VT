<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commands extends Model
{
    use HasFactory;

    protected $table = 'bot-commands';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = ['name', 'shortcut', 'parameters', 'description'];
    public $timestamps = false;
}
