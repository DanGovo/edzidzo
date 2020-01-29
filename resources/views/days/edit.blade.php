@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Day
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($day, ['route' => ['days.update', $day->day_id], 'method' => 'patch']) !!}

                   <!-- Name Field  -->
                   <div class="form-group col-sm-6">
                       <div class="input-group">
                           <span class="input-group-addon">Day</span>
                           {!! Form::text('name', null, ['class' => 'form-control']) !!}
                       </div>
                   </div>
                   <div class="modal-footer">
                       {!! Form::submit('Update Day', ['class' => 'btn btn-info']) !!}
                       <a href="{{ route('days.index') }}" class="btn btn-warning">Cancel</a>
                   </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
