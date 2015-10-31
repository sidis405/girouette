<?php

namespace Girouette\Handlers\Commands\Albums;

use Girouette\Commands\Albums\UpdateAlbumCommand;
use Girouette\Models\Albums;
use Illuminate\Queue\InteractsWithQueue;
use Girouette\Repositories\AlbumsRepo;
use Girouette\Events\Albums\AlbumWasUpdated;
use Event;


class UpdateAlbumCommandHandler
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
     * @param  UpdateAlbumCommand  $command
     * @return void
     */
    public function handle(UpdateAlbumCommand $command)
    {
        $album_object = Albums::edit(
        $command->album_id,
        $command->name,
        str_slug($command->name),
        $command->featured_image_id
            );

        $album = $this->repo->save($album_object);

        Event::fire(new AlbumWasUpdated($album));

        return $album;
    }
}
