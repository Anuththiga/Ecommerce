<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
              <form action="{{url('search')}}" method="get" class="form-inline" style="float: right; padding: 20px;">
              @csrf
                <input class="form-control" style="margin-right: 10px;" type="search" name="search" placeholder="Search">
                <input class="btn btn-success" type="submit" value="search">
              </form>
            </div>
          </div>
          
          @foreach ($data as $product)
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img height="300" width="150" src="/productimage/{{$product->image}}" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>{{$product->product_title}}</h4></a>
                <h6>{{$product->price}}</h6>
                <p>{{$product->description}}</p>

                <form action="{{url('/add-cart', $product->id)}}" method="POST">
                  @csrf
                  <input class="form-control" type="number" style="width:90px;" value="1" min="1" name="quantity">
                  <br>
                  <input class="btn btn-primary" type="submit" value="Add Cart">
                </form>

              </div>
            </div>
          </div>  
          @endforeach 

          @if(method_exists($data, 'links'))
          <div class="d-flex justify-content-center">
            {!! $data->links() !!}
          </div>
          @endif
          
        </div>
      </div>
    </div>