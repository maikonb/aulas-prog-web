<h3>Clients:</h3>

<a href="{{ route('clients.create') }}">NEW</a>

<ul>
@foreach($clients as $c) 
  <li>
    {{ $c['id'] }} | {{ $c['name'] }}
  </li>
@endforeach
</ul>