@extends('main')
@section('content')

<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Employee</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('employee.index') }}" enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('employee.update',$user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
             <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Image:</strong>
                        <input type="file" name="image" class="form-control" value="" placeholder=" Enter Name">
                        @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}" placeholder=" Enter Name">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Address:</strong>
                        <input type="text" name="address" class="form-control" value="{{ $user->address }}" placeholder=" Enter a Address">
                        @error('address')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Contact Number:</strong>
                        <input type="text" name="contact" class="form-control" value="{{ $user->contact }}" placeholder=" Enter Contact Number">
                        @error('contact')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        <input type="email" name="email" class="form-control" value="{{ $user->email }}" placeholder=" Enter Email">
                        @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>password:</strong>
                        <input type="text" name="password" class="form-control" value="{{ $user->password }}" placeholder="Enter password">
                        @error('pasword')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <label for="">Department</label>
                    <select name="department_id" id="" class="form-control">
                        <option value="{{$user->department->id}}">{{$user->department->name}}</option>
                        @foreach($departments as $department)
                            @if($user->department->id != $department->id)
                                <option value="{{$department->id}}">{{$department->department_name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                
                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Join Date:</strong>
                        <input type="date" name="join_date" class="form-control" value="{{ $user->join_date }}"placeholder="Enter Join Date">
                        @error('join_date')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                   <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Birth Date:</strong>
                            <input type="date" name="dob" class="form-control" value="{{ $user->dob }}"placeholder="Enter Birth Date">
                            @error('dob')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="status">Role</label>
                        <select name="role" id="" value="{{$user->role}}" class="form-control">
                            <option value="0">0</option>
                            <option value="1">1</option>      
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="is_active" value="{{$user->is_active}}"id="" class="form-control">
                            <option value="0">0</option>
                            <option value="1">1</option>      
                        </select>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary ml-3 mt-3">Submit</button>
            </div>
        </form>
    </div>
@endsection