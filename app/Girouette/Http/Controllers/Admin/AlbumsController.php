<?php

namespace Girouette\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Girouette\Repositories\AlbumsRepo;
use Girouette\Models\Albums;


class AlbumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AlbumsRepo $album_repo)
    {
        $albums = $album_repo->getAll();

        // return $albums;

        return view('admin.albums.index', compact('albums'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.albums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $album = $this->dispatchFrom('Girouette\Commands\Albums\CreateAlbumCommand', $request);

        if ( $album ) flash()->success('Progetto creato con successo.');
        
        return redirect()->to('/admin/progetti/' . $album->id .'/modifica');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, AlbumsRepo $album_repo)
    {
        $album = $album_repo->getById($id);

        return view('admin.albums.show', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, AlbumsRepo $album_repo)
    {
        $album = $album_repo->getById($id);

        return view('admin.albums.edit', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    // return $request->input();
        $album = $this->dispatchFrom('Girouette\Commands\Albums\UpdateAlbumCommand', $request);

        if ( $album ) flash()->success('Progetto modificato con successo.');

        return redirect()->to('/admin/progetti/' . $album->id .'/modifica');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id, AlbumsRepo $album_repo)
    {
        $delete = $album_repo->remove($id);

        flash()->success('Progetto cancellato con successo.');

        return redirect()->to('/admin/progetti/');
    }

    /**
     * Remove the specified activity from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroyImage(Request $request, AlbumsRepo $album_repo)
    {
        $image_id = $request->input('image_id');

        $delete = $album_repo->removeImage($image_id);

        return json_encode('true');
    }
}
