@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       
         <div class="container">
          <h2>Activities</h2>
                      
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Number</th>
                <th>Name Of Activity</th>
                <th>Action</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Day 1</td>
                <td>Talent Night</td>
                <td><button class="btn btn-primary">Check Attendance</button></td>
              </tr>
            </tbody>
          </table>
        </div>
                     
    </div>
</div>
@endsection
