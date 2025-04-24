@extends('Layouts.master')
@section('title', 'Add Order')
@section('content')
    <div class="container">
        <p><b> Add New Order </b></p>
        <form class="row g-3" method="POST" action="/orders/create">
            @csrf

            <div class="col-md-4">
                <label class="form-label">Product Name:</label>
                <input type="text" class="form-control" placeholder="Enter Product Name" name="product_name" required>
            </div>

            <div class="col-md-4">
                <label class="form-label">Price:</label>
                <input type="text" class="form-control" placeholder="Enter Price" name="price" required>
            </div>

            <div class="col-md-4">
                <label class="form-label">Payment Methods:</label>
                <select name="payment_methods" class="form-control" required>
                    <option value="" selected>Select Payment Methods...</option>
                    @foreach ($paymentMethods as $title)
                        <option value="{{ $title }}">- {{ $title }} </option>
                    @endforeach
                </select>
            </div>

            <div class="col-12" style="text-align: center">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>

        </form>
    </div>
@stop()
