<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
     use HasFactory;

    protected $table = 'contato';
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'email', 'contato'];

}
