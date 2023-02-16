@extends('layouts.MasterPage')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10" style="margin-left: -15px;">
            <div class="card">
                <div class="card-header">Certificate Information Registration</div>
                <div style="margin-top: 10px">
                    <form method="POST" action="{{url('/cfe')}}">
                        {{csrf_field()}}
                        
                        @include('partials.error')
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Certificate Serial Number</label>
                            <div class="col-md-6">
                                <input id="certificate_no" type="text" class="form-control" name="certificate_no"  autofocus required="">
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Student ID </label>
                            <div class="col-md-6">
                                <input id="std_id" type="text" class="form-control" name="std_id"  autofocus required="">
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Student Name</label>
                            <div class="col-md-6">
                                <input id="std_name" type="text" class="form-control" name="std_name"  autofocus required="">
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" required="">CGPA</label>
                            <div class="col-md-6">
                                <input id="cgpa" type="text" class="form-control" name="cgpa"  autofocus required="">
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Program</label>
                            <div class="col-md-6">
                                <input id="program" type="text" class="form-control" name="program"  autofocus required="">
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Total Credit</label>
                            <div class="col-md-6">
                                <input id="total_credit" type="text" class="form-control" name="total_credit"  autofocus required="">
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Certificate Issued Date</label>
                            <div class="col-md-6">
                                <input id="issue_date" type="date" class="form-control" name="issue_date"  autofocus required="">
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"></label>
                            <div class="col-md-6">
                                
                                <button type="submit" class="btn btn-primary form-control">
                                Submit
                                </button>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection