@extends('layout.master')

@section('content')
    <div class="container">
        <div class="card" style="margin-top:100px;">
            <div class="card-header" style="text-align:center;"><h1>iTALENT RESTAURANT</h1></div>
            <div class="card-body">
                <h4 style="text-align:center;">Welcome {{ Auth::user()->name }}<span class="pull-right">
                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </span></h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <a class="btn btn-success btn-block"><i class="fa fa-pencil"></i> ADD ORDER</a>
                    </div>
                    <div class="col-sm-6">
                        <a class="btn btn-success btn-block"><i class="fa fa-eye"></i> VIEW REPORT</a>
                    </div>
                </div>
                
            </div>

        </div>   
    </div>
@endsection