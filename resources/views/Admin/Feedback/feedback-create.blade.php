@extends('Admin.layouts.base')

@section('content')
    <div class="col-12">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Feedback</h3>

            </div>
            <div class="card-body">
                <form role="form" action="{{ Route('feedback.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter name" required>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" class="form-control" name="description" placeholder="Enter Description" required>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Designation</label>
                                <input type="text" class="form-control" name="designation" placeholder="Enter Designation">
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-outline-success float-right px-4">Submit</button>

                </form>
            </div>

        </div>
    </div>
@endsection

