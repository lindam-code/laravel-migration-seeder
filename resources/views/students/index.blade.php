<h1>Students list</h1>

<table>
  <tr>
    <th>Surname</th>
    <th>Name</th>
    <th>Vote</th>
    <th>Note</th>
  </tr>
  @foreach ($students as $student)
    <tr>
      <td>{{ $student->surname}}</td>
      <td>{{ $student->name}}</td>
      <td>{{ $student->vote}}</td>
      <td>{{ $student->note}}</td>
    </tr>
  @endforeach
  <a href="{{ route('consumers.index') }}">Go to the consumers list</a>
</table>
