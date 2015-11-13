<?php

namespace Girouette\Http\Controllers\Admin;

use Girouette\Repositories\AlbumsRepo;
use Girouette\Utils\Media;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImagesController extends Controller
{
    public $models;


    function __construct() {
        
        $this->models = ['albums' => 'album'];
    }

    public function checkIfModelIsAllowed($input_model)
    {
        if(in_array($input_model, array_keys($this->models))) return true;

        return false;
    }
 

    public function index(Request $request, AlbumsRepo $albums)
    {
        $model_name = $request->input('model');
        $model_route = $request->input('route');

        if(! $this->checkIfModelIsAllowed($model_name)) return 'Model not allowed';

        $model= $$model_name->getById($request->input('model_id'));
        $gallery = $$model_name->getMediaForId($request->input('model_id'));

        $data = [
            'gallery_partial' => view("admin.gallery.gallery-partial", compact('gallery', 'model_route'))->render(),
            'image_picker_select' => view("admin.gallery.featured.image-picker-select", compact("model", 'gallery'))->render()
        ];

        return $data;

    }

  
    public function store(Request $request, Media $media, AlbumsRepo $albums)
    {
        $model = $request->input('model');

        if(! $this->checkIfModelIsAllowed($model)) return 'Model not allowed';

        $item = $$model->getById($request->input('model_id'));

        return $media->attach($item, $request->file('file'));

    }

    public function watermark($url)
    {
        $url = substr(base64_decode($url), 1);
        // $img = Image::make(file_get_contents($url));

        $img = Image::make($url)->insert('img/watermark.png', 'bottom-right', 10, 10);

        return $img->response('jpg');

               // // create response and add encoded image data
               // $response = Response::make($img->encode('jpg'));

               // // set content-type
               // $response->header('Content-Type', 'image/jpg');

               // output
               // return $img->response;
    }
}
