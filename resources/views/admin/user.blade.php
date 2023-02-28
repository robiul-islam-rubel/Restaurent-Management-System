<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">

    @include("admin.navbar")

    <div style="position:relative">
        <table border="1" cellspacing="0" bgcolor="grey">
            <tr>
                <th style="padding:30px">Name</th>
                <th style="padding:30px">Email</th>
                <th style="padding:30px">Action</th>
            </tr>
            @foreach ($data as $data)
            <tr align="center">
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                @if($data->usertype=="0")
                <td><a href="{{url('/deleteuser',$data->id)}}">Delete</td>
                @else
                <td>Not Allowed</td>
                @endif
            </tr>
            @endforeach
        </table>
    </div>
    </div>
   @include("admin.adminscript")
  </body>
</html>