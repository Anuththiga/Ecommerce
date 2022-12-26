<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- partial:partials/_header.html -->
   @include('admin.partials._header')
    <style type="text/css">
      .product-title {
        padding-top: 25px;
        font-size: 25px;
        
      }
    </style>
  </head>
  <body>
  <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.partials._sidebar')
      <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        @include('admin.partials._navbar')
        <div class="container-fluid page-body-wrapper">

          <div class="container" align= "center"> 
            <h1 class="product-title">Add Product</h1>
            @if(session()->has('message'))
            <div class="alert alert-success">
              {{session()->get('message')}}
              <button type="button" class="btn-close" data-dismiss="alert"> X </button>
            </div>

            @endif
              <div class="card" style="width: 700px; margin-top: 20px;">
                <div class="card-body">
                  <form action="{{url('/uploadproduct')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">
                      <label class="col-sm-4 col-form-label">Product Title</label>
                      <div class="col-sm-8">
                        <input type="text" name="productTitle" class="form-control-plaintext" placeholder="Product Title">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-4 col-form-label">Price</label>
                      <div class="col-sm-8">
                        <input type="text" name="price" class="form-control-plaintext" placeholder="Price">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-4 col-form-label">Description</label>
                      <div class="col-sm-8">
                        <input type="text" name="description" class="form-control-plaintext" placeholder="Description">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-4 col-form-label">Quantity</label>
                      <div class="col-sm-8">
                        <input type="text" name="quantity"  class="form-control-plaintext"  placeholder="Quantity">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-4 col-form-label">Image</label>
                        <div class="col-sm-8">
                          <input type="file" name="file">
                        </div>
                    </div>
                    <div class="mb-3 row">
                      <div class="col-sm-12">
                        <input class="btn btn-primary" type="submit" value="Submit">
                      </div>
                    </div>
                  </form>
                </div>  
              </div>
          
          
          
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>