<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TgProxy extends Model
{
    use HasFactory;

    protected $table = 'telegram_proxies';

    protected $fillable = [
        'status',
        'body',
        'error',
        'lead_id',
        'contact_id'
    ];
}
