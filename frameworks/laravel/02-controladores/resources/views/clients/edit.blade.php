<h3>Edit Client</h3>

<form action="{{ route('clients.update', $client['id'] ) }}" method="POST">
  @csrf
  @method('PUT')
  <input type="text" name="name" value="{{ $client['name'] }}">
  <input type="submit" value="Update">  
</form>

<a href="{{ route('clients.index') }}">Go Back</a>