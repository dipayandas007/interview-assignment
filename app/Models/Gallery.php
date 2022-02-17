<?php

namespace App\Models;

use App\Models\Traits\Attributes\GalleryAttributes;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Relationships\GalleryRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends BaseModel
{
    use SoftDeletes, ModelAttributes, GalleryRelationships, GalleryAttributes;

    /**
     * The guarded field which are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Fillable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'page_slug',
        'description',
        'cannonical_link',
        'seo_title',
        'seo_keyword',
        'seo_description',
        'status',
        'created_by',
        'updated_by',
    ];

    /**
     * Casts.
     *
     * @var array
     */
    protected $casts = [
        'status' => 'boolean',
    ];
}
