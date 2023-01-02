<!DOCTYPE html>
<html lang="en">
  <head>
     @include('admin.css')
     <style>
        .title_deg{
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            padding-bottom: 40px;
        }
        .table_deg{
            border:2px solid white;
            width: 100%;
            margin: auto;
           
            text-align: center;
        }
        .th_deg{
            background-color: skyblue;
        }
        .img_size{
            width: 110px;
            height: 100px;
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
                <h1 class="title_deg">All Orders</h1>

                <div style="padding-left:40px; padding-bottom:30px;">
                    <form action="{{ url('search') }}" method="get">
                        @csrf
                        <input style="color:black;" type="text" name="search" placeholder="Search for Order">
                        <input type="submit" value="Search" class="btn btn-outline-primary">
                    </form>
                </div>
                <table class="table_deg">
                    <tr class="th_deg">
                        <th padding="10px">Name</th>
                        <th padding="10px">Email</th>
                        <th padding="10px">Address</th>
                        <th padding="10px">Phone</th>
                        <th padding="10px">Product title</th>
                        <th padding="10px">Quantity</th>
                        <th padding="10px">Price</th>
                        <th padding="10px">Payment Status</th>
                        <th padding="10px">Delivery Status</th>
                        <th padding="10px">Image</th>
                        <th padding="10px">Delieverd</th>
                        <th padding="10px">Print PDF</th>
                        <th padding="10px">Send Email</th>
                    </tr>
                    @forelse ($order as $ord)
                    <tr>
                        <td>{{ $ord->name }}</td>
                        <td>{{ $ord->email }}</td>
                        <td>{{ $ord->address }}</td>
                        <td>{{ $ord->phone }}</td>
                        <td>{{ $ord->product_title }}</td>
                        <td>{{ $ord->quantity }}</td>
                        <td>{{ $ord->price }}</td>
                        <td>{{ $ord->payment_status }}</td>
                        <td>{{ $ord->delievery_status }}</td>
                        <td>
                            <img class="img_size" src="/product/{{ $ord->image }}" alt="">
                        </td>
                        <td>
                            @if ($ord->delievery_status=='processing')
                            <a onclick="return confirm ('Are you sure this product is delieverd')" href="{{ url('delievered', $ord->id) }}" class="btn btn-primary">Delieverd</a>
                            @else
                            <p style="color:green;">Delieverd</p>
                            @endif
                            
                        </td>
                        <td>
                            <a href="{{ url('print_pdf', $ord->id) }}" class="btn btn-secondary">Print PDF</a>
                        </td>
                        <td>
                            <a href="{{ url('send_email', $ord->id ) }}" class='btn btn-info'>Send Email</a>
                        </td>
                    </tr>
                    @empty
                      <tr>
                        <td colspan="16">
                            No Data Found
                        </td>
                      </tr>
                    @endforelse
                </table>
            </div>
        </div>
    <!-- plugins:js -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>