@extends('Admin.layouts.base')

@section('content')
    <div class="col-12">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">GetInTouch</h3>

            </div>
            <div class="card-body">
                <form role="form" action="{{ Route('get-in-touch.update',$getInTouch['id'])}}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{$getInTouch['name']}}" required>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-12">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Mobile Number</label>
                                <input type="text" class="form-control" name="mobile_number" value="{{$getInTouch['mobile_number']}}" required>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Subject</label>
                                <textarea  class="form-control" name="subject" placeholder="Enter subject" required>{{$getInTouch['subject']}}"</textarea>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Message</label>
                                <input type="text" class="form-control" name="message" value="{{$getInTouch['message']}}" required>
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-outline-success float-right px-4">Update</button>

                </form>
            </div>

        </div>
    </div>
@endsection

