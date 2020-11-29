@extends('layout.master')

@section('content')
    <div class="container">
        <div class="card" style="margin-top:100px;">
            <div class="card-header" style="text-align:center;"><h3>iTALENT RESTAURANT</h3><span><a href="{{ route('home') }}" class="btn btn-outline-success pull-right"><i class="fa fa-angle-double-left"></i></a></span></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                    {!! $date_wise_sales->html() !!}
                    </div>
                    <div class="col-sm-6">
                    {!! $product_by_quantity->html() !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 offset-sm-3">
                        {!! $product_wise_sale->html() !!}
                    </div>
                </div>
                
                
            </div>

        </div>   
    </div>
@endsection
{!! Charts::scripts() !!}
{!! $date_wise_sales->script() !!}
{!! $product_by_quantity->script() !!}
{!! $product_wise_sale->script() !!}