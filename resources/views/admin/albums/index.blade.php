@extends('admin.layouts.master')

@section('header_extras')
<link rel="stylesheet" href="/css/photoswipe.css"> 
<link rel="stylesheet" href="/css/default-skin/default-skin.css"> 
@stop

@section('content')

 @include('layouts.errors')
        @include('flash::message')

<section class="main">
      <div class="container">     
        <h1>Lista progetti</h1>
        <h2>In questa sezione puoi vedere la lista dei progetti presenti sul sito.</h2>
        <div class="actions"><a href="/admin/progetti/crea">
            <div class="btn btn-green btn-circle"><i class="fa fa-plus"></i></div></a><span>Aggiungi progetto     </span></div>
        <div class="card tables-card">
          <div class="card-header">
            <h2>Clicca un progetto per modificarlo      </h2>
          </div>
          <div class="card-body">
            <table class="table table-responsive table-hover">
              <thead>
                <tr>
                  <th>Immagine di copertina</th>
                  <th>Titolo                </th>
                  <th>Immagini                </th>
                </tr>
              </thead>
              <tbody>
              @foreach($albums as $album)
                <tr>
                  <td>
                    <a href="/admin/progetti/{{$album->id}}/modifica"><div class="thumbnail-preview-list" @if($album->featured_image_id > 0) style="background: url('/image/{{$album->featuredImage->id}}/{{$album->featuredImage->file_name}}?w=120&h=120&fit=crop') no-repeat center center;" @endif ></div></a>
                  </td>
                  <td><a href="/admin/progetti/{{$album->id}}/modifica">{{$album->name}}</a></td>
                  <td><div class="btn btn-green btn-circle ps_trigger" id="ps_trigger_{{$album->id}}" data-id="{{$album->id}}">{{count($album->getMedia())}}</div></td>
                </tr>
                @include('admin.albums.photoswipe')
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

  @stop
@section('footer_extras')

<script src="/js/photoswipe.min.js"></script> 

<!-- UI JS file -->
<script src="/js/photoswipe-ui-default.js"></script> 

<script>
@foreach($albums as $album)

    var openPhotoSwipe_{{$album->id}} = function() {
        // var pswpElement = document.querySelectorAll('#');
        var pswpElement = document.querySelectorAll('.ps_{{$album->id}}')[0];


        // build items array
        var items = [

            @foreach($album->getMedia() as $media)

            {
                src: '{{$media->getUrl()}}',
                w: 0,
                h: 0
            },

            @endforeach
        ];
        

        // define options (if needed)
        var options = {
                 // history & focus options are disabled on CodePen        
            history: false,
            focus: false,

            showAnimationDuration: 0,
            hideAnimationDuration: 0
            
        };
        
        var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.listen('gettingData', function(index, item) {
                if (item.w < 1 || item.h < 1) { // unknown size
                var img = new Image(); 
                img.onload = function() { // will get size after load
                item.w = this.width; // set image width
                item.h = this.height; // set image height
                   gallery.invalidateCurrItems(); // reinit Items
                   gallery.updateSize(true); // reinit Items
                }
            img.src = item.src; // let's download image
            }
        });
        gallery.init();
    };

    // openPhotoSwipe();


    document.getElementById('ps_trigger_{{$album->id}}').onclick = openPhotoSwipe_{{$album->id}};

@endforeach
</script>

@stop


