@extends("layout.master")
@section('content')
<div class="row mt-1 ">
              <div class="col-6  mx-auto">
              <form action="{{URL::to('init/insert')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ma Don Vi</label>
                        <input type="text" name="madonvi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ma Don Vi">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ten Don Vi</label>
                        <input type="text" name="tendonvi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                       
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Don Vi Cha</label>
                        <input type="text" name="mota" class="form-control" id="exampleInputPassword1" placeholder="Decription">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mo Ta</label>
                        <input type="text" name="ngaysinh" class="form-control" id="exampleInputPassword1" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Ngay Tao</label>
                        <input type="date" name="ngaytao" class="form-control" id="exampleInputPassword1" >
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
          
                    <button type="submit" class="btn btn-primary">Add Init</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                    </form>
                    <ul>
                           @foreach($errors->all() as $error)
                            <li class='text-danger'> {{$error}} </li>
                           @endforeach
                    </ul>
              </div>
          </div>

@endsection