<?php

namespace App\Models\Traits\Relationships;

use App\Models\Gallery;

trait GalleryImageRelationships
{
    /**
     * Gallery Image belongs to relationship with Gallery.
     */
    public function gallery()
    {
        return $this->belongsTo(Gallery::class, 'gallery_id');
    }
}
