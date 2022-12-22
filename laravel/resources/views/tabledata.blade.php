<table border='1'>
  <tr>
    <th>id</th>
    <th>email</th>
    <th>first_name</th>
    <th>last_name</th>
    <th>avatar</th>

  </tr>
  @foreach($tabledata as $a)
  <tr>
    <th>{{$a['id']}}</th>
    <th>{{$a['email']}}</th>
    <th>{{$a['first_name']}}</th>
    <th>{{$a['last_name']}}</th>
    <th><img src="{{$a['avatar']}}" alt=""/></th>

  </tr>
  @endforeach
</table>