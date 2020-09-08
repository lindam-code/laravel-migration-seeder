<h1>Students list</h1>

<table>
  <tr>
    <th>Surname</th>
    <th>Name</th>
    <th>Vote</th>
    <th>Note</th>
    <th>Delete</th>
  </tr>
  @foreach ($students as $student)
    <tr>
      <td>{{ $student->surname}}</td>
      <td>{{ $student->name}}</td>
      <td>{{ $student->vote}}</td>
      <td>{{ $student->note}}</td>
      <td>
        <form action="{{ route('students.destroy', $student) }}" method="post">
          @csrf
          @method('DELETE')
          <input type="submit" onclick="return confirm('Are you sure?')" name="" value="Delete">
        </form>
      </td>
    </tr>
  @endforeach
  <a href="{{ route('consumers.index') }}">Go to the consumers list</a>

</table>
