@extends('dashboard')

@section('content')
<!DOCTYPE html>
<html>

<head>
    <title>Danh Sách User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>Thông tin user</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ auth()->user()->name }}</td>
                    <td>{{ auth()->user()->email }}</td>
                    <td>{{ auth()->user()->phone }}</td>
                </tr>
            </tbody>
        </table>
        
        <h1 style="margin-top: 50px;">Danh sách User</h1>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->password }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->image }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links('pagination::bootstrap-4', ['prev_text' => '', 'next_text' => '']) }}
    </div>
</body>

</html>
@endsection