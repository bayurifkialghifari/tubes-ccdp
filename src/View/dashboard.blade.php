@extends('layouts.app')
@section('title')
    Dashboard
@endsection
@section('content')
    <h1>Dashboard</h1>
    <div class="container mt-5">
        <h5>Initial State</h5>
        <p>{{ $orderContext->toString() }}</p>
        <h5>State Change 1</h5>
        <p>{{ $orderContext->proceedToNext()->toString() }}</p>
        <h5>State Change 2</h5>
        <p>{{ $orderContext->proceedToNext()->toString() }}</p>
    </div>
@endsection