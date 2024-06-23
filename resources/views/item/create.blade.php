@extends('layouts.main')
@section('content')
    <h1>
        Item Create Form
    </h1>
    <hr>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <form action="{{ route('item.store') }}" method="post" autocomplete="off" id="create-form">

        @csrf

        <input type="text" name="name" placeholder="Item Name" class="form-control">

        <br>
        <input type="text" name="qty" placeholder="Qty" class="form-control">

        <br>
        <input type="text" name="price" placeholder="Price" class="form-control">

        <br>
        <input type="submit" value="Save" class="btn btn-primary">
    </form>
@endsection

@section('js')
    {!! JsValidator::formRequest('App\Http\Requests\StoreItem') !!}
@endsection
