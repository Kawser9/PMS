@extends('backend.master')
@section('contend')

<section>
  <div class="page-header min-vh-75">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 col-lg-5 col-md-6 d-flex flex-column mx-auto">
          <div class="card card-plain mt-0">
            <div class="card-header pb-0 text-left bg-transparent">
              <h3 class="font-weight-bolder text-info text-gradient">Role Create | <a href="{{Route('role.list')}}">List</a></h3>
            </div>
            <div class="card-body">
              <form role="form" action="{{Route('role.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label>Name</label>
                <div class="mb-3">
                  <input name="name" type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="name-addon">
                </div>
                
                {{-- <label>Image</label>
                <div class="mb-3">
                  <input name="image" type="file" class="form-control" placeholder="Image" aria-label="Image" aria-describedby="Image-addon">
                </div> --}}
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-info w-10 mt-4 mb-0">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
            <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('../assets/img/curved-images/curved6.jpg')"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection