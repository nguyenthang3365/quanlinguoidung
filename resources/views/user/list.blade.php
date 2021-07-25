@extends("layout.master")
@section('content')
     <div class="row ">
          <div class="col-12">
          <table class="table table-bordered">
      <thead>
    <tr>
      <th scope="col">Ho Ten</th>
      <th scope="col">Mo Ta</th>
      <th scope="col">Ngay Sinh</th>
      <th scope="col">Ngay Tao</th>
      <th scope="col">Dia Chi</th>
      <th scope="col">Nguoi Tao</th>
      <th scope="col">Ngay Cap Nhat</th>
      <th scope="col">Nguoi Cap Nhat</th>
      <th scope="col">Don Vi</th>
      <th scope="col">Action</th>
      
     </tr>
     </thead>

     <tbody>
     
     @foreach($nguoidung as $values)
    <tr>
      <td> {{$values->hoten}}</td>
      <td> {{$values->mota}}</td>
      <td>   {{$values->ngaysinh}}</td>
      <td> {{$values->ngaytao}}</td>
      <td> {{$values->diachi}}</td>
      <td> {{$values->nguoitao}}</td>
      <td> {{$values->ngaycapnhat}}</td>
      <td>  {{$values->nguoicapnhat}}</td>
      <td>  {{$values->donvi}}</td>
      <td> 
            @if( Session::get('powerful')==1)
              <a href="{{url('user/delete')}}/{{$values->id}}" class="mr-3"> <div class="fa fa-remove"></div> </a>
              <a href="{{url('user/edit')}}/{{$values->id}}"> <div class="fa fa-pencil"></div></a>
              @endif</td>
    </tr>
      @endforeach
     </tbody>
     </table>
     </div>

     </div>
    

@endsection