<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

    <p style="text-align:center;padding:10px;"><h3> Employee Contributions </h3></p>
<table border="1">
        <thead>
            <tr>
            <th>ID</th>
            <th>Fullname</th>
            <th>Amount</th>
            <th>Contribution Type</th>
            <th>Remark</th>
            <th>Credited By</th>
            <th>Credited On</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($contributions as $contribution)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $contribution->user->fullname }} </td>
                    <td>{{ $contribution->amount }} </td>
                    <td>{{ $contribution->contribution_type->name }} </td>
                    <td>{{ $contribution->remark }} </td>
                    <td>{{ $contribution->creditor->fullname }} </td>
                    <td>{{ $contribution->created_at }}</td>
                </tr>
            @endforeach
            
        </tbody>
</table>

</body>
</html>