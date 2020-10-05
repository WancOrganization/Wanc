@extends('Admin.layouts.base')

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{$getInTouch['name']}}</h3>

            </div>
            <div class="card-body">
               <div class="row">
                   <div class="col-6">
                       <h6>Name</h6>
                   </div>
                   <div class="col-6">
                       <span>{{$getInTouch['name']}}</span>
                   </div>
               </div>


                <div class="row mt-3">
                    <div class="col-6">
                        <h6>Mobile Number</h6>
                    </div>
                    <div class="col-6">
                        <span>{{$getInTouch['mobile_number']}}</span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <h6>Subject</h6>
                    </div>
                    <div class="col-6">
                        <span>{{$getInTouch['subject']}}</span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <h6>Message</h6>
                    </div>
                    <div class="col-6">
                        <span>{{$getInTouch['message']}}</span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <h6>Date</h6>
                    </div>
                    <div class="col-6">
                        <span> {{date('M-d-Y',strtotime($getInTouch['created_at']))}}</span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <h6>Time</h6>
                    </div>
                    <div class="col-6">
                        <span> {{date('h:i A',strtotime($getInTouch['created_at']))}}</span>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
