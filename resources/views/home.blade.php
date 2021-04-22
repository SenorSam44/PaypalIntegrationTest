@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Dashboard') }}
                    </div>
                    <a href="{{route('product.index')}}" class="btn btn-primary w-25 ">Add Product </a>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        products to buy
                        @foreach($products as $product)
                            <div class="mt-2 bg-light border d-flex justify-content-between">
                                <div>
                                    <div>Name: {{$product->name}}</div>
                                    <div>Amount: {{$product->amount}}</div>
                                </div>

                                <form action="{{route('create-payment')}}"  class="float-right" method="POST">
                                    @csrf
                                    <input type="hidden" name="name" value="{{$product->name}}"/>
                                    <input type="hidden" name="amount" value="{{$product->amount}}"/>

                                    <button type="submit" class="btn btn-primary"> Pay</button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

