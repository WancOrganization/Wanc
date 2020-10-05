@extends('Admin.layouts.base')

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{$feedback['name']}}</h3>

            </div>
            <div class="card-body">
               <div class="row">
                   <div class="col-6">
                       <h6>Name</h6>
                   </div>
                   <div class="col-6">
                       <span>{{$feedback['name']}}</span>
                   </div>
               </div>


                <div class="row mt-3">
                    <div class="col-6">
                        <h6>Designation</h6>
                    </div>
                    <div class="col-6">
                        <span>{{$feedback['designation']}}</span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <h6>Description</h6>
                    </div>
                    <div class="col-6">
                        <span>{{$feedback['description']}}</span>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-6">
                        <h6>Date</h6>
                    </div>
                    <div class="col-6">
                        <span> {{date('M-d-Y',strtotime($feedback['created_at']))}}</span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <h6>Time</h6>
                    </div>
                    <div class="col-6">
                        <span> {{date('h:i A',strtotime($feedback['created_at']))}}</span>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
