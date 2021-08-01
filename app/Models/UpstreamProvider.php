<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class UpstreamProvider extends AppModel
{
    use HasFactory;

    /**
     * List of fields to exclude from the models json form
     *
     * @var string[]
     */
    protected $hidden = [
        "password",
    ];

    /**
     * List of field type casts to make after retrieving the model
     *
     * @var array
     * @phan-var array<string, string>
     */
    protected $casts = [
        "should_register" => "boolean",
    ];
}
