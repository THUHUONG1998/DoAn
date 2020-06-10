
@extends('pages.layout.layouts')


@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-8">
        <h1>PATIENT TABLE</h1>
      </div>
      <div class="col-sm-2">
        <a class="btn btn-success" href="{{route('benhnhan.create')}}"> Create New Patient</a>
      </div>
      <div class="col-sm-2">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">patient table</li>
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
   <th>Tên Bệnh Nhân</th>
   <th>Ngày Sinh</th>
   <th>Giới Tính</th>
   <th>Số Điện Thoại</th>
   <th>Ngày Khám</th>
   <th>Tên Bệnh Viện</th>
   <th>Tên Bác Sĩ</th>
   <th>Tên Chuyên Khoa</th>
   <th>Khung giờ khám</th>
   <th width="230px">Action</th>
 </tr>
 @foreach ($benhnhan as $key => $b)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $b->hovaten }}</td>
    <td>{{ $b->ngaysinh }}</td>
    <td>{{ $b->gioitinh }}</td>
    <td>{{ $b->sodienthoai }}</td>
    <td>{{ $b->ngaykham }}</td>   
    <td>{{ $b->benhvien->tenbenhvien}}</td>
    <td>{{ $b->bacsi->tenbacsi }}</td>
    <td>{{ $b->chuyenkhoa->tenchuyenkhoa}}</td>
   <td>{{ $b->khunggio->khunggio }}</td>
    <td>
        <a class="btn btn-info" href="{{ route('benhnhan.show',$b->id) }}">Show</a>
    
        <a class="btn btn-primary" href="{{ route('benhnhan.edit',$b->id) }}">Edit</a>
      
        <button class="btn btn-danger" data-userid= {{$b->id}} data-toggle="modal" data-target="#myModal{{ $i}}">Delete</button>
       
    </td>
  </tr>
  <div class="modal modal-danger fade" id="myModal{{ $i }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
          <h4 class="modal-title text-center" id="myModalLabel">Thông báo</h4>
        </div>
        <form action="{{route('benhnhan.destroy', $b->id)}}" method="post">
            {{method_field('delete')}}
            {{csrf_field()}}
          <div class="modal-body">
          <p class="text-center">
            Bạn có chắc chắn muốn xóa bệnh viện <b> {{ $b->tenbenhnhan }} </b> không?
          </p>
              <input type="hidden" name = "id_benhnhan" id="benhnhan_id" value="">

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

{!! $benhnhan->links() !!}




@endsection