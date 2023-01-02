<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <style type="text/css">
        .div_center{
           text-align: center;
           padding-top: 40px;
        }

        .h2font{
            font-size: 40px;
            padding-bottom:40px;
        }

        .input_color {
            color: black;
        }

        .centre {
            margin: auto;
            width:50%;
            text-align: center;
            margin-top: 30px;
            border: 1px solid white;
        }
    </style>
</head>
<body>
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
                    <div class="div_center">
                        <h2 class="h2font">Add Category</h2>
                        <form action="{{ url('/add_category') }}" method="POST">
                            @csrf
                            <input type="text" class="input_color" name="cat_name" id="" placeholder="Category name">

                            <input type="submit" value="Add Category" name="submit" class="btn btn-primary">
                        </form>
                    </div>

                    <table class="centre">
                        <tr>
                            <td>Category Name</td>
                            <td>Action</td>
                        </tr>
                        @foreach ($data as $datum)
                        <tr>    
                            <td>{{ $datum->Category_name }}</td>
                            <td>
                                <a onClick="return confirm('Are you sure you want to Delete')" class="btn btn-danger" href="{{ url('delete_category', $datum->id) }}">Delete</a>
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
</body>
</html>