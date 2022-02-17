@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.backend.access.galleries.management'))

@section('breadcrumb-links')
@include('backend.galleries.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.access.galleries.management') }} <small class="text-muted">{{ __('labels.backend.access.galleries.active') }}</small>
                </h4>
            </div>
            <!--col-->
        </div>
        <!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table id="galleries-table" class="table" data-ajax_url="{{ route("admin.galleries.get") }}">
                        <thead>
                            <tr>
                                <th>{{ trans('labels.backend.access.galleries.table.name') }}</th>
                                <th>{{ trans('labels.backend.access.galleries.table.status') }}</th>
                                <th data-orderable="false">{{ trans('labels.backend.access.galleries.table.createdby') }}</th>
                                <th>{{ trans('labels.backend.access.galleries.table.createdat') }}</th>
                                <th>{{ trans('labels.general.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--col-->
        </div>
        <!--row-->

    </div>
    <!--card-body-->
</div>
<!--card-->
@endsection

@section('pagescript')
<script>
    FTX.Utils.documentReady(function() {
        FTX.Galleries.list.init();
    });
</script>
@endsection