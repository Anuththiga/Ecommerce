@extends('admin.main')

@section('content')
        <div class="container-fluid page-body-wrapper">

          <div class="container" align= "center"> 
            <h1 class="product-title" style="margin-top: 20px;">View Product</h1>
            @if(session()->has('message'))
            <div class="alert alert-success">
              {{session()->get('message')}}
              <button type="button" class="close" data-bs-dismiss="alert"> X </button>
            </div>
            @endif
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Product Name</th>
                  <th scope="col">Price</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Image</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $product)
                  <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->product_title}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>
                      <img  class="rounded float-start" style="width: 50px; height: 50px" src="productImage/{{$product->image}}">
                    </td>
                    <td>
                    <a class="btn btn-primary" href="{{url('update-product',$product->id)}}">Update</a>
                    <a class="btn btn-danger" href="{{url('delete-product',$product->id)}}">Delete</a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
     @endsection
  
 