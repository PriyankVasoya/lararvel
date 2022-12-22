<h1>Add user data form</h1>
<form action="/getuser1" method="POST">
@csrf
  <input type="text" id="name" name="name" placeholder="enter your name"/><br><br>
  <!-- <span style="color: red">@error('username'){{$message}}@enderror</span><br> -->
  <input type="email" id="email" name="email" placeholder="enter your email"/><br><br>

  <input type="number" id="age" name="age" placeholder="enter your age"/><br><br>
  <!-- <span style="color: red">@error('password'){{$message}}@enderror</span><br> -->
  <button type="submit">submit</button>
</form>
