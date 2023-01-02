<!DOCTYPE html>
<html lang="en">
  <head>
     @include('admin.css')
     <style>
        .div_center {
            text-align: center;
            padding-top: 40px;
        }
        .font_size{
            font-size: 40px;
            padding-bottom: 40px;
        }
        .text_color{
            color: black;
            padding-bottom:20px;
        }
        label{
            display: inline-block;
            width:200px;
        }
        .div_design{
            padding-bottom: 15px;
        }
     </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
           <div class="main-panel">
                <div class="content-wrapper"> 
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert"
                            aria-hidden="true">
                                X
                            </button>
                            {{session()->get('message') }}
                        </div>
                    @endif
                      <div class="div_center">
                         <h1 class="font_size">Add Product</h1>
                          <form action="{{ url('/add_product') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="div_design">
                                <label>Product Title</label>
                                <input type="text" name="title" class="text_color" placeholder="Product Title" required>
                            </div>

                            <div class="div_design">
                                <label>Product Description</label>
                                <input type="text" name="description" class="text_color" placeholder="Product Description" required>
                            </div>

                            <div class="div_design">
                                <label>Product Price</label>
                                <input type="number" name="price" class="text_color" placeholder="Product Price" required>
                            </div>

                            <div class="div_design">
                                <label>Discount Price</label>
                                <input type="number" name="disc_price" class="text_color" placeholder="Discount Price">
                            </div>

                            <div class="div_design">
                                <label>Product Quantity</label>
                                <input type="number" name="quantity" min="0" class="text_color" placeholder="Product Quantity" required>
                            </div>

                            <div class="div_design">
                                <label>Product Category</label>
                                <select class="text_color" name="category" required>
                                    <option value="" selected>Add Category here</option>
                                    @foreach ($category as $cat)
                                       <option>{{ $cat->Category_name }}</option> 
                                    @endforeach
                                    
                                </select>
                            </div>

                            <div class="div_design">
                                <label>Product Image Here:</label>
                                <input type="file" name="image" id="" required>
                            </div>

                            <div class="div_design">
                                <input type="submit" value="Add Product" class="btn btn-primary">
                            </div>
                          </form>   
                      </div>
                </div>
            </div>
        <!-- partial -->
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>