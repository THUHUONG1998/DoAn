
@extends('pages.layout.layouts')


@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-8">
        <h1>CHUYEN KHOA TABLE</h1>
      </div>
      <div class="col-sm-2">
        <a class="btn btn-success" href="{{route('chuyenkhoa.create')}}"> Create New Chuyên Khoa</a>
      </div>
      <div class="col-sm-2">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">chuyenkhoa table</li>
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
   <th>STT</th>
   <th>Tên Chuyên Khoa</th>
   <th>Tên Bệnh Viện</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($chuyenkhoa as $key => $value)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $value->tenchuyenkhoa }}</td>
    <td>{{ $value->benhvien->tenbenhvien }}</td>
   
    <td>
        <a class="btn btn-info" href="{{ route('chuyenkhoa.show',$value->id) }}">Show</a>
    
        <a class="btn btn-primary" href="{{ route('chuyenkhoa.edit',$value->id) }}">Edit</a>
      
        <button class="btn btn-danger" data-userid= {{$value->id}} data-toggle="modal" data-target="#myModal{{ $i}}">Delete</button>
       
    </td>
  </tr>
  <div class="modal modal-danger fade" id="myModal{{ $i }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
          <h4 class="modal-title text-center" id="myModalLabel">Thông báo</h4>
        </div>
        <form action="{{route('chuyenkhoa.destroy', $value->id)}}" method="post">
            {{method_field('delete')}}
            {{csrf_field()}}
          <div class="modal-body">
          <p class="text-center">
            Bạn có chắc chắn muốn xóa chuyên khoa <b> {{ $value->tenchuyenkhoa }} </b> không?
          </p>
              <input type="hidden" name = "id_chuyenkhoa" id="chuyenkhoa_id" value="">

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

{!! $chuyenkhoa->links() !!}




@endsection