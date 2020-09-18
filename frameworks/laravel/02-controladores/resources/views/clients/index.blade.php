<h3>Clients:</h3>

<a href="{{ route('clients.create') }}">NEW</a>

<ul>
@foreach($clients as $c) 
  <li>
    {{ $c['id'] }} | {{ $c['name'] }} |
    <a href="{{ route('clients.show', $c['id']) }}">Info</a> |
    <a href="{{ route('clients.edit', $c['id']) }}">Edit</a>
  </li>
@endforeach
</ul>