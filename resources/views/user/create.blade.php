@extends("layout.master")
@section('content')
<div class="row mt-1 ">
              <div class="col-6  mx-auto">
              <form action="{{URL::to('user/insert')}}" method="POST">
                    {{csrf_field()}}
                  
                        <input type="hidden" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                   
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ho Ten</label>
                        <input type="text" name="hoten" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mo Ta</label>
                        <input type="text" name="mota" class="form-control" id="exampleInputPassword1" placeholder="Decription">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Ngay sinh</label>
                        <input type="date" name="ngaysinh" class="form-control" id="exampleInputPassword1" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Ngay Tao</label>
                        <input type="date" name="ngaytao" class="form-control" id="exampleInputPassword1" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Dia Chi</label>
                        <input type="text" name="diachi" class="form-control" id="exampleInputPassword1" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nguoi Tao</label>
                        <input type="text" name="nguoitao" class="form-control" id="exampleInputPassword1" placeholder="User create">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Ngay cap Nhat</label>
                        <input type="date" name="ngaycapnhat" class="form-control" id="exampleInputPassword1" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nguoi Cap Nhat</label>
                        <input type="text" name="nguoicapnhat" class="form-control" id="exampleInputPassword1" placeholder="User update">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Don Vi</label>
                        <select name="donvi" id="" class="w-100">
                          @foreach($madv as $value)
                                 <option value="{{$value->madonvi}}">{{$value->tendonvi}}</option>
                          @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add User</button>
                    <button type="reset" class="btn btn-primary">reset</button>
                    </form>
              </div>
          </div>

@endsection