<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
<h1>This is Header Component</h1>
<h3>Hello {{$name}} </h3>
<h4>Fruits are:</h4>
<ul>
@foreach($fruits as $fruit)
<li>{{$fruit}}</li>
@endforeach
</ul>
    
</div>