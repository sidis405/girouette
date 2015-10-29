<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Galleria Immagini</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group dropzone-previews gallery-container">
                    
                    @if( count( $model->media ) > 0)

                    <div class="images-container" id="images-container">

                        @include('admin.gallery.gallery-partial', array('gallery' => $model->media, 'model_route' => $model_route ))


                    </div>

                    @else

                    <div class="images-container" id="images-container">
                        
                        Non ci sono immagini associate a questo record

                    </div>
                    
                    @endif
                </div>
                
            </div>
            <div class="col-lg-12">
                
                <div class="col-md-12">
                    <form class="dropzone" action="/admin/model/upload_image" method="POST" id="activity-image-upload-form">
                        {{csrf_field()}}
                        <input type="hidden" name="model_id"  id="model_id" value="{{ $model->id }}">
                        <input type="hidden" name="model"  id="model" value="{{$model_name}}">
                        <input type="hidden" name="route"  id="model" value="{{$model_route}}">
                    </form>
                </div>
            </div>
            
            
        </div>
        
        
    </div>
</div>

@include('admin.gallery.featured.image-picker-modal', array('gallery' => $model->media))
@include('admin.gallery.cover.image-picker-cover', array('gallery' => $model->media))
