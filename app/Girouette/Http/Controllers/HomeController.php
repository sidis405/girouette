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

    public function pull()
    {
        $out = '';
        $result = array();
        $result = shell_exec("/usr/bin/git -c /home/www/sidrit.com/girouette pull shell_exec 2>&1");
        foreach ($result as $line) {
        $out .= $line . "<br>";
        }
        return $out;
    }

}
