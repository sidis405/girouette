<?php

namespace Girouette\Presenters;

use Laracasts\Presenter\Presenter;

class AlbumsPresenter extends Presenter
{
    public function featuredImageUrl()
    {
        if ($this->featuredImage) {
            return "/image/" . $this->featuredImage->id ."/". $this->featuredImage->file_name . "?w=399&h=281&fit=crop";
        }

        return "/img/activity-holder.jpg";
    }
}
