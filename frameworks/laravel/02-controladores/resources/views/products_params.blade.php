<h1>[viewParams] {{ $title }}</h1>
<ul>
  @foreach($products as $p)    
      <li>{{ $p['id'] }} - {{ $p['name'] }}</li>
  @endforeach
</ul>