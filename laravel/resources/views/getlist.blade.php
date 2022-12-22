<h1> Your Data </h1>
<table border="1">
<tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>age</th>

  </tr>
  @foreach($userdata as $udata)
  <tr>
  <td>{{$udata['id']}}</td>
    <td>{{$udata['name']}}</td>
    <td>{{$udata['email']}}</td>
    <td>{{$udata['age']}}</td>

  </tr>
  @endforeach
</table>

<div>
    {{$userdata->links()}}
</div>

<style>
    .w-5{
        display: none;
    }
</style>
