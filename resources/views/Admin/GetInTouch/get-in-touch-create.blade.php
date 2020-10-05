
@extends('Admin.layouts.base')

@section('content')
    <div class="col-12">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">GetInTouch</h3>

            </div>
            <div class="card-body">
                <form role="form" action="{{ Route('get-in-touch.store') }}" method="post">
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
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Mobile Number</label>
                                <input type="number" class="form-control" name="mobile_number" placeholder="Enter mobile number" required>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Subject</label>
                                <textarea  class="form-control" name="subject" placeholder="Enter subject" required></textarea>
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-outline-success float-right px-4">Submit</button>

                </form>
            </div>

        </div>
    </div>
@endsection
