<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slide extends Model
{
    use HasFactory;
    protected $table='slides';
protected $fillable=[
    'heading',
    'description',
  'link',
  'link_name',
    'image',
    'status',
    ];
}
