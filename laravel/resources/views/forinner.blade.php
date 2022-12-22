<h1> for innner</h1>

@include('innerpage')

@foreach($abc as $a)
<h3>{{$a}}</h3>
@endforeach

<script>
    var data = @json($abc);
    console.log(data[0]);
</script>