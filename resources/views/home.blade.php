@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="https://placehold.it/1200x400?text=IMAGE" alt="Image">
                    <div class="carousel-caption">
                      <h3>Sell $</h3>
                      <p>Money Money.</p>
                    </div>      
                  </div>
                  <div class="item">
                    <img src="https://placehold.it/1200x400?text=Another Image Maybe" alt="Image">
                    <div class="carousel-caption">
                      <h3>More Sell $</h3>
                      <p>Lorem ipsum...</p>
                    </div>      
                  </div>
                </div> 
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>


        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Testing</h1>
            <p>Hallo, {{Session::get('name')}}. Apakabar?</p>
            <h2>* Email anda : {{Session::get('email')}}</h2>
            @if(Session::get('login') == true)
            <h2>* Status Login : Berhasil Login</h2>
            @else
            <h2>* Status Login : Belum login</h2>
            @endif
            <h2>* Alamat : {{Session::get('address')}}</h2>
            <h2>* Nomor Handphone : {{Session::get('phone')}}</h2>
            <a href="/logout" class="btn btn-primary btn-lg">Logout</a>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection