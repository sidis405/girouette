@extends('admin.layouts.master')

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
                </tr>
              </thead>
              <tbody>
              @foreach($albums as $album)
                <tr href="/admin/progetti/{{$album->id}}/modifica">
                  <td>
                    <div class="thumbnail-preview-list" @if($album->featured_image_id > 0) style="background: url('/image/{{$album->featuredImage->id}}/{{$album->featuredImage->file_name}}?w=120&h=120&fit=crop') no-repeat center center;" @endif ></div>
                  </td>
                  <td>{{$album->name}}              </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

  @stop