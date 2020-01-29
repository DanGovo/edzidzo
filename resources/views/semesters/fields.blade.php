<!-- Modal -->
<div class="modal fade" id="add-semester-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add Semester</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

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
    </div>
      <div class="modal-footer">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


