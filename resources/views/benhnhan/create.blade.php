@extends('pages.layout.layouts')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Patient Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('benhnhan.index')}}"> Patient</a> </li>
              <li class="breadcrumb-item active">Create Patient Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @if (count($errors) > 0)
  <div class="alert alert-danger">
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif
<!-- goi session bao loi -->
@if($mess=Session::get('error'))
<div class="alert alert-danger">
<li>{{ $mess }}</li>
</div>
@endif

    <section class="content">
      <div class="container-fluid">
      <div class="row">
      <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('benhnhan.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                 <div class="form-group">
                    <label for="exampleName">Tên Bệnh Nhân</label>
                    <input type="text" class="form-control" id="hovaten" placeholder="Họ Và Tên Bệnh Nhân" name="hovaten" value="{{old('hovaten')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleName">Ngày Sinh</label>
                    <input type="date" class="form-control" id="ngaysinh" placeholder="Ngày Sinh" name="ngaysinh" value="{{old('ngaysinh')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleName">Giới Tính</label>
                    <input type="text" class="form-control" id="gioitinh" placeholder="Giới Tính" name="gioitinh" value="{{old('gioitinh')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleName">Số Điện Thoại</label>
                    <input type="text" class="form-control" id="sodienthoai" placeholder="Số Điện Thoại" name="sodienthoai" value="{{old('sodienthoai')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleName">Ngày Khám</label>
                    <input type="date" class="form-control" id="ngaykham" placeholder="Ngày Khám" name="ngaykham" value="{{old('ngaykham')}}">
                  </div>                 
                  <div class="form-group">
                    <label for="exampleBenhvien">Bệnh viện</label>
                    <select name="id_benhvien" class="browser-default custom-select">
                      @foreach($benhvien as $bv)
                        <option value="{{$bv->id}}" >{{$bv->tenbenhvien}}</option>  
                      @endforeach
                    </select>
                  </div>
                  <!-- /.card-body -->
                  <div class="form-group">
                    <label for="exampleBacsi">Bác Sĩ</label>
                    <select name="id_bacsi" class="browser-default custom-select">
                      @foreach($bacsi as $bs)
                        <option value="{{$bs->id}}" >{{$bs->tenbacsi}}</option>  
                      @endforeach
                    </select>
                  </div>                
                <!-- /.card-body -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Chuyên Khoa</label>
                    <select name="id_chuyenkhoa" class="browser-default custom-select">
                      @foreach($chuyenkhoa as $ck)
                        <option value="{{$ck->id}}" >{{$ck->tenchuyenkhoa}}</option>  
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Khung giờ</label>
                    <select name="id_khunggio" class="browser-default custom-select">
                      @foreach($khunggio as $kg)
                        <option value="{{$kg->id}}" >{{$kg->khunggio}}</option>  
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
         
        </div>
      </div>
    </section>

@endsection
