@extends('admin.layouts.app')

@section('content')
        <div class="container-fluid">
          <div class="animated fadeIn">
            <!-- /.row-->
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-12" align="center">
                    <h4 class="card-title mb-0">EDIT CATEGORY</h4>
                  </div>
                  <!-- /.col-->
                  
                  <!-- /.col-->
                </div>
                <!-- /.row-->
                <div class="col-sm-8 offset-md-2" style="margin-top:40px;">
                  
                  <form method="post" action="{{ route('categories.update', $data->id) }}">
                    @csrf
                    @method('PATCH')
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="text-input">Category Name</label>
                      <div class="col-md-9">
                        <input class="form-control" id="text-input" type="text" name="category_name" value="{{ $data->category_name }}" placeholder="Category Name">
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