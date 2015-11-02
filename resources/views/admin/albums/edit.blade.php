@extends('admin.layouts.master')

@section('header_extras')

<meta name="_token" content="{{ csrf_token() }}" />

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.css">
<link rel="stylesheet" type="text/css" href="/adm/styles/image-picker.css">
<link rel="stylesheet" type="text/css" href="/adm/styles/magnific-popup.css">

@stop

@section('content')

@include('admin.layouts.toolbar')

  <section class="main">
      <div class="container">           
        <h1>Modifica Progetto '{{ $album->name }}'</h1>
        <h2> In questa sezione puoi modificare un progetto.</h2>

        @include('layouts.errors')
        @include('flash::message')
        <form action="/admin/progetti/{{ $album->id }}" method="POST" id="album_editing_form">
        <input type="hidden" name="album_id" value="{{ $album->id }}">
        <input type="hidden" id="featured_image_persisted" value="{{ $album->featured_image_id }}">
        <input type="hidden" name="featured_image_id" id="featured_image_id" value="{{ $album->featured_image_id }}">
        {{csrf_field()}}
            <div class="card card-add-project">
              <div class="card-header">
                <h2>Dettagli progetto</h2>
                <h3>Qui puoi scegliere il titolo e l'immagine di copertina di un progetto</h3>
              </div>
              <div class="card-body">
                  <div class="row">
                    <div class="col-md-8">
                      <h3>Titolo progetto</h3>
                      <div class="input-material">
                        <label for="" class="label-material"></label>
                        <input type="text" name="name" value="{{ old('name', $album->name) }}" placeholder="Inserisci il titolo del progetto" class="input-field-material" required title="Questo campo non puo essere vuoto." x-moz-errormessage="Questo campo non puo essere vuoto.">
                      </div>
                    </div>
                    <div class="col-md-4 centered">
                      <h3>Immagine di copertina</h3>
                        <div class="form-group">
                          <a id="selected_image_preview">
                              <div class="thumbnail-preview-add" @if($album->featured_image_id > 0) style="background: url('/image/{{$album->featuredImage->id}}/{{$album->featuredImage->file_name}}?w=280&h=280&fit=crop') no-repeat center center;" @endif >
                                <div class="btn">Scegli immagine di copertina</div>
                              </div>
                          </a>
                        </div>
                    </div>
                  </div>
              </div>

            </div>
            
        </form>
        <br>

      
      @include('admin.gallery.gallery-section', array('model' => $album, 'model_name' => 'albums', 'model_route' => 'progetti'))
      <div class="centered">
              <button id="toolbar-save-form" class="btn btn-green">Salva</button>
              <a href="/admin/progetti" class="btn btn-orange">Abbandona</a>
            </div>
        </div>

      </div>

      <form method="POST" action="/admin/progetti/{{ $album->id }}/rimuovi" id="album_deletion_form">
                        {{ csrf_field() }} </form>

    </section>
    @stop

@section('footer_extras')

<script type="text/javascript" src="/adm/scripts/dropzone-bindings.js"></script>
<script type="text/javascript" src="/adm/scripts/image-picker.min.js"></script>
<script type="text/javascript" src="/adm/scripts/jquery.magnific-popup.min.js"></script>

<script type="text/javascript">
    
    $("#featured_image_id_field").imagepicker({limit: 1});
    $("#cover_image_id_field").imagepicker({limit: 1});

    function doMagnificPopup () {
    $('.gallery-item').magnificPopup({
      type: 'image',
      gallery:{
        enabled:true
      }
    });
}

doMagnificPopup();



</script>

@stop