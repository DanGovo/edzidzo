@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Semester
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($semester, ['route' => ['semesters.update', $semester->semester_id], 'method' => 'patch']) !!}

                   <!-- Semester Name Field -->
                   <div class="form-group col-md-12">
                       <div class="input-group">
                           <span class="input-group-addon">Semester Name:</span>
                           {!! Form::text('semester_name', null, ['class' => 'form-control']) !!}
                       </div>
                   </div>

                   <!-- Semester Code Field -->
                   <div class="form-group col-md-12">
                       <div class="input-group">
                           <span class="input-group-addon">Semester Code:</span>
                           {!! Form::text('semester_code', null, ['class' => 'form-control']) !!}
                       </div>
                   </div>

                   <!-- Semester Duration Field -->
                   <div class="form-group col-md-12">
                       <div class="input-group">
                           <span class="input-group-addon"> Semester Duration:</span>
                           {!! Form::text('semester_duration', null, ['class' => 'form-control']) !!}
                       </div>
                   </div>

                   <!-- Semester Description Field -->
                   <div class="form-group col-md-12">
                       <div class="input-group">
                           <span class="input-group-addon">Semester Description</span>
                           {!! Form::textarea('semester_description', null, ['class' => 'form-control', 'rows'=>2, 'cols'=>40]) !!}
                       </div>
                   </div>

                   <div class="modal-footer">
                    {!! Form::submit('Update Semester', ['class' => 'btn btn-info']) !!}
                    <a href="{{ route('semesters.index') }}" class="btn btn-warning">Cancel</a>
                    </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
