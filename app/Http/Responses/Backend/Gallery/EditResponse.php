<?php

namespace App\Http\Responses\Backend\Gallery;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var \App\Models\Gallery\Gallery
     */
    protected $gallery;

    /**
     * @param \App\Models\Gallery\Gallery $gallery
     */
    public function __construct($gallery)
    {
        $this->gallery = $gallery;
    }

    /**
     * toReponse.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function toResponse($request)
    {
        return view('backend.galleries.edit')
            ->withGallery($this->gallery);
    }
}
