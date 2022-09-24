<div style="padding: 10% 30%">
    <h3>Student Name: </h3> {{ $student->name }}
    <h3>Student Roll: </h3> {{ $student->roll }}
    <h3>Assigned Teachers: </h3>
    @foreach($student->teachers as $teacher)
        {{ $teacher->name . ',' }}
    @endforeach
</div>
