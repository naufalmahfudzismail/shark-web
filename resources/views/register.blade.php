@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content ">
            <!-- Remove This Before You Start -->
            <h1>HomeDesign Register</h1>
            <hr>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form action="{{ url('/registerPost') }}"  method="POST">
                {{ csrf_field()  }} <!-- Cross-Site Request Forgery. for post form -->
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="password">Password Confirmation:</label>
                    <input type="password" class="form-control" id="confirmation" name="confirmation">
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text"  class="form-control" id="name" name="name">
                </div>         
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text"  class="form-control" id="address" name="address">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text"  class="form-control" id="phone" name="phone">
                </div>      
                <div class="container text-center">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection