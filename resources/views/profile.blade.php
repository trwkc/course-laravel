<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf8">
    <link rel="stylesheet" href="/css/app.css">
    <title>My Profile</title>
    <style>
      .img-profile {
        max-width: 150px;
        margin: auto;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="jumbotron">
      @foreach ($profiles as $profile)
        <div class="row">
          <div class="col-md-4">
            <img src="images/{{$profile['image']}}" class="img-responsive img-circle img-profile">
          </div>
          <div class="col-md-8">
            <h2>{{$loop->iteration}}. {{$profile['name']}}</h2>
            <li>{{$profile['occupation']}}</li>
            <li>Medium : <a href="{{$profile['medium']}}">{{$profile['medium']}}</a></li>
            <li>github : <a href="{{$profile['github']}}">{{$profile['github']}}</a></li>
            <hr>
          </div>
        </div>
        <hr>
        @endforeach
        
      </div>
    </div>
  </body>
</html>