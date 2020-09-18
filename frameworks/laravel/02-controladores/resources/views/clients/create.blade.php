<h3>New Client</h3>
<form action="{{ route('clients.store') }}" method="POST">
  @csrf
  <input type="text" name="name">
  <input type="submit" value="Create">  
</form>