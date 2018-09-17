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
                      <strong>Organization:</strong>
                      {{ $proposalform->organization }}
                  </div>
                  <div class="form-group">
                      <strong>Address:</strong>
                      {{ $proposalform->address }}
                  </div>

                  <div class="form-group">
                      <strong>Phone</strong>
                      {{ $proposalform->phone }}
                  </div>
                  <div class="form-group">
                      <strong>Email</strong>
                      {{ $proposalform->email}}
                  </div>
                  <div class="form-group">
                      <strong>Submitted_by</strong>
                      {{ $proposalform->submitted_by }}
                  </div>
                  <div class="form-group">
                      <strong>title</strong>
                      {{ $proposalform->title }}
                  </div>
                  <div class="form-group">
                      <strong>Summary</strong>
                      {{ $proposalform->summary }}
                  </div>
                  <div class="form-group">
                      <strong>Background</strong>
                      {{ $proposalform->background }}
                  </div>
                  <div class="form-group">
                      <strong>Activities</strong>
                      {{ $proposalform->activities }}
                  </div>
                  <div class="form-group">
                      <strong>Budget</strong>
                      {{ $proposalform->budget }}
                  </div>
                  <div class="" style="float:left;">
                <a class="btn btn-primary" href="{{ url('/stage') }}"> Back</a>

                  </div>
                  <div class=" " style="float:right;">
                <a class="btn btn-primary" href="{{ route('proposal.edit',$proposalform->id)}}"> Move to stage one</a>
            </div>
                </div>


            </div>
        </div>
    </div>

  </div>

@endsection
