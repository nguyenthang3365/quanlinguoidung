<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container-fluid">
          <div class="row">
               <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                        <a class="navbar-brand">Brand</a>
                        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div id="my-nav" class="collapse navbar-collapse">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{url('user/list')}}" >quản lí user</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="{{url('init/list')}}" tabindex="-1" aria-disabled="true">quản lí đơn vị</a>
                                </li>                
                                @if( Session::get('powerful')==1)
                                <li class="nav-item">
                                    <a class="nav-link " href="{{url('user/create')}}" tabindex="-1" aria-disabled="true">thêm quản lí user</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="{{url('init/create')}}" tabindex="-1" aria-disabled="true">thêm quản lí đơn vị</a>
                                </li>
                                @endif
                              
                            </ul>
                        </div>

                        <?php
                            
                             if(session::get("account") )
                             {
                                echo  "<span class='mr-2'>".session::get("account")."</span>";
                                echo "<a href ='/logout' >log out</a>";
                             }
                           
                        ?>
                    </nav>
               </div>
          </div>

         
      </div>
    
      <div class="container mt-2">
             @yield('content')
      </div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>