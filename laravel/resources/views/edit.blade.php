<h1>Update Form</h1>
<form action="/edit1" method="POST">
@csrf
<input type="hidden" id="id" name="id" value="{{$data['id']}}" ><br>

  <input type="text" id="name" name="name" value="{{$data['name']}}" placeholder="enter your name"/><br>
  <!-- <span style="color: red">@error('username'){{$message}}@enderror</span><br> -->
  <input type="email" id="email" name="email" value="{{$data['email']}}" placeholder="enter your email"/><br>

  <input type="number" id="age" name="age" value="{{$data['age']}}" placeholder="enter your age"/><br>
  <!-- <span style="color: red">@error('password'){{$message}}@enderror</span><br> -->
  <button type="submit">update data</button>
</form>
