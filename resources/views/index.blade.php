@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>


            </div>
        </div>
    </div>
</div>
<br>
<br>
<div class="jumbotron" style="background-image:url(/images/front.jpg);height:400px;background-repeat: no-repeat;background-position:center ;  background-size: cover;">
  <center><h2  style="color:white;">Proposal Management System</h2></center>
<center><button class="button" style=""><span>Stage One</span></button><center>
</div>
<div class="container">
  @if (\Session::has('success'))
  <div class="alert alert-success">
    <p>{{\Session::get('success')}}</p>
  </div>
  <br>
  @endif
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Organization Name</th>
        <th>Address</th>

        <th>Phone</th>
        <th>Email</th>
        <th>Submitted By</th>
        <th>Title</th>
        <th>Summary</th>
        <th>Background</th>
        <th>Activities</th>
        <th>Budget</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($proposalform as $proposal)
      @php
       $date=date('Y-m-d', $proposal['date']);
       @endphp
      <tr>
        <td>{{$proposal->name}}</td>
        <td>{{$proposal->organization}}</td>


        <td>{{$proposal->address}}</td>
        <td>{{$proposal->phone}}</td>
        <td>{{$proposal->email}}</td>
        <td>{{$proposal->submitted_by}}</td>
        <td>{{$proposal->title}}</td>
        <td>{{$proposal->summary}}</td>
        <td>{{$proposal->background}}</td>
        <td>{{$proposal->activities}}</td>
        <td>{{$proposal->budget}}</td>

        <td>
        <a href="{{action('ProposalformController@show', $proposal['id'])}}" class="btn btn-warning">show</a>
        </td>
        <td>
            <form action="{{action('ProposalformController@destroy', $proposal['id'])}}" method="post">
              @csrf
              <input name="_method" type="hidden" value="DELETE">
              <button class="btn btn-danger" type="submit">Delete</button>
            </form>
          </td>
      </tr>
      @endforeach
      </tbody>
    </table>

</div>
@endsection
