<style>
.search-container {
    position: relative;
    width: 500px;
}

.search-container input[type="text"] {
    width: 100%;
    padding: 10px 40px; /* Espace pour l'icône */
    border-radius: 25px; /* Bord arrondi */
    border: 2px solid #ccc;
    outline: none;
}

.search-container i {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #999;
}


</style>

<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
               <br>
               <div class="search-container">
                 
                  <form action="{{ url('product_search') }}" method="GET">
                     @csrf
                     <input type="text" name="search" placeholder="Search for something">
                     <input type="submit" value="Search">
                  </form>
               </div>

               

            </div>
            <div class="row">
               @foreach($product as $products)
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('product_details',$products->id)}}" class="option1">
                           Product Details
                           </a>
                           <form action="{{url('add_cart',$products->id)}}" method="Post">
                              @csrf
                           <div class="row">
                              <div class="col-md-4">
                              <input type="number" name="quantity" value="1" min="1" style="width: 100px">
                              </div>
                              <div class="col-md-4">
                              <input type="submit" value="Add To Cart">
                              </div>
                              
                           </div>
                           </form>
                           
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="product/{{$products->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{$products->title}}
                        </h5>
                        @if($products->discount_price!=null)


                        <h6 style="color: red">
                           Discount price
                           <br>
                           {{$products->discount_price}}DT
                        </h6>

                        <h6 style="text-decoration: line-through;color: blue">
                           Price
                           <br>
                           {{$products->price}}DT
                        </h6>
                        @else

                        <h6 style="color: blue">
                           {{$products->price}}DT
                        </h6>

                        @endif


                       
                     </div>
                  </div>
               </div>
               
            @endforeach
            <span style="padding-top:20px;">

               {!! $product->withQueryString()->links('pagination::bootstrap-4') !!}
            </span>


         </div>
      </section>