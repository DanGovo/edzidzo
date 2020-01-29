<div class="table-responsive">
    <table class="table" id="shifts-table">
        <thead>
            <tr>
                <th>Shift</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($shifts as $shift)
            <tr>
                <td>{{ $shift->shift }}</td>
                <td>
                    {!! Form::open(['route' => ['shifts.destroy', $shift->shift_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a data-toggle="modal" data-target="#view-shift-modal" data-shift_id="{{ $shift->shift_id }}"
                            data-shift="{{ $shift->shift }}" data-created_at="{{ $shift->created_at }}"
                            data-updated_at="{{ $shift->updated_at }}"
                            class='btn btn-primary btn-xs'><i>View</i>
                        </a>

                        <a href="{{ route('shifts.edit', [$shift->shift_id]) }}" class='btn btn-info btn-xs'><i>Edit</i></a>
                        {!! Form::button('<i>Delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
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
<div class="modal fade top" id="view-shift-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="shift_id" id="shift_id">

        <!-- Shift Field -->
        <div class="form-group">
            {!! Form::label('shift', 'Shift:') !!}
            <input type="text" name="shift" id="shift" readonly>
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
            // {{-- ---Shift view script --}}
            $('#view-shift-modal').on('show.bs.modal', function(event){

            var button = $(event.relatedTarget)
            var shift = button.data('shift')
            var created_at = button.data('created_at')
            var updated_at = button.data('updated_at')
            var shift_id = button.data('shift_id')

            var modal = $(this)

            modal.find('.modal-title').text('View Shift');
            modal.find('.modal-body #shift').val(shift);
            modal.find('.modal-body #created_at').val(created_at);
            modal.find('.modal-body #updated_at').val(updated_at);
            modal.find('.modal-body #shift_id').val(shift_id);
        });
      </script>
  @endsection
