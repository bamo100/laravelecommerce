<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />

      <style>
        .center{
            margin: auto;
            width: 70%;
            padding: 30px;
            text-align: center;
        }
        table,th,td{
            border: 1px solid black;
        }
        .th_deg{
            padding: 10px;
            background-color: skyblue;
            font-size: 20px;
            font-weight: bold;
        }
      </style>
   </head>
   <body>
         <!-- header section strats -->
          @include('home.header')
         <!-- end header section -->
         <div class="center">
            <table>
                <tr>
                    <td class="th_deg"> Product Title</td>
                    <td class="th_deg">Quantity</td>
                    <td class="th_deg">Price</td>
                    <td class="th_deg">Payment Status</td>
                    <td class="th_deg">Delievery Status</td>
                    <td class="th_deg">Iamge</td>
                    <td class="th_deg">Cancel Order</td>
                </tr>
               
                @foreach ($order as $order)       
                <tr>
                    <td>{{ $order->product_title }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->price }}</td>
                    <td>{{ $order->payment_status }}</td>
                    <td>{{ $order->delievery_status }}</td>
                    <td>
                        <img src="product/{{ $order->image }}" alt="" width="90" height="90">
                    </td>
                    <td>
                        @if ($order->delievery_status == 'processing')
                        <a onClick="return onfirm('Are you sure you want to cancel this order')" href="{{ url('cancel_order', $order->id) }}" class="btn btn-danger">Cancel Order</a>
                        @else
                          <a style="color:blue;" >Not Allowed</a>
                        @endif
                    </td>

                </tr>
                @endforeach
            </table>
         </div>
    

    
      <!-- footer start -->
        @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>