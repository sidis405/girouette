<?php

namespace Girouette\Models;

use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;


class Albums extends Model implements HasMedia
{
    use PresentableTrait, HasMediaTrait;

    protected $presenter = 'Girouette\Presenters\AlbumsPresenter';

    public static function make($name, $slug, $featured_photo_id)
    {
        $item = new static(compact('name', 'slug', 'featured_photo_id'));

        return $item;
    }

    public static function edit($item_id, $name, $slug, $featured_photo_id)
    {
        $item = static::find($item_id);

        $item->name = $name;
        $item->slug = $slug;
        $item->featured_photo_id = $featured_photo_id;

        return $item;
    }

    public function photos(){

        return $this->hasMany('Girouette\Models\Photos', 'album_id');

    }



}
