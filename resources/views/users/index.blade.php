
@extends('pages.layout.layouts')


@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-8">
        <h1>USERS TABLE</h1>
      </div>
      <div class="col-sm-2">
        <a class="btn btn-success" href="{{route('users.create')}}"> Create New User</a>
      </div>
      <div class="col-sm-2">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">users table</li>
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
   <th>Avatar</th>
   <th>Email</th>
   <th>Roles</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->username }}</td>
    <td><img src="{{$user->avatar}}" width="50px" class="img-circle"></td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td>
        <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
    
        <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
      
        <button class="btn btn-danger" data-userid= {{$user->id}} data-toggle="modal" data-target="#myModal{{ $i}}">Delete</button>
      
       
        <!-- {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!} -->
    </td>
  </tr>
  <div class="modal modal-danger fade" id="myModal{{ $i }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
          <h4 class="modal-title text-center" id="myModalLabel">Thông báo</h4>
        </div>
        <form action="{{route('users.destroy', $user->id)}}" method="post">
            {{method_field('delete')}}
            {{csrf_field()}}
          <div class="modal-body">
          <p class="text-center">
            Bạn có chắc chắn muốn xóa tài khoản <b> {{ $user->username }} </b> không?
          </p>
              <input type="hidden" id="user_id" value="">

          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger" data-target="myModal{{ $i }}" >Xóa ngay</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
          </div>
        </form>
      </div>
    </div>
</div>

 @endforeach

</table>

{!! $data->links() !!}




@endsection