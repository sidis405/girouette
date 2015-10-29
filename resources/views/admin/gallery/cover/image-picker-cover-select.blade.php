<select class="cover_image_id" name="cover_image_id" id="cover_image_id_field">
@foreach ($gallery as $media)

  <option id="media_cover_option_{{$media->id}}" data-img-src="{{ $media->getUrl() }}?w=80&h=80&fit=contain" value="{{$media->id}}" @if($model->cover_image_id == $media->id) selected @endif>{{$media->id}}</option>
@endforeach

</select>