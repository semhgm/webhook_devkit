<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebHookLog extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'tunnel_id',
        'method',
        'headers',
        'body',
        'status',
        'response',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function tunnel(){
        return $this->belongsTo(Tunnel::class);
    }
}
