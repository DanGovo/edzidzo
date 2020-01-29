@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Batch
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($batch, ['route' => ['batches.update', $batch->batch_id], 'method' => 'patch']) !!}

                   <!-- Year Field  -->
                   <div class="form-group col-sm-6">
                       <div class="input-group">
                           <span class="input-group-addon">Batch Year</span>
                           {!! Form::text('year', null, ['class' => 'form-control']) !!}
                       </div>
                   </div>
                   <div class="modal-footer">
                       {!! Form::submit('Update Batch', ['class' => 'btn btn-info']) !!}
                       <a href="{{ route('batches.index') }}" class="btn btn-warning">Cancel</a>
                   </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
