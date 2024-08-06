
<table class="table table-striped">
    <thead>
       <tr>
        <th>
            Name
        </th>

        <th>
            Phone
        </th>

        <th>
            Email
        </th>
       </tr>
    </thead>

    <tbody>
        @foreach ($emps as $emp)
            <tr>
                <td>
                    {{$emp->name}}
                </td>

                <td>
                    {{$emp->phone}}
                </td>

                <td>
                    {{$emp->email}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>