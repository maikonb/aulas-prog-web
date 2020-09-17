<h1>[controllerParams] {{ $title }}</h1>
<ol>
@foreach($products as $p)    
  <li>
      {{ $p['name'] }} 
      <a href="{{ route('productsInfo', $loop->index) }}"> [details] </a>
      @if (isset($selected) && $selected['id'] == $p['id'])
      <<<<<<<<<<<<<<
      @endif
  </li>
@endforeach 
</ol>

@if(isset($selected))
<hr>

<h2>Product Detail</h2>

<h3>ID: {{ $selected['id'] }}</h3>
<h3>Name: {{  $selected['name'] }}</h3>
<h3>Description: {{  $selected['description']  }}</h3>

@endif
