<h1>Consumers list</h1>

<ol>
  @foreach ($consumers as $consumer)
    <li> {{ $consumer->name }} {{ $consumer->lastname }} <a href="{{ route('consumers.show', $consumer) }}">Show Info</a> </li>
  @endforeach
</ol>

<a href="{{ route('students.index') }}">Go to the students list</a>
