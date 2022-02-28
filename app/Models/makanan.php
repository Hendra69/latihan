<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nanigans\SingleTableInheritance\SingleTableInheritanceTrait;

class makanan extends Model
{
    use HasFactory, SingleTableInheritanceTrait;

    protected $table = "makanans";
  
    protected static $singleTableTypeField = 'type';
  
    protected static $singleTableSubclasses = [Dingin::class, Panas::class];

    protected $fillable = [
        'nama',
        'type',
    ];
}
