<!DOCTYPE html>
<html lang="en">
  <head>
     @include('admin.css')
     <style type="text/css">
       .center{
        margin: auto;
        width: 50%;
        border: 2px solid white;
        text-align:center;
        margin-top:40px;
       }
       .font{
        text-align: center;
        padding-top: 20px;
        font-size: 40px;
       }
       .img_size {
        width: 130px;
        height: 130px;
       }
       .th_color {
         background: skyblue
       }
       .th_deg{
         padding: 30px;
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
        <!-- partial -->
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
              <h2 class="font">All Products</h2>
                <table class="center">
                    <tr class="th_color">
                        <th class="th_deg">Product title</th>
                        <th class="th_deg">Description</th>
                        <th class="th_deg">Quantity</th>
                        <th class="th_deg">Category</th>
                        <th class="th_deg">Price</th>
                        <th class="th_deg">Discount Price</th>
                        <th class="th_deg">Product Image</th>
                        <th class="th_deg">Delete</th>
                        <th class="th_deg">Update</th>
                    </tr>
                   @foreach ($product as $prod)
                    <tr>
                        <td>{{ $prod->title }}</td>
                        <td>{{ $prod->description }}</td>
                        <td>{{ $prod->quantity }}</td>
                        <td>{{ $prod->category }}</td>
                        <td>{{ $prod->price }}</td>
                        <td>{{ $prod->discount_price }}</td>
                        <td>
                           <img class="img_size" src="/product/{{ $prod->image }}" />
                        </td>
                        <td>
                            <a class="btn btn-danger" 
                            href='{{ url('delete_product',$prod->id) }}'
                            onClick="return confirm('Are you sure you want to perform this action')">Delete</a>
                        </td>
                        <td>
                           <a class="btn btn-success"
                            href="{{ url('/update_product', $prod->id) }}">Update</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div> 
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