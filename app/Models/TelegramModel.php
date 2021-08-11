<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelegramModel extends Model
{
    use HasFactory;
    
    protected $table = 'telegrams';
    protected $guarded = ['id'];
}
