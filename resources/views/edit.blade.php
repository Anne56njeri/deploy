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
            @if(Session::has('flash_message'))
      <div class="alert alert-success">
          {{ Session::get('flash_message') }}
      </div>
  @endif




<form method="post" action="{{action('ProposalformController@update', $id)}}">
  @csrf
  <input name="_method" type="hidden" value="PATCH">
          <div class="row">
            <div class="col-md-12"></div>
            <div class="form-group col-md-4">
              <label for="name">Status:</label>

              <select name="status">
    <option value="Draft">Draft</option>
    <option value="Submit">Submit</option>
    <option value="StageOne" selected>StageOne</option>
    <option value="StageTwo">StageTwo</option>
    <option value="Accepted">Accepted</option>
  </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12"></div>
            <div class="form-group col-md-12" style="margin-top:10px">
              <button type="submit" class="btn btn-success">Update</button>
            </div>
          </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
