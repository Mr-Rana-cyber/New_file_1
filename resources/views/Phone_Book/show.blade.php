<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Phone Book Details </title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                            <h4 class="mb-0">Phone Book Details</h4>
                    </div>
                    <div class="card-body">
                      <table class="table table-bordered table-striped table-hover">
                    <tbody>
                       <tr>
                         <th>ID</th>
                        <th>{{$contact->id}}</th>
                       </tr>
                       <tr>
                         <th>Name</th>
                        <td>{{$contact->name}}</td>
                       </tr>
                       <tr>
                         <th>Phone</th>
                        <td>{{$contact->phone}}</td>
                       </tr>
                       <tr>
                         <th>Created At</th>
                        <td>{{$contact->created_at->toDayDateTimeString()}}</td>

                        
                       </tr>
                       <tr>
                         <th>Updated At</th>
                        <td>{{$contact->created_at == $contact->updated_at ? 'Not Updated Yet' :$contact->updated_at->toDayDateTimeString()}}</td>
                       </tr>                      
                    </tbody>  
                      </table>
                      <a href="{{route('phone_book.index')}}"><button class="btn btn-success btn-sm mt-3">Back</button></a>
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