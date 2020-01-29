<!-- ID Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $semester->class_id }}</p>
</div>

<!-- Semester Name Field -->
<div class="form-group">
    {!! Form::label('semester_name', 'Semester Name:') !!}
    <p>{{ $semester->semester_name }}</p>
</div>

<!-- Semester Code Field -->
<div class="form-group">
    {!! Form::label('semester_code', 'Semester Code:') !!}
    <p>{{ $semester->semester_code }}</p>
</div>

<!-- Semester Duration Field -->
<div class="form-group">
    {!! Form::label('semester_duration', 'Semester Duration:') !!}
    <p>{{ $semester->semester_duration }}</p>
</div>

<!-- Semester Description Field -->
<div class="form-group">
    {!! Form::label('semester_description', 'Semester Description:') !!}
    <p>{{ $semester->semester_description }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $semester->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $semester->updated_at }}</p>
</div>

