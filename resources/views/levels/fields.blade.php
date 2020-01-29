<!-- Modal -->
<div class="modal fade" id="add-level-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add Level</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Level Field -->
        <div class="form-group col-md-12">
            <div class="input-group">
                <span class="input-group-addon">Level:</span>
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
                <span class="input-group-addon">Level Description</span>
                {!! Form::textarea('level_description', null, ['class' => 'form-control', 'rows'=>2, 'cols'=>40]) !!}
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


