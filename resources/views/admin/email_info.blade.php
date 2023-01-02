<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public" />
     @include('admin.css')
     <style>
        label{
            display: inline-block;
            width: 200px;
            font-size: 15px;
            font-weight: bold;
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
                <h1 style="text-align: center; font-size:25px;">Send Email to {{ $order->email }}</h1>

                <form 
                action = {{ url('send_user_email',$order->id) }} method="POST">
                    @csrf
                    <div style="padding-left:35%; padding-top:30px">
                        <label for="">Email Greeting:</label>
                        <input style="color:black;" type="text" name="greeting">
                    </div>

                    <div style="padding-left:35%; padding-top:30px">
                        <label for="">Email FirstLine:</label>
                        <input style="color:black;" type="text" name="firstline">
                    </div>

                    <div style="padding-left:35%; padding-top:30px">
                        <label for="">Email Body:</label>
                        <input style="color:black;" type="text" name="body">
                    </div>

                    <div style="padding-left:35%; padding-top:30px">
                        <label for="">Email Button name:</label>
                        <input style="color:black;" type="text" name="button">
                    </div>

                    <div style="padding-left:35%; padding-top:30px">
                        <label for="">Email Url:</label>
                        <input style="color:black;" type="text" name="url">
                    </div>

                    <div style="padding-left:35%; padding-top:30px">
                        <label for="">Email Last Line:</label>
                        <input style="color:black;" type="text" name="last line">
                    </div>

                    <div style="padding-left:35%; padding-top:30px">
                        <input type="submit" value="Send Email" class="btn btn-primary">
                    </div>
                </form>
             
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