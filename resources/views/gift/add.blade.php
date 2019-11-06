@extends('layout.base')
@section('sub-title', 'Add Gift')
@section('content')
<div class="title m-b-md">
    Gift.ng
</div>
@include('layout.nav')
<p class="small-title">
    <b style="font-size:35px">&#187;</b> Add Gifts
</p>
<p style="width:25%;margin:0px auto;text-align:justify">
    <form action="{{route('gift.store')}}" method="POST">
        @include('gift.alerts')
        <form action="{{route('gift.store')}}" method="POST">
        {{ csrf_field() }}
        <p>
            <input type="text" name="name" placeholder="Name" required />
        </p>
        <p>
            <input type="number" name="price" placeholder="Price" required />
        </p>
        <p>
            <textarea cols="7" name="description" placeholder="Description" required></textarea>
        </p>
        <p>
            <button>SUBMIT</button>
        </p>
    </form>
</p>
@endsection