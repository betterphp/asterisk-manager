<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Call extends AppModel
{
    use HasFactory;

    public $timestamps = false;

    public $dates = [
        "start",
        "end",
        "answer",
    ];
}
