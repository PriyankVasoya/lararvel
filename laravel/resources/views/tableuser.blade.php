<h1> Your Data </h1>

<table border="1">
<tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>age</th>
    <th>Action</th>

  </tr>
  @foreach($alldata as $udata)
  <tr>
    <td>{{$udata['id']}}</td>
    <td>{{$udata['name']}}</td>
    <td>{{$udata['email']}}</td>
    <td>{{$udata['age']}}</td>
    <td><a href={{url('delete/'.$udata['id'])}}>delete</a>
    <a href={{url('edit1/'.$udata['id'])}}>edit</a></td>
  </tr>
  @endforeach
</table>
<br><br>
<div>
<a href="/getuser">add user</a>
</div>
