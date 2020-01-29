<!-- Modal -->
<div class="modal fade" id="add-classroom-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add Classroom</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

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
                <span class="input-group-addon">Classroom Code:</span>
                {!! Form::text('classroom_code', null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <!-- Classroom Description Field -->
        <div class="form-group col-md-12">
            <div class="input-group">
                <span class="input-group-addon">Classroom Description:</span>
                {!! Form::textarea('classroom_description', null, ['class' => 'form-control', 'rows' => 2, 'cols'=> 40]) !!}
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
        </div>
      <div class="modal-footer">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
