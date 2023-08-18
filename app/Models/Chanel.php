<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chanel extends Model
{
    use HasFactory;
    protected $fillable = ['ChanelID', 'ChanelName', 'Description','SubriberCount','URL'];
}
