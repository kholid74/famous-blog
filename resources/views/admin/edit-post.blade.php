@extends('admin.layouts.app')

@section('content') 
        <div class="container-fluid">
          <div class="animated fadeIn">
            <!-- /.row-->
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-12" align="center">
                    <h4 class="card-title mb-0">EDIT POST</h4>
                  </div>
                  <!-- /.col-->
                  
                  <!-- /.col-->
                </div>
                <!-- /.row-->
                <div class="col-sm-8 offset-md-2" style="margin-top:40px;">
                  
                  <form method="post" action="{{ route('post.update', $data->id) }}">
                    @csrf
                    @method('PATCH')
                    
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="text-input">Categories</label>
                      <div class="col-md-9">
                        <select class="form-control" name="id_category">
                            <option disabled selected>- Select Category -</option>
                            @foreach($category as $row)
                            <option value="{{ $row->id }}" @if($data->id == $row->id) selected @endif >{{ $row->category_name }}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="text-input">Title</label>
                      <div class="col-md-9">
                        <input class="form-control" id="text-input" type="text" name="title" value="{{ $data->title }}" placeholder="Title">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="text-input">Short Description</label>
                      <div class="col-md-9">
                        <textarea  class="form-control" name="short_description">{{ $data->short_description }}</textarea>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="text-input">Content</label>
                      <div class="col-md-9">
                        <textarea  class="form-control" name="content" id="content">{{ $data->content }}</textarea>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="banner">Image</label>
                      <div class="col-md-9">
                        @if(!empty($data->image))
                        <img id="replace_banner" src="{{ URL::to('/') }}/images/{{ $data->image }}" style="max-width:500px;">
                        @else
                        <img id="replace_banner" src="{{ asset('admin/img/noimagebanner.jpg') }}" style="max-width:500px;">
                        @endif
                         <br>
                        <input onchange="document.getElementById('replace_banner').src = window.URL.createObjectURL(this.files[0])" type="file" name="image"> <br>
                        <input type="hidden" name="hidden_image" value="{{ $data->image }}">
                        <span style="font-size: 10px;">JPEG | JPG | PNG</span>
                      </div>
                     </div>

                </div>
              </div>
               <div class="card-footer" align="center">
                    <input type="submit" name="edit"  class="btn btn-md btn-primary" value="UPDATE" />
                    <a class="btn btn-md btn-danger" href="javascript:history.back()">CANCEL</a>
                </div>
             </form>
            </div>
            
           
          </div>
        </div>
      </main>
@endsection