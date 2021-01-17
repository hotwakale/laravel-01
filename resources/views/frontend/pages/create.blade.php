@extends('frontend.layouts.template')

@section('content')
    <div class="jumbotron">
        <h1 class="display-3">เพิ่มสินค้า</h1>
        <p class="lead">Jumbo helper text</p>
        <hr class="my-2">
        <div class="container">
        <div class="form-group">
            <form action="{{route('products.store')}}" method="post">
                @csrf
                <div>
                    <label for="name">ชื่อสินค้า</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>

                <div>
                    <label for="code">รหัสสินค้า</label>
                    <input type="text" name="code" id="code" class="form-control">
                </div>

                <div>
                    <label for="detail">รายละเอียด</label>
                    <input type="text" name="detail" id="detail" class="form-control">
                </div>
                <input type="hidden" name="user_id" value="1">
                <button type="submit" class="btn btn-success mt-4">Save</button>
            </form>
        </div>
        </div>
    </div>    
@endsection