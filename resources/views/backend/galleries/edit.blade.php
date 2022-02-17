@extends('backend.layouts.app')

@section('title', __('labels.backend.access.galleries.management') . ' | ' . __('labels.backend.access.galleries.edit'))

@section('breadcrumb-links')
    @include('backend.galleries.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::model($page, ['route' => ['admin.galleries.update', $page], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role', 'files' => true]) }}

    <div class="card">
        @include('backend.galleries.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.galleries.index', 'id' => $page->id ])
    </div><!--card-->
    {{ Form::close() }}
@endsection