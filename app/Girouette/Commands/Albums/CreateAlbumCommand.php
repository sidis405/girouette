<?php

namespace Girouette\Commands;

use Girouette\Commands\Command;

class CreateAlbumCommand extends Command
{

    public $name;
      public $slug;
      public $featured_photo_id;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($name, $slug, $featured_photo_id)
    {
        $this->name = $name;
        $this->slug = $slug;
        $this->featured_photo_id = $featured_photo_id;
    }
}
