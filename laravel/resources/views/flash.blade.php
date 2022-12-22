<h1>Flash Form</h1>
@if(session('email'))
<h3>data saved for {{session('email')}}</h3>
@endif
<form action="/flashdata" method="POST">
@csrf
  <input type="text" id="username" name="username" placeholder="enter your username"/><br>
  <!-- <span style="color: red">@error('username'){{$message}}@enderror</span><br> -->
  <input type="email" id="email" name="email" placeholder="enter your email"/><br>

  <input type="password" id="password" name="password" placeholder="enter your password"/><br>
  <!-- <span style="color: red">@error('password'){{$message}}@enderror</span><br> -->
  <button type="submit">Login</button>
</form>
