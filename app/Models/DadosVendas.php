<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class DadosVendas extends Authenticatable
{
    use HasFactory;


    protected $fillable = [
        'name',
        'produto',
        'parcelas',
    ];
}
