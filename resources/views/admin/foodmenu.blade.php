<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
    @include("admin.navbar")
    <div style="align:center">
        <form action="{{url('/uploadfood')}}" method="POST" enctype="multipart/form-data" >
            <div>
                <label>Title</label>
                <input type="text" name="title" placeholder="Write a title" required="">
            </div>
            <div>
                <label>Price</label>
                <input type="num" name="price" placeholder="Write a price" required="">
            </div>
            <div>
                <label>Image</label>
                <input type="file" name="image" >
            </div>
            <div>
                <label>Description</label>
                <input type="text" name="desc" placeholder="Write a desc" required="">
            </div>
            <div>
                
                <input type="submit" >
            </div>

        </form>
    </div>
   @include("admin.adminscript")
  </body>
</html>