<?php

namespace App\Repositories\Backend;

use App\Events\Backend\Galleries\GalleryCreated;
use App\Events\Backend\Galleries\GalleryDeleted;
use App\Events\Backend\Galleries\GalleryUpdated;
use App\Exceptions\GeneralException;
use App\Models\Gallery;
use App\Repositories\BaseRepository;
use Illuminate\Support\Str;

class GalleriesRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Gallery::class;

    /**
     * Sortable.
     *
     * @var array
     */
    private $sortable = [
        'id',
        'title',
        'description',
        'status',
        'created_at',
        'updated_at',
    ];

    /**
     * Retrieve List.
     *
     * @var array
     * @return Collection
     */
    public function retrieveList(array $options = [])
    {
        $perPage = isset($options['per_page']) ? (int) $options['per_page'] : 20;
        $orderBy = isset($options['order_by']) && in_array($options['order_by'], $this->sortable) ? $options['order_by'] : 'created_at';
        $order = isset($options['order']) && in_array($options['order'], ['asc', 'desc']) ? $options['order'] : 'desc';
        $query = $this->query()
            ->with([
                'owner',
                'updater',
            ])
            ->orderBy($orderBy, $order);

        if ($perPage == -1) {
            return $query->get();
        }

        return $query->paginate($perPage);
    }

    /**
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->query()
            ->leftjoin('users', 'users.id', '=', 'galleries.created_by')
            ->select([
                'galleries.id',
                'galleries.title',
                'galleries.status',
                'users.first_name as created_by',
                'galleries.created_at',
            ]);
    }

    /**
     * @param array $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function create(array $input)
    {
        if ($this->query()->where('title', $input['title'])->first()) {
            throw new GeneralException(__('exceptions.backend.galleries.already_exists'));
        }

        $input['created_by'] = auth()->user()->id;
        $input['status'] = $input['status'] ?? 0;

        if ($gallery = Gallery::create($input)) {
            event(new GalleryCreated($gallery));

            return $gallery->fresh();
        }

        throw new GeneralException(__('exceptions.backend.galleries.create_error'));
    }

    /**
     * Update Gallery.
     *
     * @param \App\Models\Gallery $gallery
     * @param array $input
     */
    public function update(Gallery $gallery, array $input)
    {
        if ($this->query()->where('title', $input['title'])->where('id', '!=', $gallery->id)->first()) {
            throw new GeneralException(__('exceptions.backend.galleries.already_exists'));
        }

        $input['updated_by'] = auth()->user()->id;
        $input['status'] = $input['status'] ?? 0;

        if ($gallery->update($input)) {
            event(new GalleryUpdated($gallery));

            return $gallery;
        }

        throw new GeneralException(
            __('exceptions.backend.galleries.update_error')
        );
    }

    /**
     * @param \App\Models\Gallery $gallery
     *
     * @throws GeneralException
     *
     * @return bool
     */
    public function delete(Gallery $gallery)
    {
        if ($gallery->delete()) {
            event(new GalleryDeleted($gallery));

            return true;
        }

        throw new GeneralException(__('exceptions.backend.galleries.delete_error'));
    }
}
