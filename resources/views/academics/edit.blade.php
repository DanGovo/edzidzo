@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Academic
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($academic, ['route' => ['academics.update', $academic->academic_id], 'method' => 'patch']) !!}

                   <!-- Academic Year Field -->
                   <div class="form-group col-md-12">
                       <div class="input-group">
                           <span class="input-group-addon">Academic Year:</span>
                           {!! Form::text('academic_year', null, ['class' => 'form-control']) !!}
                       </div>
                   </div>

                   <div class="modal-footer">
                    {!! Form::submit('Update Year', ['class' => 'btn btn-info']) !!}
                    <a href="{{ route('academics.index') }}" class="btn btn-warning">Cancel</a>
                   </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
