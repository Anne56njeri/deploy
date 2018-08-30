@extends('layouts.app')

@section('content')
<div class="jumbotron" style="background-image:url(/images/front.jpg);height:400px;background-repeat: no-repeat;background-position:center ;  background-size: cover;">
  <center><h2  style="color:white;">Proposal Management System</h2></center>
<center><button class="button" style=""><span>Stage Two</span></button><center>
</div>
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>


            </div>
        </div>
    </div>
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
        <th>ID</th>
        <th>Name</th>
        <th>Phone Number</th>

        <th>Proposal</th>
        <th></th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($stage as $sta)

      <tr>
        <td>{{$sta->id}}</td>
        <td>{{$sta->name}}</td>


        <td>{{$sta->number}}</td>
        <td>{{$sta->Proposal}}</td>

        <td>
        <a href=" {{ url('/all') }}" class="btn btn-warning">Accept</a>
        </td>
        <td>
            <form action="{{route ('stage.destroy',$sta->id)}}  " method="post">
              @csrf
              <input name="_method" type="hidden" value="DELETE">
              <button class="btn btn-danger" type="submit">Reject</button>
            </form>
          </td>
      </tr>
      @endforeach
      </tbody>
    </table>

</div>
@endsection
