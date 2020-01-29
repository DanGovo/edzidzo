<!-- ID Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $classroom->classroom_id }}</p>
</div>

<!-- Classroom Name Field -->
<div class="form-group">
    {!! Form::label('classroom_name', 'Classroom Name:') !!}
    <p>{{ $classroom->classroom_name }}</p>
</div>

<!-- Classroom Code Field -->
<div class="form-group">
    {!! Form::label('classroom_code', 'Classroom Code:') !!}
    <p>{{ $classroom->classroom_code }}</p>
</div>

<!-- Classroom Description Field -->
<div class="form-group">
    {!! Form::label('classroom_description', 'Classroom Description:') !!}
    <p>{{ $classroom->classroom_description }}</p>
</div>

<!-- Classroom Status Field -->
<div class="form-group">
    {!! Form::label('classroom_status', 'Classroom Status:') !!}
    <p>{{ $classroom->classroom_status }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $classroom->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $classroom->updated_at }}</p>
</div>
