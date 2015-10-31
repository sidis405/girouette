<?php

namespace Girouette\Repositories;

use Girouette\Models\Albums;
use Girouette\Models\FeaturedImage;

class AlbumsRepo
{

    public function save(Albums $album)
    {
        $album->save();

        return $album;
    }

     public function remove($id)
    {
        $album = Albums::find($id);
        $album->delete();

        return true;
    }

    public function getAll()
    {
        return Albums::with('media', 'featuredImage')->get();
    } 

    public function getById($id)
    {
        return Albums::with('featuredImage')->where('id', $id)->first();
    } 

    public function getBySlug($slug)
    {
        return Albums::where('slug', $slug)->first();
    } 

    public function getMediaForId($id)
    {
        $album = $this->getById($id);
        
        return $album->getMedia();
    }

    public function removeImage($id)
    {
        $image = FeaturedImage::find($id);
        $image->delete();

        return true;
    }
}
