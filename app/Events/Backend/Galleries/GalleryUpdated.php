<?php

namespace App\Events\Backend\Galleries;

use Illuminate\Queue\SerializesModels;

/**
 * Class GalleryUpdated.
 */
class GalleryUpdated
{
    use SerializesModels;

    /**
     * @var
     */
    public $gallery;

    /**
     * @param $gallery
     */
    public function __construct($gallery)
    {
        $this->gallery = $gallery;
    }
}
