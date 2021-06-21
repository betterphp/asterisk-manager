<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Call extends AppModel
{
    use HasFactory;

    /**
     * Specify that the model doesn't have created_at and updated_at fields
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * List of date fields on the model
     *
     * @var string[]
     */
    public $dates = [
        "start",
        "end",
        "answer",
    ];
}
