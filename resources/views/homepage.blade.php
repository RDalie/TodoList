<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="{{asset('import/assets/img/mdb-favicon.ico')}}" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="{{asset('import/assets/css/bootstrap-to-do-list.min.css')}}" />
</head>

<body>
  <!-- Start your project here-->
  <section class="vh-100" style="background-color: #e2d5de;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
  
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
  
              <h6 class="mb-3">Awesome Todo List</h6>
  
              <form class="d-flex justify-content-center align-items-center mb-4" action ="{{route('todos.store')}}" method="POST">
                @csrf
                <div class="form-outline flex-fill">
                  <input type="text" id="form3" class="form-control form-control-lg" name="newtodo" />
                  <label class="form-label" for="form3">What do you need to do today?</label>
                </div>
                <button type="submit" class="btn btn-primary btn-lg ms-2">Add</button>
              </form>
  
              @foreach($todos as $todo) 

                <form action="{{route('todos.destroy', $todo->id)}}" method="POST">
                @csrf
                @method('delete')
                
                <li class="list-group-item d-flex justify-content-between align-items-center border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-2">
                  <div class="d-flex align-items-center">
                    
                    {{$todo->todo}}
                  </div>
                  
                    <input type="submit" value="Delete">
                    
                  
                </li>

                </form>
            @endforeach

            </div>
          </div>
  
        </div>
      </div>
    </div>
  </section>
  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="{{asset('import/assets/js/mdb.min.js')}}"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>

</html>