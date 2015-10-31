<?php

namespace Girouette\Models;

use Illuminate\Database\Eloquent\Model;

class FeaturedImage extends Model
{
    protected $table = 'media';

    public function activities()
    {
        return $this->hasMany('Girouette\Models\Albums', 'featured_image_id');
    }
}
