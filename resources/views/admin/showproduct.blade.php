
<!DOCTYPE html>
<html lang="en">
  <head>
 @include('admin.css')
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
      @include('admin.sidebar')
      <!-- partial navbar -->
      @include('admin.navbar')
         <!-- partial body-->


        <div style="padding-bottom:30px;" class="container-fluid page-body-wrapper">
            <div class="container" align="center">

                @if(session()->has('message'))

                <div class="alert alert-success">

                <button type="button" class="close" data-dismiss="alert"> X </button>

                {{session()->get('message')}}

                </div>

                @endif

                <table>
                    <tr style="background-color: gray;">
                        <td style="padding: 20px;">Title</td>
                        <td style="padding: 20px;">Description</td>
                        <td style="padding: 20px;">Quantity</td>
                        <td style="padding: 20px;">Price</td>
                        <td style="padding: 20px;">Image</td>
                        <td style="padding: 20px;">Update</td>
                        <td style="padding: 20px;">Delete</td>
                    </tr>

                    @foreach ($data as $productt )

                    <tr align="center"style="background-color:black;">
                        <td>{{$productt->title}}</td>
                        <td>{{$productt->description}}</td>
                        <td>{{$productt->quantity}}</td>
                        <td>{{$productt->price}}</td>
                        <td>
                            <img height="100px;" width="100px;" src="/productimage/{{$productt->image}}"
                        </td>

                        <td>
                            <a class="btn btn-primary" href="{{url('updateview',$productt->id)}}">Update</a>
                        </td>

                        <td>
                            <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{url('deleteproduct',$productt->id)}}">Delete</a>
                        </td>

                    </tr>
                    @endforeach
                </table>

            </div>
        </div>



         <!-- scripts  -->
        @include('admin.script')


  </body>
</html>
