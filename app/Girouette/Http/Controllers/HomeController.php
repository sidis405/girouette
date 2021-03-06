<?php

namespace Girouette\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Girouette\Repositories\AlbumsRepo;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AlbumsRepo $album_repo)
    {
        $albums = $album_repo->getAll();

        return view('home.index', compact('albums'));

    }

    public function privacy()
    {
        return view('home.privacy');
    }

    // public function pull()
    // {
    //     $out = '';
    //     $result = array();
    //     $result = shell_exec("/usr/bin/git -c /home/www/sidrit.com/girouette pull 2>&1");
    //     return $result;
    // }

}
