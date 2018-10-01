@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       
         <div class="container">
          <h2>Activities</h2>
                      
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Firstname</th>
                <th>Name Of Activity</th>
                <th>Action</th>

              </tr>
            </thead>
            <tbody>
              @foreach($activities as $activity)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$activity->name}}</td>
                <td><a href="{{ route('check-attendance') }}"><button class="btn btn-primary">Check Attendance</button></a></td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
                     
    </div>
</div>
@endsection
