<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

    <p style="text-align:center;padding:10px;"><h3> Withdrawals Report </h3></p>
<table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fullname</th>
                <th>Amount</th>
                <th>Remark</th>
                <th>Credited On</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>

                @foreach ($withdrawals as $withdrawal)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $withdrawal->user->fullname }} </td>
                    <td>{{ $withdrawal->amount }} </td>
                    <td>{{ $withdrawal->remark }} </td>
                    <td>{{ $withdrawal->created_at }}</td>
                    <td>
                        @if(!empty($withdrawal->deleted_at))
                            <i class="btn btn-danger btn-sm">Disapproved</i>
                        @elseif(!empty($withdrawal->approved_date))
                            <i class="btn btn-success btn-sm">Approved</i>
                        @else
                            <i class="btn btn-warning btn-sm">Pending</i>
                        @endif
                    </td>
                </tr>
            @endforeach
            
        </tbody>
</table>

</body>
</html>