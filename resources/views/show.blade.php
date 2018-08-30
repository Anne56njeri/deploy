@extends('layouts.app')


@section('content')


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

                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><center> <center></h2>
            </div>

        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">  <strong>Name:</strong>
                  {{ $proposalform->name }}</div>

                <div class="card-body">
                  <div class="form-group">
                      <strong>Phone Number:</strong>
                      {{ $proposalform->number }}
                  </div>
                  <div class="form-group">
                      <strong>Proposal:</strong>
                      {{ $proposalform->Proposal }}
                  </div>

                  <div class="form-group">
                      <strong>Date:</strong>
                      {{ $proposalform->date }}
                  </div>
                  <div class="" style="float:left;">
                <a class="btn btn-primary" href="{{ url('/proposal') }}"> Back</a>

                  </div>
                  <div class=" " style="float:right;">
                <a class="btn btn-primary" href="{{url ('/stage') }}"> Move to stage one</a>
            </div>
                </div>


            </div>
        </div>
    </div>

  </div>

@endsection
