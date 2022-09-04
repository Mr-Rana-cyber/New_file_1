<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Phone Book List </title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                            <h4 class="mb-0">Phone Book List</h4>
                    </div>
                    <div class="card-body">
                      <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                 <th>Sl</th>
                                     <th>Name</th>
                                 <th>Phone</th>
                                      <th>Create At</th>
                                 <th>Update At</th>
                                 <th>Action</th>
                               </tr> 
                        </thead>
                        <tbody>
                            @php $sl = 1 @endphp
                            @foreach ($contacts as $contact)
                                <tr>
                                      <td>{{$sl++}}</td>
                                 <td>{{ $contact->name}}</td>
                                        <td>{{ $contact->phone}}</td>
                                 <td>{{ $contact->created_at->toDayDateTimeString()}}</td>
                                 
                                 <td>{{ $contact->created_at==$contact->updated_at? 'Not Updated yet' : $contact->updated_at->toDayDateTimeString()}}</td>
                                     <td>
                                     <a href="{{route('phone_book.show',$contact->id)}}"><button class="btn btn-info ">View</button></a>

                                     {{-- <a href="{{route('phone_book.edit',$contact->id)}}"><button class="btn btn-warning ">View</button></a> --}}

                                     
                                    <a href="{{route('phone_book.edit' ,$contact->id)}}"><button class="btn btn-warning ">Edit</button></a>                  
                                    
                                  <button class="btn btn-danger ">Delete</button></td>
                            </tr>
                            @endforeach                              
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>