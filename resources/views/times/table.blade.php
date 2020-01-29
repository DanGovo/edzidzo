<div class="table-responsive">
    <table class="table" id="times-table">
        <thead>
            <tr>
                <th>Time</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($times as $time)
            <tr>
                <td>{{ $time->time }}</td>
                <td>
                    {!! Form::open(['route' => ['times.destroy', $time->time_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a data-toggle="modal" data-target="#view-time-modal" data-time_id="{{ $time->time_id }}"
                            data-time="{{ $time->time }}" data-created_at="{{ $time->created_at }}"
                            data-updated_at="{{ $time->updated_at }}"
                            class='btn btn-info btn-xs'><i>View</i>
                        </a>

                        <a href="{{ route('times.edit', [$time->time_id]) }}" class='btn btn-primary btn-xs'><i>Edit</i></a>
                        {!! Form::button('<i>Delete</iclass="glyphicon>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<style>
    input:read-only{
        border: none;
        border-color: transparent;
    }
</style>

<!-- Modal -->
<div class="modal fade" id="view-time-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="time_id" id="time_id">

        <!-- Time ID Field -->
        <div class="form-group">
            {!! Form::label('time_id', 'Time ID:') !!}
            <input type="text" name="time_id" id="time_id" readonly>
        </div>

        <!-- Time Field -->
        <div class="form-group">
            {!! Form::label('time', 'Time:') !!}
            <input type="text" name="time" id="time" readonly>
        </div>

        <!-- Created At Field -->
        <div class="form-group">
            {!! Form::label('created_at', 'Created At:') !!}
            <input type="text" name="created_at" id="created_at" readonly>
        </div>

        <!-- Updated At Field -->
        <div class="form-group">
            {!! Form::label('updated_at', 'Updated At:') !!}
            <input type="text" name="updated_at" id="updated_at" readonly>
        </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  @section('scripts')
      <script>
            // {{-- ---level view script --}}
            $('#view-time-modal').on('show.bs.modal', function(event){

            var button = $(event.relatedTarget)
            var time = button.data('time')
            var created_at = button.data('created_at')
            var updated_at = button.data('updated_at')
            var time_id = button.data('time_id')

            var modal = $(this)

            modal.find('.modal-title').text('View Class');
            modal.find('.modal-body #time').val(time);
            modal.find('.modal-body #created_at').val(created_at);
            modal.find('.modal-body #updated_at').val(updated_at);
            modal.find('.modal-body #time_id').val(time_id);
        });
      </script>
  @endsection
