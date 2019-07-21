@extends('admin.layouts.app')

@section('content') 
        <div class="container-fluid">
          <div class="animated fadeIn">
            <!-- /.row-->
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-12" align="center">
                    <h4 class="card-title mb-0">CHANGE PASSWORD</h4>
                  </div>
                  <!-- /.col-->
                  @if(Session::has('flash_message_error'))
                   <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{!! session('flash_message_error') !!}</strong>
                      <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                    </div>            
                @endif
                @if(Session::has('flash_message_success'))
                   <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{!! session('flash_message_success') !!}</strong>
                      <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                    </div>            
                @endif
                  <!-- /.col-->
                </div>
                <!-- /.row-->
                <div class="col-sm-6 offset-md-3" style="margin-top:40px;">
                  
                  <form class="form-horizontal"  method="post" action="{{ url('/admin/update-pwd') }}" name="password_validate" id="password_validate" novalidate="novalidate">
                    @csrf
                    <div class="form-group row">
                      <label class="col-md-4 col-form-label" for="text-input">Current Password</label>
                      <div class="col-md-8">
                        <input class="form-control" id="current_pwd" type="password" name="current_pwd" placeholder="********">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-md-4 col-form-label" for="text-input">New Password</label>
                      <div class="col-md-8">
                        <input class="form-control" id="new_pwd" type="password" name="new_pwd" placeholder="********">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-md-4 col-form-label" for="text-input">Confirm New Password</label>
                      <div class="col-md-8">
                        <input class="form-control" id="confirm_pwd" type="password" name="confirm_pwd" placeholder="********">
                      </div>
                    </div>

                </div>
              </div>
               <div class="card-footer" align="center">
                    <input type="submit" class="btn btn-md btn-primary" value="UPDATE PASSWORD" />
                    <a class="btn btn-md btn-danger" href="javascript:history.back()">CANCEL</a>
                </div>
             </form>
            </div>
            
           
          </div>
        </div>
      </main>
@endsection