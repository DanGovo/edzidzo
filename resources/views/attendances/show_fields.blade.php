<!-- Student Id Field -->
<div class="form-group">
    {!! Form::label('student_id', 'Student Id:') !!}
    <p>{{ $attendance->student_id }}</p>
</div>

<!-- Class Id Field -->
<div class="form-group">
    {!! Form::label('class_id', 'Class Id:') !!}
    <p>{{ $attendance->class_id }}</p>
</div>

<!-- Subject Id Field -->
<div class="form-group">
    {!! Form::label('subject_id', 'Subject Id:') !!}
    <p>{{ $attendance->subject_id }}</p>
</div>

<!-- Lecturer Id Field -->
<div class="form-group">
    {!! Form::label('lecturer_id', 'Lecturer Id:') !!}
    <p>{{ $attendance->lecturer_id }}</p>
</div>

<!-- Attendance Status Field -->
<div class="form-group">
    {!! Form::label('attendance_status', 'Attendance Status:') !!}
    <p>{{ $attendance->attendance_status }}</p>
</div>

