
@extends('pages.layout.layouts')


@section('content')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <div class="pull-right">
            <a class="btn btn-success" href="{{ route('permission.create') }}"> Create New Permission</a>
        </div>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('permission.index')}}">Permission</a> </li>
              <li class="breadcrumb-item active">Create Permission Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered">
 <tr>
   <th>No</th>
   <th>Name</th>
   <th>Guard_Name</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($permission as $key =>$p)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $p->name }}</td>
    <td>{{ $p->guard_name }}</td>
    <td>
        <a class="btn btn-primary" href="{{ route('permission.edit',$p->id) }}">Edit</a>
        
        <button class="btn btn-danger" data-permissionid = {{$p->id}} data-toggle="modal" data-target="#deletePermission">Delete</button>
    </td>
  </tr>
  
  @endforeach
  
  <div class="modal modal-danger fade" id="deletePermission" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
          <h4 class="modal-title text-center" id="myModalLabel">Thông báo</h4>
        </div>
        <form action="{{route('permission.destroy', 'test')}}" method="post">
            {{method_field('delete')}}
            {{csrf_field()}}
          <div class="modal-body">
          <p class="text-center">
            Bạn có chắc chắn muốn xóa quyền này không?
          </p>
          <input type="hidden" id="permission_id" name="id_permission" value="">
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger" data-target="myModal{{ $i }}" >Xóa ngay</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
          </div>
        </form>
      </div>
    </div>
</div>
</table>

{!! $permission->links() !!}



@endsection