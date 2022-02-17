<?php

namespace App\Models;

use App\Models\Traits\Attributes\GalleryImageAttributes;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Relationships\GalleryImageRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;

class GalleryImage extends BaseModel
{
    use SoftDeletes, ModelAttributes, GalleryImageRelationships, GalleryImageAttributes;

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
        'image_name',
        'gallery_id',
    ];

}
