<?php

namespace Girouette\Http\Controllers\Admin;

use Girouette\Repositories\AlbumsRepo;
use Girouetterc\Utils\Media;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

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
            'image_picker_select' => view("admin.gallery.featured.image-picker-select", compact("model", 'gallery'))->render(),
            'image_picker_select_cover' => view("admin.gallery.cover.image-picker-cover-select", compact("model", 'gallery'))->render(),
        ];

        return $data;

    }

  
    public function store(Request $request, Media $media, ActivitiesRepo $activities, StaffRepo $staff, PagesRepo $pages)
    {
        $model = $request->input('model');

        if(! $this->checkIfModelIsAllowed($model)) return 'Model not allowed';

        $item = $$model->getById($request->input('model_id'));

        return $media->attach($item, $request->file('file'));

    }
}
