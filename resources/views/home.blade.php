@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
    @if (session()->has('success'))
<div class="alert alert-success">
    @if(is_array(session('success')))
       
            @foreach (session('success') as $message)
                {{ $message }}
            @endforeach
        
    @else
        {{ session('success') }}
    @endif
</div>
@endif
        <div class="col-md-12">
            
                <h1>{{ __('List of Products') }}</h1>
                    <div class="table-responsive">          
                        <table class="table">
                            <thead>
                            <tr>
                                <th>S.no</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Buy</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1; ?>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{$i++ }}</td>
                                <td>{{$product->name }}</td>
                                <td>{{$product->price }}</td>
                                <td>{{$product->description }}</td>
                                <td> <a href="{{url('checkout/'.$product->id.'/')}}" class="btn btn-primary active">Buy Now</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                </div>      
            
        </div>
    </div>
</div>
@endsection
