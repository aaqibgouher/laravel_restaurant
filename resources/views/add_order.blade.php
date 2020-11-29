@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <div class="card mt-5">
                <div class="card-header" style="text-align:center;"><h3><a style="color:black;" href="{{ route('home') }}">iTALENT RESTAURANT</a></h3></div>
                <div class="card-body">
                    <h4>ADD ORDER</h4>
                    @if($message)
                        <div class="alert alert-success">{{ $message }}</div>
                    @endif
                    @if($error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endif
                    <form method="post" action="{{ route('add_order') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <select class="form-control" name="product_id" id="item_select" required>
                                <option value="">Select an Item</option>
                                @foreach($products as $product)
                                    <option value="{{ $product->id }}" data-price="{{ $product->price }}">{{ $product->product_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="number" min="1" class="form-control" name="quantity" value="1" id="quantity" required>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" class="form-control" name="price" value="0" id="price" disabled required>
                        </div>
                        <div class="form-group">
                            <label>Total</label>
                            <input type="number" class="form-control" name="total" value="0" id="total" disabled required>
                        </div>
                        <input type="submit" name="submit" class="btn btn-success btn-block" value="Add Order"/>
                    </form>
                </div>
            </div>  
        </div> 
    </div>
@endsection