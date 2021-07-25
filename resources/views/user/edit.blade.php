@extends("layout.master")
@section('content')
<div class="row mt-1 ">
              <div class="col-6  mx-auto">
              <form action="{{URL::to('user/update')}}" method="POST">
                    {{csrf_field()}}
                   
                        <input type="hidden" name="id" class="form-control" id="exampleInputEmail1"  value="{{$detail->id}}">
                 
                   
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ho Ten</label>
                        <input type="text" name="hoten" class="form-control" id="exampleInputEmail1"  value="{{$detail->hoten}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mo Ta</label>
                        <input type="text" name="mota" class="form-control" id="exampleInputPassword1" value="{{$detail->mota}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Ngay sinh</label>
                        <input type="date" name="ngaysinh" class="form-control" id="exampleInputPassword1"  value="{{$detail->ngaysinh}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Ngay Tao</label>
                        <input type="date" name="ngaytao" class="form-control" id="exampleInputPassword1"  value="{{$detail->ngaytao}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Dia Chi</label>
                        <input type="text" name="diachi" class="form-control" id="exampleInputPassword1"  value="{{$detail->diachi}}">
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
                    <div class="form-group">
                        <label for="exampleInputPassword1">Don Vi</label>
                        <select name="donvi" id="" class="w-100">
                                @foreach($category as $value)
                                   <option <?php if($detail->donvi == $value->madonvi){echo "selected"; }  ?>  value="{{$value->madonvi}}">{{$value->tendonvi}}</option>
                                @endforeach
                        </select>
                    </div>
                 
                    <button type="submit" class="btn btn-primary">update user</button>
                    <button type="reset" class="btn btn-primary">reset</button>
                    </form>
              </div>
          </div>

@endsection