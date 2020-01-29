<!-- Modal -->
<div class="modal fade" id="add-batch-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add New Batch</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Year Field -->
        <div class="input-group col-md-12">
            <span class="input-group-addon">Batch Year</span>
            {!! Form::text('year', null, ['class' => 'form-control']) !!}
        </div>
        </div>
        <div class="modal-footer">
            {!! Form::submit('Save Batch', ['class' => 'btn btn-primary']) !!}
            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
