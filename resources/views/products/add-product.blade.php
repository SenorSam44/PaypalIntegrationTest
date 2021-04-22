@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add Product') }}</div>

                    <a href="{{route('home')}}" class="btn btn-info">Home</a>
                    @if(Session::has('success'))
                        <div class="bg-danger">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form class="form-group w-50" action="{{route('add-product')}}" method="POST">
                            @csrf
                            <input name="name" class="form-control m-4" type="text" placeholder="Name"/>
                            <input name="amount" class="form-control m-4" type="number" placeholder="Price"/>
                            <button type="submit" class="btn btn-primary mt-4"> Pay</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

