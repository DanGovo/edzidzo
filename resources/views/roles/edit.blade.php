@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Role
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($role, ['route' => ['roles.update', $role->role_id], 'method' => 'patch']) !!}

                    <!-- Name Field -->
                    <div class="form-group col-md-12">
                        <div class="input-group">
                            <span class="input-group-addon">Role Name:</span>
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="modal-footer">
                        {!! Form::submit('Update Role', ['class' => 'btn btn-info']) !!}
                        <a href="{{ route('classes.index') }}" class="btn btn-warning">Cancel</a>
                    </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
