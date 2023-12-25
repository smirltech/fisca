@foreach ($employees as $employee)
    <p>{{ $employee->name }}</p>
    <p>{{ $employee->email }}</p>
@endforeach
