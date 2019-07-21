@extends('admin.layouts.app')

@section('content') 

  <div class="container-fluid">
    <div class="animated fadeIn">
      <!-- /.row-->
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-12" align="center">
              <h4 class="card-title mb-0">POST</h4>
            </div>
            <!-- /.col-->
            
            <!-- /.col-->
          </div>
          <!-- /.row-->
          <div class="chart-wrapper" style="margin-top:40px;">
            <a class="btn btn-info" href="{{ route('post.create') }}"><i class="fa fa-plus"></i>&nbsp;Add New Post</a>
            <br><br>
           <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Title</th>
              <!--   <th>Slug</th> -->
                <th>Categories</th>
                <th>Modified</th>
                <th>Action</th>
              </r>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              @foreach($data as $row)
              <tr>
                <td>{{ $no }}</td>
                <td>{{ $row->title }}</td>
                <!-- <td>{{ $row->slug }}</td> -->
                <td>{{ $row->cat->category_name }}</td>
                <td>{{ $row->updated_at }}</td>
                <td align="center">
                  <form action="{{ route('post.destroy', $row->id) }}" method="post">
                        <a class="btn btn-success" href="{{ route('post.edit', $row->id) }}"><i class="fa fa-edit"></i></a>
                        
                        @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete ?');"><i class="fa fa-trash-o"></button>
                        </form>
                </td>
              </tr>
              <?php $no++; ?>
              @endforeach
            </tbody>
          </table>
          </div>
        </div>
      
      </div>
      
     
    </div>
  </div>
</main>

@endsection
