<div class="table-responsive">
    <table class="table" id="classSchedulings-table">
        <thead>
            <tr>
                <th>Course</th>
                <th>Level</th>
                <th>Shift</th>
                <th>Classroom</th>
                <th>Batch</th>
                <th>Day</th>
                <th>Time</th>
                <th>Semester</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classSchedulings as $classScheduling)
            <tr>
                <td>{{ $classScheduling->course_id }}</td>
                <td>{{ $classScheduling->class_id }}</td>
                <td>{{ $classScheduling->level_id }}</td>
                <td>{{ $classScheduling->shift_id }}</td>
                <td>{{ $classScheduling->classroom_id }}</td>
                <td>{{ $classScheduling->batch_id }}</td>
                <td>{{ $classScheduling->day_id }}</td>
                <td>{{ $classScheduling->time_id }}</td>
                <td>{{ $classScheduling->semester_id }}</td>
                <td>{{ $classScheduling->start_date }}</td>
                <td>{{ $classScheduling->end_date }}</td>
                <td>{{ $classScheduling->status }}</td>
                <td>
                    {!! Form::open(['route' => ['classSchedulings.destroy', $classScheduling->schedule_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('classSchedulings.show', [$classScheduling->schedule_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('classSchedulings.edit', [$classScheduling->schedule_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
