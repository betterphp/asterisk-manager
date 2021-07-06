<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Endpoint extends AppModel
{
    use HasFactory;

    /**
     * List of fields to exclude from the models json form
     *
     * @var string[]
     */
    protected $hidden = [
        "username",
        "password",
    ];
}
