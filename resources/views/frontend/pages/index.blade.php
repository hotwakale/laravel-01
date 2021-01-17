@extends('frontend.layouts.template')

@section('content')
    <div class="jumbotron">
        <h1 class="display-3">Product</h1>
        <p class="lead">Jumbo helper text</p>
        <hr class="my-2">
        <p>More info</p>
        <p class="lead">
            <a href="{{route('products.create')}}">
                <button type="submit" class="btn btn-primary">เพิ่มสินค้า</button>
            </a>
        </p>
    </div>    
    <div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>รหัสสินค้า</th>
                <th>ชื่อสินค้า</th>
                <th>รายละเอียด</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($produst_get as $item)
                <tr>
                    <td scope="row">{{$item->code}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->detail}}</td>
                </tr>
                @endforeach       
        </tbody>
    </table>
    </div>
@endsection