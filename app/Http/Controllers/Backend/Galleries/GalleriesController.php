<?php

namespace App\Http\Controllers\Backend\Galleries;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Galleries\CreateGalleryRequest;
use App\Http\Requests\Backend\Galleries\DeleteGalleryRequest;
use App\Http\Requests\Backend\Galleries\EditGalleryRequest;
use App\Http\Requests\Backend\Galleries\ManageGalleryRequest;
use App\Http\Requests\Backend\Galleries\StoreGalleryRequest;
use App\Http\Requests\Backend\Galleries\UpdateGalleryRequest;
use App\Http\Responses\Backend\Gallery\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Gallery;
use App\Repositories\Backend\GalleriesRepository;
use Illuminate\Support\Facades\View;

class GalleriesController extends Controller
{
    /**
     * @var \App\Repositories\Backend\GalleriesRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\GalleriesRepository $repository
     */
    public function __construct(GalleriesRepository $repository)
    {
        $this->repository = $repository;
        View::share('js', ['galleries']);
    }

    /**
     * @param \App\Http\Requests\Backend\Galleries\ManageGalleryRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function index(ManageGalleryRequest $request)
    {
        return new ViewResponse('backend.galleries.index');
    }

    /**
     * @param \App\Http\Requests\Backend\Galleries\CreateGalleryRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function create(CreateGalleryRequest $request)
    {
        return new ViewResponse('backend.galleries.create');
    }

    /**
     * @param \App\Http\Requests\Backend\Galleries\StoreGalleryRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreGalleryRequest $request)
    {
        $this->repository->create($request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.galleries.index'), ['flash_success' => __('alerts.backend.galleries.created')]);
    }

    /**
     * @param \App\Models\Gallery $gallery
     * @param \App\Http\Requests\Backend\Galleries\EditGalleryRequest $request
     *
     * @return \App\Http\Responses\Backend\Blog\EditResponse
     */
    public function edit(Gallery $gallery, EditGalleryRequest $request)
    {
        return new EditResponse($gallery);
    }

    /**
     * @param \App\Models\Gallery $gallery
     * @param \App\Http\Requests\Backend\Galleries\UpdateGalleryRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Gallery $gallery, UpdateGalleryRequest $request)
    {
        $this->repository->update($gallery, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.galleries.index'), ['flash_success' => __('alerts.backend.galleries.updated')]);
    }

    /**
     * @param \App\Models\Gallery $gallery
     * @param \App\Http\Requests\Backend\Galleries\DeleteGalleryRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function destroy(Gallery $gallery, DeleteGalleryRequest $request)
    {
        $this->repository->delete($gallery);

        return new RedirectResponse(route('admin.galleries.index'), ['flash_success' => __('alerts.backend.galleries.deleted')]);
    }
}
