<?php

namespace Girouette\Commands\Albums;

use Girouette\Commands\Command;

class CreateAlbumCommand extends Command
{

    public $name;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
}
