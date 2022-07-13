@extends('welcome')
@section('main_content')

<div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('student.store')}}">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" 
                    name="name"
                    class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email"
                    name="email"
                    class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">DOB</label>
            
                    <input type="text" class="form-control" 
                    name="dob"
                    id="Date" placeholder="DOB">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mobile</label>
            
                    <input type="text" class="form-control" 
                    name="mobile"
                    id="Date" placeholder="DOB">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
            
                    <input type="text" class="form-control" 
                    name="image"
                    id="Date" placeholder="Image">
                  </div>

                  <!-- <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="text" class="custom-file-input"
                        name = "image" 
                        id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label> 
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div> -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
                <!-- /.card-body -->
@endsection