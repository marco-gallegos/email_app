<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailModel extends Model
{
    use HasFactory;
    protected  $table = "email";
    public $timestamps = true;

    protected $fillable = [
        "nombre",
        "telefono",
        "email",
        "asunto",
        "email_enviado",
    ];
}
