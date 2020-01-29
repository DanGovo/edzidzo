<div class="table-responsive">
    <table class="table" id="classSches-table">
        <thead>
            <tr>
                <th>Course Id</th>
        <th>Class Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classSches as $classSch)
            <tr>
                <td>{{ $classSch->course_id }}</td>
            <td>{{ $classSch->class_id }}</td>
                <td>
                    {!! Form::open(['route' => ['classSches.destroy', $classSch->sch_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('classSches.show', [$classSch->sch_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('classSches.edit', [$classSch->sch_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
