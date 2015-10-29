<?php

namespace Girouette\Repositories;

use Girouette\Models\Albums;

class AlbumsRepo
{

    public function save(Albums $album)
    {
        $album->save();

        return $album;
    }

    public function getAll()
    {
        return Albums::with('media')->get();
    } 

    public function getById($id)
    {
        return Albums::where('id', $id);
    } 

    public function getBySlug($slug)
    {
        return Albums::where('slug', $slug);
    } 
}
