@extends('layouts.MasterPage')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10" style="margin-left: -15px;">
            <div class="card" >
                <div class="card-header" >Certificate Information Registration</div>
                <div style="margin-top: 10px; ">
                    <form method="POST" action="{{url('/cfv')}}">
                        {{csrf_field()}}
                        
                        @include('partials.error')
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Certificate Serial Number / Student ID</label>
                            <div class="col-md-6">
                                <input id="id" type="text" class="form-control" name="id"  autofocus required="" placeholder="Insert Certificate Serial Number / Student ID">
                                
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"></label>
                            <div class="col-md-6">
                                
                                <button type="submit" class="btn btn-primary form-control">
                                Search
                                </button>
                                
                            </div>
                        </div>
                        
                        @foreach($data as $data)
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Certificate Serial Number</label>
                            <div class="col-md-6">
                                <input id="certificate_no" type="text" readonly class="form-control-plaintext" name="certificate_no"
                                value="{{$data->certificate_no}}" >
                                
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Student ID </label>
                            <div class="col-md-6">
                                <input id="std_id" type="text" readonly class="form-control-plaintext" name="std_id"  value="{{$data->std_id}}" >
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Student Name</label>
                            <div class="col-md-6">
                                <input id="std_name" type="text" readonly class="form-control-plaintext" name="std_name"  value="{{$data->std_name}}" >
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" required="">CGPA</label>
                            <div class="col-md-6">
                                <input id="cgpa" type="text" readonly class="form-control-plaintext" name="cgpa"  value="{{$data->cgpa}}" >
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Program</label>
                            <div class="col-md-6">
                                <input id="program" type="text" readonly class="form-control-plaintext" name="program"  value="{{$data->program}}" >
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Total Credit</label>
                            <div class="col-md-6">
                                <input id="total_credit" type="text"readonly class="form-control-plaintext" name="total_credit"  value="{{$data->total_credit}}" >
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Certificate Issued Date</label>
                            <div class="col-md-6">
                                <input id="issue_date" type="text" readonly class="form-control-plaintext" name="issue_date"  value="{{$data->issue_date}}" >
                                
                            </div>
                        </div>
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection