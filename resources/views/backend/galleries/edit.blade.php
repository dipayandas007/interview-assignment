@extends('backend.layouts.app')

@section('title', __('labels.backend.access.galleries.management') . ' | ' . __('labels.backend.access.galleries.edit'))

@section('breadcrumb-links')
    @include('backend.galleries.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::model($gallery, ['route' => ['admin.galleries.update', $gallery], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role', 'files' => true]) }}

    <div class="card">
        @include('backend.galleries.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.galleries.index', 'id' => $gallery->id ])
    </div><!--card-->
    {{ Form::close() }}
@endsection