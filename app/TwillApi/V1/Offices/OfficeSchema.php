<?php

namespace App\TwillApi\V1\Offices;

use App\Models\Office;
use LaravelJsonApi\Eloquent\Fields\Str;
use LaravelJsonApi\Eloquent\Fields\DateTime;
use A17\Twill\API\JsonApi\V1\Models\ModelSchema;

class OfficeSchema extends ModelSchema
{
    /**
     * The model the schema corresponds to.
     *
     * @var string
     */
    public static string $model = Office::class;

    /**
     * Show published or draft status attribute
     *
     * @var boolean
     */
    protected bool $publishedAttribute = true;

    /**
     * Get the resource fields.
     *
     * @return array
     */
    public function fields(): array
    {
        $fields = parent::fields();

        return array_merge($fields, [
            DateTime::make('createdAt')->sortable()->readOnly(),
            DateTime::make('updatedAt')->sortable()->readOnly(),
            Str::make('title'),
            Str::make('description'),
            Str::make('street'),
            Str::make('city'),
            Str::make('zip_code'),
            Str::make('country'),
            Str::make('directions'),
            Str::make('email'),
            Str::make('phone'),
            Str::make('timezone'),
        ]);
    }

//    public function authorizable(): bool
//    {
//        return false; // TODO: Change the autogenerated stub
//    }

    /**
     * Get the resource filters.
     *
     * @return array
     */
    public function filters(): array
    {
        $filters = parent::filters();

        return array_merge($filters, [
            //
        ]);
    }
}
