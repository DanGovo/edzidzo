<!-- Modal -->
<div class="modal fade top" id="add-class-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-success" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add Class</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Class Name Field -->
        <div class="form-group col-md-12">
            <div class="input-group">
                <span class="input-group-addon">Class Name</span>
                {!! Form::text('class_name', null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <!-- Class Code Field -->
        <div class="form-group col-md-12">
            <div class="input-group">
                <span class="input-group-addon">Class Code</span>
                {!! Form::text('class_code', null, ['class' => 'form-control']) !!}
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
