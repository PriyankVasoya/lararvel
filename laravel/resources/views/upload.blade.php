<h1>Image</h1>
    <form action="/uploaded" method="POST" enctype="multipart/form-data" >
        @csrf
        <input type="file" name="file"><br><br>
        <button type="submit"> upload file</button> 
</fom>