<?php

namespace App\Models\Traits\Relationships;

use App\Models\Auth\User;
use App\Models\GalleryImage;

trait GalleryRelationships
{
    /**
     * Gallery has many relationship with gallery images.
     */
    public function images()
    {
        return $this->hasMany(GalleryImage::class);
    }
    
    /**
     * Gallery belongs to relationship with user.
     */
    public function owner()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Gallery belongs to relationship with user.
     */
    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
