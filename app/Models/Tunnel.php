<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tunnel extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'key',
        'forward_url',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function webhooklogs(){
        return $this -> hasMany(WebHookLog::class);
    }
}
