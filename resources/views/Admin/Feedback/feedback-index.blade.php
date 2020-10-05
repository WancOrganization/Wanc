@extends('Admin.layouts.base')

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
                        <th>Active</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($feedbacks as $ann)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$ann->name}}</td>
                            <td>toggle button</td>
                            <td>{{ date('M-d-Y', strtotime($ann->created_at)) }}</td>
                            <td>
                                <a href="/admin/feedback/{{$ann->id}}" class="btn btn-outline-success btn-sm">Show</a>
                                <a href="/admin/feedback/{{$ann->id}}/edit" class="btn btn-outline-primary btn-sm">Edit</a>
                                <form method="post" action="{{ URL('/admin/feedback/'.$ann->id)  }}" style="display: inline-block">
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

