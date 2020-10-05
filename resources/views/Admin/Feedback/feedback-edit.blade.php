@extends('Admin.layouts.base')

@section('content')
    <div class="col-12">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Feedback</h3>

            </div>
            <div class="card-body">
                <form role="form" action="{{ Route('feedback.update',$feedback['id'])}}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{$feedback['name']}}" required>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-12">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Designation</label>
                                <input type="text" class="form-control" name="designation" value="{{$feedback['designation']}}" required>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Description</label>
                                <textarea  class="form-control" name="subject" placeholder="Enter Description" required>{{$feedback['description']}}"</textarea>
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-outline-success float-right px-4">Update</button>

                </form>
            </div>

        </div>
    </div>
@endsection

