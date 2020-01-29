<!-- Modal -->
<div class="modal fade top" id="add-classSchedule-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered  modal-lg modal-info" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add New Class</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Course Id Field -->
        <div class="form-group col-lg-6">
            <div class="input-group">
                <span class="input-group-addon">Course Name:</span>
                <select class="form-control" name="course_id" id="course_id">
                    <option value="">Select Course</option>
                    @foreach ($course as $cour)
                        <option value="{{ $cour->course_id }}">{{ $cour->course_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Class Id Field -->
        <div class="row">
        <div class="form-group col-lg-6">
            <div class="input-group">
                <span class="input-group-addon">Class Name:</span>
                <select class="form-control" name="class_id" id="class_id">
                    <option value="">Select Class</option>
                    @foreach ($class as $cla)
                        <option value="{{ $cla->class_id }}">{{ $cla->class_name  }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Level Id Field -->
        <div class="form-group col-lg-12">
            <div class="input-group">
                <span class="input-group-addon">Level:</span>
                <select class="form-control" name="level_id" id="level_id">
                    <option value="">Select Level</option>
                    @foreach ($level as $lev)
                        <option value="{{ $lev->level_id }}">{{ $lev->level }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Shift Id Field -->
        <div class="form-group col-md-12">
            <div class="input-group">
                <span class="input-group-addon">Shift:</span>
                <select class="form-control" name="shift_id" id="shift_id">
                    <option value="">Select Shift</option>
                    @foreach ($shift as $shi)
                        <option value="{{ $shi->shift_id }}">{{ $shi->shift }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Classroom Id Field -->
        <div class="form-group col-md-12">
            <div class="input-group">
                <span class="input-group-addon">Classroom:</span>
                <select class="form-control" name="classroom_id" id="classroom_id">
                    <option value="">Select Classroom</option>
                    @foreach ($classroom as $classro)
                        <option value="{{ $classro->classroom_id }}">{{ $classro->classroom_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Batch Id Field -->
        <div class="form-group col-md-12">
            <div class="input-group">
                <span class="input-group-addon">Batch:</span>
                <select class="form-control" name="batch_id" id="batch_id">
                    <option value="">Select Batch</option>
                    @foreach ($batch as $bat)
                        <option value="{{ $bat->batch_id }}">{{ $bat->year }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Day Id Field -->
        <div class="form-group col-md-12">
            <div class="input-group">
                <span class="input-group-addon">Day:</span>
                <select class="form-control" name="day_id" id="day_id">
                    <option value="">Select Day</option>
                    @foreach ($day as $da)
                        <option value="{{ $da->day_id }}">{{ $da->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Time Id Field -->
        <div class="form-group col-md-12">
            <div class="input-group">
                <span class="input-group-addon">Time:</span>
                <select class="form-control" name="time_id" id="time_id">
                    <option value="">Select Time</option>
                    @foreach ($time as $tim)
                        <option value="{{ $tim->time_id }}">{{ $tim->time }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Semester Id Field -->
        <div class="form-group col-md-12">
            <div class="input-group">
                <span class="input-group-addon">Semester:</span>
                <select class="form-control" name="semester_id" id="semester_id">
                    <option value="">Select Semester</option>
                    @foreach ($semester as $sem)
                        <option value="{{ $sem->semester_id }}">{{ $sem->semester_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Start Date Field -->
        <div class="form-group col-sm-6">
           <label for="start_date">Start Date:</label>
           <input type="text" class="form-control" name="start_date" id="start_date">
        </div>

        @section('scripts')
            <script type="text/javascript">
                $('#start_date').datetimepicker({
                    format: 'YYYY-MM-DD',
                    useCurrent: false
                })
            </script>
        @endsection

        <!-- End Date Field -->
        <div class="form-group col-sm-6">
            <label for="end_date">End Date:</label>
            <input type="text" class="form-control" name="end_date" id="end_date">
        </div>

        @section('scripts')
            <script type="text/javascript">
                $('#end_date').datetimepicker({
                    format: 'YYYY-MM-DD',
                    useCurrent: false
                })
            </script>
        @endsection

        <!-- Status Field -->
        <div class="form-group col-sm-6">
            <div class="input-group">
                <span class="input-group-addon">Status</span>
                <label class="checkbox-inline">
                    {!! Form::hidden('status', 0) !!}
                    {!! Form::checkbox('status', '1', null) !!}
                </label>
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
</div>
