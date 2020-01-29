<div class="table-responsive">
    <table class="table" id="roles-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($roles as $role)
            <tr>
                <td>{{ $role->name }}</td>
                <td>
                    {!! Form::open(['route' => ['roles.destroy', $role->role_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a data-toggle="modal" data-target="#view-role-modal" data-role_id="{{ $role->role_id }}"
                            data-name="{{ $role->name }}" data-created_at="{{ $role->created_at }}"
                            data-updated_at="{{ $role->updated_at }}"
                            class='btn btn-primary btn-xs'><i>View</i>
                        </a>

                        <a href="{{ route('roles.edit', [$role->role_id]) }}" class='btn btn-info btn-xs'><i>Edit</i></a>
                        {!! Form::button('<i>Delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $roles->links() }}
</div>

<style>
    input:read-only{
        border: none;
        border-color: transparent;
    }
</style>

<!-- Modal -->
<div class="modal fade" id="view-role-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="role_id" id="role_id">

        <!-- Role ID Field -->
        <div class="form-group">
            {!! Form::label('role_id', 'Role ID:') !!}
            <input type="text" name="role_id" id="role_id" readonly>
        </div>

        <!-- Role Name Field -->
        <div class="form-group">
            {!! Form::label('name', 'Class Name:') !!}
            <input type="text" name="name" id="name" readonly>
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
            $('#view-role-modal').on('show.bs.modal', function(event){

            var button = $(event.relatedTarget)
            var name = button.data('name')
            var created_at = button.data('created_at')
            var updated_at = button.data('updated_at')
            var role_id = button.data('role_id')

            var modal = $(this)

            modal.find('.modal-title').text('View Class');
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #created_at').val(created_at);
            modal.find('.modal-body #updated_at').val(updated_at);
            modal.find('.modal-body #role_id').val(role_id);
        });
      </script>
  @endsection
