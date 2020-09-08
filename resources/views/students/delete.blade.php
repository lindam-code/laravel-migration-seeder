<h2>Benvenuto nella pagina delete</h2>
ciao
<form action="{{ route('students.destroy', $student) }}" method="post">
  @csrf
  @method('DELETE')
  <input type="submit" name="" value="Delete">
</form>
