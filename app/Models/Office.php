<?php

namespace App\Models;

use A17\Twill\API\Models\Traits\HasMediables;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class Office extends Model implements Sortable
{
    use HasTranslation, HasMedias, HasRevisions, HasPosition, HasMediables;

    protected $fillable = [
        'published',
        'position',
        'email',
        'phone',
        'street',
        'zip_code',
        'directions',
        'timezone'
    ];

    public $translatedAttributes = [
        'title',
        'description',
        'active',
        'city',
        'country'
    ];

    public $mediasParams = [
        'cover' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 20 / 27,
                ],
            ]
        ],
    ];
}
