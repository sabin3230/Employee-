@extends('main')
@section('content')

        <div class="container mt-2">

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Leave_From</th>
                    <th>Leave_To</th>
                    <th>Reason</th>
                    <th width="280px">Status</th>
                    <th>Approved</th>
                    <th>Rejected</th>
                </tr>
            </thead>
            <tbody>

                @php($counter = 1)
                @foreach ($data as $leave)
                    <tr>
                        <td> {{ $counter }}</td>
                        <td>{{$leave->user_id}}</td>
                        <td>{{ $leave->from }}</td>
                        <td>{{ $leave->to }}</td>
                        <td>{{ $leave->reason }}</td>
                        <td>{{ $leave->status }}</td>

                        <td>
                            <form method="POST" action="{{route('admin.approved', $leave->id)}}">
                                @csrf
                    
                               <button class="btn btn-success">Approved</button>
                            </form>
                        </td>

                        <td>
                            <form method="POST" action="{{route('admin.rejected', $leave->id)}}">
                                @csrf
                    
                               <button class="btn btn-danger">Rejected</button>
                            </form>
                        </td>

                        @php($counter++)
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection