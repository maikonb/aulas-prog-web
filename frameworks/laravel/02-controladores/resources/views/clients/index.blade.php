<h3>Clients:</h3>

<ul>
@foreach($clients as $c) 
  <li>
    {{ $c['id'] }} | {{ $c['name'] }}
  </li>
@endforeach
</ul>