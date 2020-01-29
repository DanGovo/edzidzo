<style>
    input:read-only{
        border: none;
        border-color: transparent;
    }
</style>

<div class="table-responsive">
    <table class="table" id="days-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($days as $day)
            <tr>
                <td>{{ $day->name }}</td>
                <td>
                    {!! Form::open(['route' => ['days.destroy', $day->day_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a data-toggle="modal" data-target="#view-day-modal" data-day_id="{{ $day->day_id }}"
                            data-day="{{ $day->name }}" data-created_at="{{ $day->created_at }}"
                            data-updated_at="{{ $day->updated_at }}"
                            class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i>
                        </a>

                        <a href="{{ route('days.edit', [$day->day_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="view-day-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="day_id" id="day_id">

        <!-- Name Field -->
        <div class="form-group">
            {!! Form::label('day', 'Day:') !!}
            <input type="text" name="day" id="day" readonly>
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
            $('#view-day-modal').on('show.bs.modal', function(event){

            var button = $(event.relatedTarget)
            var day = button.data('day')
            var created_at = button.data('created_at')
            var updated_at = button.data('updated_at')
            var day_id = button.data('day_id')

            var modal = $(this)

            modal.find('.modal-title').text('View Day');
            modal.find('.modal-body #day').val(day);
            modal.find('.modal-body #created_at').val(created_at);
            modal.find('.modal-body #updated_at').val(updated_at);
            modal.find('.modal-body #day_id').val(day_id);
        });
      </script>
  @endsection
