<div class="table-responsive">
    <table class="table" id="lecturers-table">
        <thead>
            <tr>
                <th>Firstname</th>
        <th>Surname</th>
        <th>Dob</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Home Address</th>
        <th>Nationality</th>
        <th>Id Number</th>
        <th>Passport Number</th>
        <th>Status</th>
        <th>Date Registered</th>
        <th>User Id</th>
        <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($lecturers as $lecturer)
            <tr>
                <td>{{ $lecturer->firstname }}</td>
            <td>{{ $lecturer->surname }}</td>
            <td>{{ $lecturer->dob }}</td>
            <td>{{ $lecturer->gender }}</td>
            <td>{{ $lecturer->email }}</td>
            <td>{{ $lecturer->phone }}</td>
            <td>{{ $lecturer->home_address }}</td>
            <td>{{ $lecturer->nationality }}</td>
            <td>{{ $lecturer->id_number }}</td>
            <td>{{ $lecturer->passport_number }}</td>
            <td>{{ $lecturer->status }}</td>
            <td>{{ $lecturer->date_registered }}</td>
            <td>{{ $lecturer->user_id }}</td>
            <td>{{ $lecturer->image }}</td>
                <td>
                    {!! Form::open(['route' => ['lecturers.destroy', $lecturer->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('lecturers.show', [$lecturer->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('lecturers.edit', [$lecturer->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
