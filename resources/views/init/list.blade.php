@extends("layout.master")
@section('content')
     <div class="row ">
          <div class="col-12">
          <table class="table table-bordered">
      <thead>
    <tr>
      <th scope="col">Ma Don vi</th>
      <th scope="col">Ten Don Vi</th>
      <th scope="col">Don Vi Cha</th>
      <th scope="col">Mo Ta</th>
      <th scope="col">NGay Tao</th>
      <th scope="col">Nguoi Tao</th>
      <th scope="col">Ngay Cap Nhat</th>
      <th scope="col">Nguoi Cap Nhat</th>
      <th scope="col">Action</th>
      
     </tr>
     </thead>

     <tbody>
     
     @foreach($list_init as $values)
    <tr>
      <td> {{$values->madonvi}}</td>
      <td> {{$values->tendonvi}}</td>
      <td>   {{$values->donvicha}}</td>
      <td> {{$values->mota}}</td>
      <td> {{$values->ngaytao}}</td>
      <td> {{$values->nguoitao}}</td>
      <td> {{$values->ngaycapnhat}}</td>
      <td>  {{$values->nguoicapnhat}}</td>
      <td> 
            @if( Session::get('powerful')==1)
              <a href="{{url('init/delete')}}/{{$values->madonvi}}" class="mr-3"> <div class="fa fa-remove"></div> </a>
              <a href="{{url('init/edit')}}/{{$values->madonvi}}"> <div class="fa fa-pencil"></div></a>
              @endif</td>
    </tr>
      @endforeach
     </tbody>
     </table>
     </div>

     </div>
    

@endsection