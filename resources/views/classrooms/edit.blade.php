@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Classroom
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($classroom, ['route' => ['classrooms.update', $classroom->classroom_id], 'method' => 'patch']) !!}

                   <!-- Classroom Name Field -->
                   <div class="form-group col-md-12">
                       <div class="input-group">
                           <span class="input-group-addon">Classroom Name:</span>
                           {!! Form::text('classroom_name', null, ['class' => 'form-control']) !!}
                       </div>
                   </div>

                   <!-- Classroom Code Field -->
                   <div class="form-group col-md-12">
                       <div class="input-group">
                           <span class="input-group-addon">Classroom Code</span>
                           {!! Form::text('classroom_code', null, ['class' => 'form-control']) !!}
                       </div>
                   </div>

                   <!-- Classroom Description Field -->
                   <div class="form-group col-md-12">
                       <div class="input-group">
                           <span class="input-group-addon">Classroom Description:</span>
                           {!! Form::text('classroom_description', null, ['class' => 'form-control']) !!}
                       </div>
                   </div>

                   <!-- Classroom Status Field -->
                   <div class="form-group col-md-12">
                       <div class="input-group">
                           <span class="input-group-addon">Status:</span>
                           {!! Form::hidden('classroom_status', 0) !!}
                           {!! Form::checkbox('classroom_status', '1', null) !!} Active
                       </div>
                   </div>

                   <div class="modal-footer">
                    {!! Form::submit('Update Classroom', ['class' => 'btn btn-info']) !!}
                    <a href="{{ route('classrooms.index') }}" class="btn btn-warning">Cancel</a>
                    </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
