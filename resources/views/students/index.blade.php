<h1>
    Danh sách sinh viên
</h1>
<table border="1" width="100%">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
    </tr>
    @foreach($students as $student)
        <tr>
            <td>{{ $students->id }}</td>
        </tr>
    @endforeach
</table>
