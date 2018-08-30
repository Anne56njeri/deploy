@extends('layouts.app')

@section('content')
<div class="container-fluid">
<div class="jumbotron" style="background-image:url(../images/front.jpg);height:400px;background-repeat: no-repeat;background-position:center ;  background-size: cover;">
  <center><h2 style="color:white;padding:50px;">Proposal Management System</h2></center>
  <center><button class="button" style=""><span>We offer easier solutions</span></button><center>
</div>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-7">
      <img src="/images/pic1.jpg" class="image" alt="img" style="height:350px; width:;">
    </div>
    <div class="col-md-5">
      <h2 class="on" style="color:yellowgreen;">What we do</h2>

<p>Contrary to popular belief, Lorem Ipsum is not simply random text.
It has roots in a piece of classical Latin literature from 45 BC,
making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the
cites of the word in classical literature, discovered the undoubtable source.</p>
    </div>
  </div>
</div>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-5">
      <h2 class="on" style="color:yellowgreen;">All About One Love</h2>

<p>ibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC.
  This book is a treatise on the theory of ethics, very popular during the Renaissance.
  The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

    </div>
    <div class="col-md-7">


  <img src="/images/pic.jpg" class="image" alt="img" style="height:350px; width:;">
    </div>
  </div>
</div>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-7">
      <img src="/images/back.jpg" class="image" alt="img" style="height:350px; width:;">
    </div>
    <div class="col-md-5">
      <h2 class="on" style="color:yellowgreen;">One Love Solutions</h2>

<p>Contrary to popular belief, Lorem Ipsum is not simply random text.
It has roots in a piece of classical Latin literature from 45 BC,
making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the
cites of the word in classical literature, discovered the undoubtable source.</p>
    </div>
  </div>
</div>
@endsection
