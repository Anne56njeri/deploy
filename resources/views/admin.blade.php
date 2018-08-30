@extends('layouts.app')

@section('content')
<div class="jumbotron" style="background-image:url(/images/front.jpg);height:400px;background-repeat: no-repeat;background-position:center ;  background-size: cover;">
  <center><h2  style="color:white;">Proposal Management System</h2></center>
<center><button class="button" style=""><span>Admin Dashboard</span></button><center>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                    @endif

                    You are logged in!
                    <br>
                    <br>
                    <button class="button" style="background-color:black; width:130px;border: 2px solid black;"><span><a href="{{ url('/proposal') }}" style="color:white; font-size:13px;">View Proposal </a></span></button>

                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>



@endsection
