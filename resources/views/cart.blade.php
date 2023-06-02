@extends('layouts.app')

@section('content')
    <h1>Cart</h1>
    
    @if (count($tests) > 0 || count($packages) > 0)
        <ul>
            @foreach ($tests as $test)
                <li>{{ $test->name }}</li>
            @endforeach
            
            @foreach ($packages as $package)
                <li>{{ $package->name }}</li>
            @endforeach
        </ul>
        
        <form action="{{ route('cart.clear') }}" method="POST">
            @csrf
            <button type="submit">Clear Cart</button>
        </form>
    @else
        <p>Your cart is empty.</p>
    @endif
@endsection
