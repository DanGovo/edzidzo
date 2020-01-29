@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Level
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($level, ['route' => ['levels.update', $level->level_id], 'method' => 'patch']) !!}

                   <!-- Level Name Field -->
                   <div class="form-group col-md-12">
                       <div class="input-group">
                           <span class="input-group-addon">Level Name:</span>
                           {!! Form::text('level', null, ['class' => 'form-control']) !!}
                       </div>
                   </div>

                   <!-- Course ID Field -->
                   <div class="form-group col-md-12">
                       <div class="input-group">
                           <span class="input-group-addon">Course ID:</span>
                           {!! Form::text('course_id', null, ['class' => 'form-control']) !!}
                       </div>
                   </div>

                   <!-- Level Description Field -->
                   <div class="form-group col-md-12">
                       <div class="input-group">
                           <span class="input-group-addon">Level Description:</span>
                           {!! Form::text('level_description', null, ['class' => 'form-control']) !!}
                       </div>
                   </div>

                   <div class="modal-footer">
                    {!! Form::submit('Update Level', ['class' => 'btn btn-info']) !!}
                    <a href="{{ route('levels.index') }}" class="btn btn-warning">Cancel</a>
                    </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
