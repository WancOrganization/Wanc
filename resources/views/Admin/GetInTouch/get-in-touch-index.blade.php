@extends('Admin.layouts.base')

@section('content')
    <div class="col-12 px-3">

        <div class="card">
            <div class="card-header py-4">
                <h2 class="card-title">Get In Touches</h2>
                <a href="/admin/get-in-touch/create" class="btn btn-outline-primary btn-sm float-right">Create</a>


            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Mobile Number</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($getInTouches as $ann)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$ann->name}}</td>
                            <td>{{$ann->mobile_number }}</td>
                            <td>{{ date('M-d-Y', strtotime($ann->created_at)) }}</td>
                            <td>
                                <a href="/admin/get-in-touch/{{$ann->id}}" class="btn btn-outline-success btn-sm">Show</a>
                                <a href="/admin/get-in-touch/{{$ann->id}}/edit" class="btn btn-outline-primary btn-sm">Edit</a>
                                <form method="post" action="{{ URL('/admin/get-in-touch/'.$ann->id)  }}" style="display: inline-block">
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

