<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Search Functionlity</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>
    <body>
        <form action ="{{URL::to('/search')}}" method="POST" role="search">
           {{ csrf_field() }}
           <div class = "input-group">
               <input type="text" class="form-control" name="q"
               placeholder="seach By programming Language">

               <input type="text" class="form-control" name="s"
               placeholder="seach By  Language">

               <span class="input-group-btn">
                   <button type="submit" class="btn btn-default" name="submit">
                       <span class="glyphicon glyphicon-search"></span>
                   </button>
               </span>
           </div> 
        </form>
        <div class="container">
        @if(isset($details))
            <p>the search results for your query  <b>{{$query}}</b> are : </p>
            <h1>Sample user details :</h1>
            <table class="table table-stripped">
                <!-- <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($details as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                    </tr>
                    @endforeach
                </tbody> -->
                <thead>
                    <tr>
                        <th>developers</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($details as $developer)
                    <tr>
                        <td>{{$developer->email}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @elseif(isset($message))
            <p>{{$message}}</p>
        @endif
        </div>    
    </body>
</html>
