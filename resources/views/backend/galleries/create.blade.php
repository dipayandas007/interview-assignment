@extends('backend.layouts.app')

@section('title', __('labels.backend.access.galleries.management') . ' | ' . __('labels.backend.access.galleries.create'))

@section('breadcrumb-links')
    @include('backend.galleries.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::open(['route' => 'admin.galleries.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.galleries.form')
        @include('backend.components.footer-buttons', ['cancelRoute' => 'admin.galleries.index'])
    </div><!--card-->
    {{ Form::close() }}
@endsection