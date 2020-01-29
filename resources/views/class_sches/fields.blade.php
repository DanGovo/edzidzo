<!-- Modal -->
<div class="modal fade top" id="add-schedule-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
        <div class="row">
        <div class="form-group col-md-12">
            <div class="input-group">
                <span class="input-group-addon">Class Name</span>
                <select class="form-control" name="class_id" id="class_id">
                    <option>Select Class...</option>
                    @foreach ($class as $cla)
                        <option value="{{ $cla->class_id }}>"{{ $cla->class_name }}></option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Course Name Field -->
        <div class="form-group col-md-12">
            <div class="input-group">
                <span class="input-group-addon">Course Name</span>
                <select class="form-control" name="course_id" id="course_id">
                    <option value="">Select Course...</option>
                    @foreach ($course as $cour)
                        <option value="{{ $cour->course_id }}>"{{ $cour->course_name }}></option>
                    @endforeach
                </select>
            </div>
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
