@extends('layout.master')

@section('title', 'Dashboard')

@section('content')

    <div class="container-fluid table-responsive-lg">
        <div class="card">
            <div class="card-header text-success"><strong>Users List</strong></div>
            <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @endif
                <table id="table_id" class="display table table-sm table-striped table-hover table-bordered">
                    <thead>
                        <tr class="table-primary">
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Gender</th>
                            <th>Present Address</th>
                            <th>Permanent Address</th>
                            <th>Company</th>
                            <th>Position</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="table-success">
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->gender }}</td>
                                <td>{{ $user->present_address }}</td>
                                <td>{{ $user->permanent_address }}</td>
                                <td>{{ $user->company }}</td>
                                <td>{{ $user->position }}</td>
                                <td>{{ $user->created_at->diffForHumans() }}</td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>            
            </div>
        </div>
    </div>

@endsection