@extends('Admin.layouts.base')
@section('css')

    <link rel="stylesheet" href="{{ asset('Admin/plugins/bootstrap-switch/css/bootstrap3/bootstrap-switch.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/plugins/bootstrap-switch/css/bootstrap2/bootstrap-switch.min.css') }}">

@endsection
@section('content')
    <div class="col-12 px-3">

        <div class="card">
            <div class="card-header py-4">
                <h2 class="card-title">Feedbacks</h2>
                <a href="/admin/feedback/create" class="btn btn-outline-primary btn-sm float-right">Create</a>


            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Show on Website</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($feedbacks as $f)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$f->name}}</td>
                            <td>

                                <div class="custom-control custom-switch">
                                    <form id="toggle_form">
                                        @csrf
                                    <input type="checkbox" class="custom-control-input" id="{{$f->id}}" @if($f->active) checked @endif name="active" onchange="toggle_function({{$f->id}})">
                                    <label class="custom-control-label" for="{{$f->id}}"></label>
                                    <input type="hidden"  name="feedback_id" value="{{$f->id}}">
                                    </form>
                                </div>

                            </td>
                            <td>{{ date('M-d-Y', strtotime($f->created_at)) }}</td>
                            <td>
                                <a href="/admin/feedback/{{$f->id}}" class="btn btn-outline-success btn-sm">Show</a>
                                <a href="/admin/feedback/{{$f->id}}/edit" class="btn btn-outline-primary btn-sm">Edit</a>
                                <form method="post" action="{{ URL('/admin/feedback/'.$f->id)  }}" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure you want to delete it?');" class="btn btn-outline-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>


    </div>
@endsection
@section('js')
    <script src="{{ asset('Admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
    <script>

        function toggle_function(feedback_id){

            $.ajax({
                type: "POST",
                url: '{{ Route('feedback.toggle' )}}',
                data : {
                    'feedback_id' : feedback_id,
                    "_token": "{{ csrf_token() }}",
                },
                success: function (data) {
                    //  alert(data.data);
                    // location.reload();
                }
            });
        }


    </script>


@endsection
