@extends('layout.base')
@section('sub-title', 'View Gifts')
@section('content')
<div class="content">
        <div class="title m-b-md">
            Gift.ng
        </div>
        @include('layout.nav')
        <p class="small-title">
            <b style="font-size:35px">&#187;</b> View Gifts
        </p>
        <p class="sub-content">
            @foreach($gifts as $data)
            <p class="items">
                <b>Name :</b> {{$data->name}}<br/>
                <b>Price :</b>$ {{$data->price}}<br/>
                <b>Description :</b> {{$data->description}}
            </p>
            @endforeach
        </p>
        <p>
            {{$gifts->links()}} 
        </p>
    </div>
@endsection