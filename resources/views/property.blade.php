@extends('base')
@section('content')
     <section class="main-section">
<div class="jumbotron">
        <div class= "container text-center">
        <img src= "{{$mitra->image}}" class="poster"   alt="Image">   
          <h1>{{$mitra->name}} </h1>      
          <p>{{$mitra->description}}</p>
        </div>
</div>
    @foreach($data->chunk(3) as $datachunk)
      <div class="container">    
        <div class="row">
        @foreach($datachunk as $add)
        <a href="">
          <div class="col-sm-4">
            <div class="panel panel-primary">
              <div class="panel-heading">{{$add->name}}</div>
              <div class="panel-body"><img src= "{{$add->image}}" class="img-responsive" style="height:200px"  alt="Image"></div>
              <div class="panel-footer">{{$add->price}}</div>
            </div>
          </div>
        </a>
        @endforeach
        </div>
      </div>
      <br>
    @endforeach
      <br>
      <footer class="container-fluid text-center">
        <p>Online Store Copyright</p>  
        <form class="form-inline">Get deals:
          <input type="email" class="form-control" size="50" placeholder="Email Address">
          <button type="button" class="btn btn-danger">Sign Up</button>
        </form>
      </footer>
</section>
@endsection