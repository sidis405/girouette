<?php

namespace Girouette\Models;

use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;


class Albums extends Model implements HasMedia
{
    use PresentableTrait, HasMediaTrait;

    protected $fillable = ['name', 'slug', 'fetured_image_id'];

    protected $presenter = 'Girouette\Presenters\AlbumsPresenter';

    public static function make($name)
    {
        $slug = str_slug($name);

        $item = new static(compact('name', 'slug'));

        return $item;
    }

    public static function edit($item_id, $name, $slug, $featured_image_id)
    {

        $item = static::find($item_id);

        $item->name = $name;
        $item->slug = $slug;
        $item->featured_image_id = $featured_image_id;

        return $item;
    }

   

    public function featuredImage()
    {
        return $this->belongsTo('Girouette\Models\FeaturedImage', 'featured_image_id');
    }



}
