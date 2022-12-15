<!-- <h1>this is About Us for {{$name}}</h1> -->

<!-- @if($name=='kens')
<h2> Hyy, {{$name}} </h2>
@elseif($name=='abc')
<h2> Hyy, {{$name}} </h2>
@else
<h2> Hyy, unkown </h2>
@endif

@for($i=0; $i<10; $i++)
<h4>{{$i}}</h4>
@endfor -->

@foreach ($name as $n)
<h4>{{$n}}</h4>
@endforeach