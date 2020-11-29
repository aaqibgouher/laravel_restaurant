@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <div class="card" style="margin-top:100px;">
                    <div class="card-header" style="text-align:center;"><h3>iTALENT RESTAURANT</h3></div>
                    <div class="card-body">
                        <h4 style="text-align:center;">Welcome {{ Auth::user()->name }}<span class="pull-right">
                        <a class="btn  btn-outline-success" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> LOGOUT</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        </span></h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <a class="btn  btn-outline-success btn-block" href="{{ route('add_order') }}"><i class="fa fa-pencil"></i> ADD ORDER</a>
                            </div>
                            <div class="col-sm-6">
                                <a class="btn  btn-outline-success btn-block" href="{{ route('report') }}"><i class="fa fa-eye"></i> VIEW REPORT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>   
    </div>
@endsection