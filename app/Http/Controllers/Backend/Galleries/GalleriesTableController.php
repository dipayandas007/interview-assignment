<?php

namespace App\Http\Controllers\Backend\Galleries;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Galleries\ManageGalleryRequest;
use App\Repositories\Backend\GalleriesRepository;
use Yajra\DataTables\Facades\DataTables;

class GalleriesTableController extends Controller
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
    }

    /**
     * @param \App\Http\Requests\Backend\Galleries\ManageGalleryRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageGalleryRequest $request)
    {
        return Datatables::of($this->repository->getForDataTable())
            ->filterColumn('status', function ($query, $keyword) {
                if (in_array(strtolower($keyword), ['active', 'inactive'])) {
                    $query->where('galleries.status', (strtolower($keyword) == 'active') ? 1 : 0);
                }
            })
            ->filterColumn('created_by', function ($query, $keyword) {
                $query->whereRaw('users.first_name like ?', ["%{$keyword}%"]);
            })
            ->editColumn('status', function ($page) {
                return $page->status_label;
            })
            ->editColumn('created_at', function ($page) {
                return $page->created_at->toDateString();
            })
            ->addColumn('actions', function ($page) {
                return $page->action_buttons;
            })
            ->escapeColumns(['title'])
            ->make(true);
    }
}
