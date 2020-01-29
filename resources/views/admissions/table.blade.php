<div class="table-responsive">
    <table class="table" id="admissions-table">
        <thead>
            <tr>
                <th>Roll No</th>
        <th>Firstname</th>
        <th>Surname</th>
        <th>Dob</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Nok Name</th>
        <th>Home Address</th>
        <th>Current Address</th>
        <th>Nationality</th>
        <th>Id Number</th>
        <th>Passport Number</th>
        <th>Status</th>
        <th>Date Registered</th>
        <th>User Id</th>
        <th>Class Id</th>
        <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($admissions as $admission)
            <tr>
                <td>{{ $admission->roll_no }}</td>
            <td>{{ $admission->firstname }}</td>
            <td>{{ $admission->surname }}</td>
            <td>{{ $admission->dob }}</td>
            <td>{{ $admission->gender }}</td>
            <td>{{ $admission->email }}</td>
            <td>{{ $admission->phone }}</td>
            <td>{{ $admission->nok_name }}</td>
            <td>{{ $admission->home_address }}</td>
            <td>{{ $admission->current_address }}</td>
            <td>{{ $admission->nationality }}</td>
            <td>{{ $admission->id_number }}</td>
            <td>{{ $admission->passport_number }}</td>
            <td>{{ $admission->status }}</td>
            <td>{{ $admission->date_registered }}</td>
            <td>{{ $admission->user_id }}</td>
            <td>{{ $admission->class_id }}</td>
            <td>{{ $admission->image }}</td>
                <td>
                    {!! Form::open(['route' => ['admissions.destroy', $admission->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admissions.show', [$admission->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('admissions.edit', [$admission->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
