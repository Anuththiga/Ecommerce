@extends('admin.main')

@section('content')
        <div class="container-fluid page-body-wrapper">

          <div class="container" align= "center"> 
            <h1 class="product-title" style="margin-top: 20px;">Update Product</h1>
            @if(session()->has('message'))
            <div class="alert alert-success">
              {{session()->get('message')}}
              <button type="button" class="close" data-bs-dismiss="alert"> X </button>
            </div>

            @endif
            <div class="card" style="width: 700px; margin-top: 20px;">
                <div class="card-body">
                  <form action="{{url('/updateproduct', $data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">
                      <label class="col-sm-4 col-form-label">Product Title</label>
                      <div class="col-sm-8">
                        <input type="text" name="productTitle" class="form-control-plaintext" value="{{$data->product_title}}">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-4 col-form-label">Price</label>
                      <div class="col-sm-8">
                        <input type="text" name="price" class="form-control-plaintext" value="{{$data->price}}">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-4 col-form-label">Description</label>
                      <div class="col-sm-8">
                        <input type="text" name="description" class="form-control-plaintext" value="{{$data->description}}">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-4 col-form-label">Quantity</label>
                      <div class="col-sm-8">
                        <input type="text" name="quantity"  class="form-control-plaintext"  value="{{$data->quantity}}">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-4 col-form-label">Old Image</label>
                      <div class="col-sm-8">
                        <img height="100" width="100" src="/productImage/{{$data->image}}">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-4 col-form-label">Change the Image</label>
                        <div class="col-sm-8">
                          <input type="file" name="file">
                        </div>
                    </div>
                    <div class="mb-3 row">
                      <div class="col-sm-12">
                        <input class="btn btn-primary" type="submit" value="Update">
                      </div>
                    </div>
                  </form>
                </div>  
              </div>
          </div>
        </div>
     @endsection
  
 