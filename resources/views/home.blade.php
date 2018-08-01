@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Testing</h1>
            <p>Hallo, {{Session::get('name')}}. Apakabar?</p>

            <h2>* Email anda : {{Session::get('email')}}</h2>
            <h2>* Status Login : {{Session::get('login')}}</h2>
            <h2>* Alamat : {{Session::get('address')}}</h2>
            <h2>* Nomor Handphone : {{Session::get('phone')}}</h2>
            <a href="/logout" class="btn btn-primary btn-lg">Logout</a>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection