@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Edit Form</div>
          @if(session()->has('message'))
            <div class="alert alert-success">
              {{ session()->get('message') }}
            </div>
          @endif

          <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{route ('stage.store') }}">
              {{ csrf_field() }}

              <div class="form-group">
                <label for="name" class="col-md-4 control-label">Name</label>

                <div class="col-md-6">
                  <input name="name" type="text" class="form-control" value="{{$proposalform->name}}">


                </div>
              </div>

              <div class="form-group">
                <label for="name" class="col-md-4 control-label">Phone Number</label>

                <div class="col-md-6">
                  <input type="text" class="form-control" name="number" value="{{$proposalform->number}}">



                </div>
              </div>

              <div class="form-group">
                <label for="proposal" class="col-md-4 control-label">Proposal</label>

                <div class="col-md-6">
                  <input type="test" class="form-control" name="Proposal" value=" {{$proposalform->Proposal}}">


                </div>
              </div>
              <div class="form-group">
                <label for="date" class="col-md-4 control-label">Date</label>

                <div class="col-md-6">
                  <input  type="date" class="form-control" name="date" value="{{$proposalform->date}} ">


                </div>
              </div>





              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-success">
                    Confirm
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
