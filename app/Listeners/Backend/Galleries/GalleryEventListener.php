<?php

namespace App\Listeners\Backend\Galleries;

/**
 * Class GalleryEventListener.
 */
class GalleryEventListener
{
    /**
     * @var string
     */
    private $history_slug = 'Gallery';

    /**
     * @param $event
     */
    public function onCreated($event)
    {
        history()->withType($this->history_slug)
            ->withEntity($event->gallery->id)
            ->withText('trans("history.backend.galleries.created") <strong>'.$event->gallery->title.'</strong>')
            ->withIcon('plus')
            ->withClass('bg-green')
            ->log();
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        history()->withType($this->history_slug)
            ->withEntity($event->gallery->id)
            ->withText('trans("history.backend.galleries.updated") <strong>'.$event->gallery->title.'</strong>')
            ->withIcon('save')
            ->withClass('bg-aqua')
            ->log();
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        history()->withType($this->history_slug)
            ->withEntity($event->gallery->id)
            ->withText('trans("history.backend.galleries.deleted") <strong>'.$event->gallery->title.'</strong>')
            ->withIcon('trash')
            ->withClass('bg-maroon')
            ->log();
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\Galleries\GalleryCreated::class,
            'App\Listeners\Backend\Galleries\GalleryEventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\Galleries\GalleryUpdated::class,
            'App\Listeners\Backend\Galleries\GalleryEventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\Galleries\GalleryDeleted::class,
            'App\Listeners\Backend\Galleries\GalleryEventListener@onDeleted'
        );
    }
}
