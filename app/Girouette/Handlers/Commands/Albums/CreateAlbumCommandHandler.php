<?php

namespace Girouette\Handlers\Commands\Albums;

use Girouette\Commands\CreateAlbumCommand;
use Girouette\Models\Albums;
use Illuminate\Queue\InteractsWithQueue;
use Girouette\Repositories\AlbumsRepo;
use Girouette\Events\Albums\AlbumWasCreated;
use Events;


class CreateAlbumCommandHandler
{
    public $repo;

    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct(AlbumsRepo $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Handle the command.
     *
     * @param  CreateAlbumCommand  $command
     * @return void
     */
    public function handle(CreateAlbumCommand $command)
    {
        $album_object = Albums::make(
            $command->name,
        $command->slug,
        $command->featured_photo_id
            );

        $album = $this->repo->save($album_object);

        Event::fire(new AlbumWasCreated($album));

        return $album;

    }
}
