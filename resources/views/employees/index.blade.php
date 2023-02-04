<div class="container">
    <table>
        <tr>
            <th>Division</th>
            <th>District</th>
            <th>Upazila</th>
            <th>Area</th>
            <th>Emp. Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        @if(count($employees))
            @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->area->upazila->district->division->title }}</td>
                <td>{{ $employee->area->upazila->district->title }}</td>
                <td>{{ $employee->area->upazila->title }}</td>
                <td>{{ $employee->area->title }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->phone }}</td>
            </tr>
            @endforeach
        @endif
</div>