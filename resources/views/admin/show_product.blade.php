<!DOCTYPE html>
<html lang="en">
  <head>
    
  @include('admin.css')
  <style type="text/css">
        .center
        {
            margin:auto;
            width: 50%;
            border: 2px solid white;
            text-align:center;
            margin-top:40px;
            
        }
        .font_size
        {
            text-align:center;
            font-size: 40px;
            padding-top:20px;
        }
        .img_size
        {
            width:150px;
            height:150px;
        }
        .th_color
        {
            background:skyblue;
        }
        .th_dag
        {
            padding:30px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
            @if (session()->has('message'))
          <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
              {{session()->get('message')}}
          </div>
          @endif



                <h2 class="font_size">All Products</h2>

            <table class="center">
                <tr class="th_color">
                    <th class="th_dag">Product title</th>
                    <th class="th_dag">Description</th>
                    <th class="th_dag">Quantity</th>
                    <th class="th_dag">Catagory</th>
                    <th class="th_dag">Price</th>
                    <th class="th_dag">Discount Price</th>
                    <th class="th_dag">Product Image </th>
                    <th class="th_dag">Delete</th>
                    <th class="th_dag">Edit </th>
                </tr>
                @foreach($product as $product)
                <tr>
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->catagory}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->discount_price}}</td>
                    
                    <td>
                        <img class="img_size" src="/product/{{$product->image}}">
                    </td>
                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Are You Sure to Delete This ')" href="{{url('delete_product',$product->id)}}">Delete</a>
                    </td>
                    <td>
                    <a class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</a>
                    </td>
                </tr>

                @endforeach

            </table>
            </div> 
        </div>  
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
