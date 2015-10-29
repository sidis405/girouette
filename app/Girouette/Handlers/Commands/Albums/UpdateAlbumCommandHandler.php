<?php

namespace Girouette\Handlers\Commands;

use Girouette\Commands\CreateTestCommand;
use Girouette\Models\Albums;
use Illuminate\Queue\InteractsWithQueue;
use Girouette\Repositories\AlbumsRepo;
use Girouette\Events\Albums\AlbumWasUpdated;
use Events;


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
    public function handle(CreateAlbumCommand $command)
    {
        $album_object = Albums::edit(
            $command->id,
            $command->name,
        $command->slug,
        $command->featured_photo_id
            );

        $album = $this->repo->save($album_object);

        Event::fire(new AlbumWasUpdated($album));

        return $album;
    }
}
