<?php

Breadcrumbs::for('admin.galleries.index', function ($trail) {
    $trail->push(__('labels.backend.access.galleries.management'), route('admin.galleries.index'));
});

Breadcrumbs::for('admin.galleries.create', function ($trail) {
    $trail->parent('admin.galleries.index');
    $trail->push(__('labels.backend.access.galleries.management'), route('admin.galleries.create'));
});

Breadcrumbs::for('admin.galleries.edit', function ($trail, $id) {
    $trail->parent('admin.galleries.index');
    $trail->push(__('labels.backend.access.galleries.management'), route('admin.galleries.edit', $id));
});
