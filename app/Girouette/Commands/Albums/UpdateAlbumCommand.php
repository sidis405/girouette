<?php

namespace Girouette\Commands\Albums;

use Girouette\Commands\Command;

class UpdateAlbumCommand extends Command
{

    public $album_id;
    public $name;
    public $featured_image_id;

    /**
     * Update a command instance.
     *
     * @return void
     */
    public function __construct($album_id, $name, $featured_image_id)
    {
        $this->album_id = $album_id;
        $this->name = $name;
        $this->featured_image_id = $featured_image_id;
    }
}
