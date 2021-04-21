<style>
    table {
        border: 1px solid #aaa;
        border-collapse: collapse;
    }
    table th, table td {
        font-family: sans-serif;
        font-size: 10px;
        border: 1px solid #ccc;
        padding: 4px;
    }
    table tr:nth-child(odd) {
        background-color: #eee;
    }
    table th {
        background-color: #666;
        color: #fff;
        text-align: center;
    }
</style>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>FullName</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Role</th>
            <th>Photo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->fullname }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->address }}</td>
                <td>{{ $user->role }}</td>
                <td><img src="{{ public_path().'/'.$user->photo }}" width="40px"></td>
            </tr>
        @endforeach
    </tbody>
</table>