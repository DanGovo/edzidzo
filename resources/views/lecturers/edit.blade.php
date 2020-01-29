@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Lecturer
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($lecturer, ['route' => ['lecturers.update', $lecturer->id], 'method' => 'patch']) !!}

                        @include('lecturers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection