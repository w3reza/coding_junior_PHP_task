@extends('backend.layout.app')
@section('title','Dashboard | User List')
@section('content')
<div class="card px-5 py-5  min-vh-100">

            <h4>User List</h4>

    <table class="table">
        <thead>
          <tr>
            <th >#</th>
            <th >Name</th>
            <th >Email</th>

          </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td >{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
            @endforeach




        </tbody>
      </table>

</div>

@endsection
