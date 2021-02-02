@extends('layouts.admin.index')

@section('content')
@if (session('status'))
<div class="card">
    <div class="card-body">
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    </div>
</div>
@endif
@endsection
