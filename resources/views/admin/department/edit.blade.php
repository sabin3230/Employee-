@extends('main')
@section('content')

    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Department</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('department.index') }}" enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('department.update',$department->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
             <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Department Name:</strong>
                        <input type="text" name="name" class="form-control" value="{{ $department->name }}" placeholder=" Enter Name">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
            <button type="submit" class="btn btn-primary ml-3 mt-3">Submit</button>
        </form>
    </div>
@endsection