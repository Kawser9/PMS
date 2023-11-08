@extends('backend.master')
@section('contend')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Role Table | <a href="{{Route('role.create')}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                Create
              </a></h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SL</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($roles as $role)
                    
                  <tr>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{$loop->iteration}}</p>
                    </td>
                    
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{$role->name}}</p>
                    </td>
                    
                    <td class="align-middle">
                      <a href="{{route('role.assign',$role->id)}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit category">
                        Permition
                      </a> |
                      <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete category">
                        Delete
                      </a>
                    </td>
                  </tr>
                  
                  @endforeach
                  

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>  
@endsection