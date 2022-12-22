<h1>User Form</h1>
<!-- @if (count($errors) > 0)
   <div class = "alert alert-danger">
      <ul>
         @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
@endif -->
<form action="/data1" method="POST">
@csrf
  <input type="text" id="username" name="username" placeholder="enter your username"/><br>
  <span style="color: red">@error('username'){{$message}}@enderror</span><br>
  <input type="password" id="password" name="password" placeholder="enter your password"/><br>
  <span style="color: red">@error('password'){{$message}}@enderror</span><br>
  <button type="submit">Login</button>
</form>
