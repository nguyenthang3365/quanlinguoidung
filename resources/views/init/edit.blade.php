@extends("layout.master")
@section('content')
<div class="row mt-1 ">
              <div class="col-6  mx-auto">
              <form action="{{URL::to('init/update')}}" method="POST">
                    {{csrf_field()}}
                   
                        <input type="hidden" name="madonvi" class="form-control" id="exampleInputEmail1"  value="{{$detail->madonvi}}">
                 
                   
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ten Don Vi</label>
                        <input type="text" name="tendonvi" class="form-control" id="exampleInputEmail1"  value="{{$detail->tendonvi}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mo Ta</label>
                        <input type="text" name="donvicha" class="form-control" id="exampleInputPassword1" value="{{$detail->donvicha}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Ngay sinh</label>
                        <input type="text" name="mota" class="form-control" id="exampleInputPassword1"  value="{{$detail->mota}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Ngay Tao</label>
                        <input type="date" name="ngaytao" class="form-control" id="exampleInputPassword1"  value="{{$detail->ngaytao}}">
                    </div>
                   
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nguoi Tao</label>
                        <input type="text" name="nguoitao" class="form-control" id="exampleInputPassword1"  value="{{$detail->nguoitao}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Ngay cap Nhat</label>
                        <input type="date" name="ngaycapnhat" class="form-control" id="exampleInputPassword1"  value="{{$detail->ngaycapnhat}}" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nguoi Cap Nhat</label>
                        <input type="text" name="nguoicapnhat" class="form-control" id="exampleInputPassword1"  value="{{$detail->nguoicapnhat}}">
                    </div>

                    <button type="submit" class="btn btn-primary">update init</button>
                    </form>
              </div>
          </div>

@endsection