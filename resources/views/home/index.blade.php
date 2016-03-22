@extends('layouts.master')

@section('header_extras')
<link rel="stylesheet" href="/css/photoswipe.css"> 
<link rel="stylesheet" href="/css/default-skin/default-skin.css"> 
@stop

@section('content')

<section id="gallery" class="gallery">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-12">
              <h3 class="beige">Gallery</h3>
            </div>
          </div>
          <div class="row">
          @foreach($albums as $album)
            @if($album->featuredImage)
              <div class="col-md-4 col-sm-6 no-pad">
                <div class="project"><img src="{{$album->present()->featuredImageUrl()}}" class="project-img" id="ps_trigger_{{$album->id}}" >
                  <div class="project-desc">
                    <p>{{$album->name}}</p>
                  </div>
                </div>
              </div>
            @endif
            @include('admin.albums.photoswipe')
          @endforeach
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
        var pswpElement_{{$album->id}} = document.querySelectorAll('.ps_{{$album->id}}')[0];


        // build items array
        var items_{{$album->id}} = [

            @foreach($album->getMedia() as $media)

            {
                src: '{{$media->getUrl()}}',
                w: 0,
                h: 0
            },

            @endforeach
        ];
        

        // define options (if needed)
        var options_{{$album->id}} = {
                 // history & focus options are disabled on CodePen        
            history: false,
            focus: false,

            showAnimationDuration: 0,
            hideAnimationDuration: 0
            
        };
        
        var gallery = new PhotoSwipe( pswpElement_{{$album->id}}, PhotoSwipeUI_Default, items_{{$album->id}}, options_{{$album->id}});
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