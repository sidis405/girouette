@extends('layouts.master')

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
            <div class="col-md-4 col-sm-6 no-pad">
              <div class="project"><img src="{{$album->present()->featuredImageUrl()}}" class="project-img">
                <div class="project-desc">
                  <p>{{$album->title}}</p>
                </div>
              </div>
            </div>
          @endforeach
          </div>
        </div>
      </section>

@stop