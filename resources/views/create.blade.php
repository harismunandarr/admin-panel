@extends('layout.main');
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create user</h1>
            <form action="{{route('user.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama">Enter Name</label>
                        <input type="text" class="form-control" id="nama" placeholder="Jhon Doe" name="nama">
                        @error('nama')
                            <small>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Enter Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
                        @error('email')
                            <small>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                        @error('password')
                            <small>{{$message}}</small>
                        @enderror
                    </div>
                    {{-- <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div> --}}
                </div>
                    <!-- /.card-body -->
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </form>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create user</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  </div>
@endsection