@extends('layouts.admin.index')

@section('title', 'Students')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Students <span>({{ $count }})</span></h4>
                <div class="card-header-action">
                    <a href="/students/create" class="btn btn-primary">Add <i class="fas fa-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">NISN</th>
                <th scope="col">NIS</th>
                <th scope="col">Gender</th>
                <th scope="col">Classroom</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)      
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $student['name'] }}</td>
                <td>{{ $student['nisn'] }}</td>
                <td>{{ $student['nis'] }}</td>
                <td>{{ $student['gender'] }}</td>
                <td>
                    @if ($student['classroom_id'] == 1)
                        {{ "12 RPL 1" }}
                    @elseif ($student['classroom_id'] == 2)
                        {{ "12 RPL 2" }}
                    @endif
                </td>
                <td>{{ $student['phone_number'] }}</td>
                <td>{{ $student['address'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection