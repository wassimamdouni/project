<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
    .div_center {
        text-align: center;
        padding-top: 40px;
    }
    .h2_font {
        font-size: 40px;
        padding-bottom: 40px;
    }
    .input_color {
        color: black;
    }
    .center {
        margin: auto;
        width: 50%;
        text-align: center;
        margin-top: 30px;
        border: 3px solid white;
        border-collapse: collapse;
    }
    /* Changer la couleur des en-têtes de la table */
    .center th {
        color: black; /* Couleur du texte en noir */
        border: 1px solid white;
        padding: 10px;
    }
</style>

    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.sidebar')
      @include('admin.header')
      <div class="main-panel">
        <div class="content-wrapper">
          @if (session()->has('message'))
          <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
              {{session()->get('message')}}
          </div>
          @endif

          <div class="div_center">
              <h2 class="h2_font">Add Category</h2>
              <form action="{{url('/add_catagory')}}" method="POST">
                  @csrf
                  <input class="input_color" type="text" name="catagory" placeholder="Write category name" required>
                  <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
              </form>
          </div>

          <table class="center" style="border-collapse: collapse; width: 50%;">
              <tr style="background-color: #f2f2f2;">
                  <th style="border: 1px solid white; padding: 10px;">Category Name</th>
                  <th style="border: 1px solid white; padding: 10px;">Action</th>
              </tr>
              @foreach($data as $catagory)
              <tr>
                  <td style="border: 1px solid white; padding: 10px;">{{$catagory->catagory_names}}</td>
                  <td style="border: 1px solid white; padding: 10px;">
                      <a onclick="return confirm('Are you Sure To Delete This')" class="btn btn-danger" href="{{ url('delete_catagory', $catagory->id) }}">Delete</a>
                  </td>
              </tr>
              @endforeach
          </table>
        </div>
      </div>
    </div>
    @include('admin.script')
  </body>
</html>
