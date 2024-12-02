@extends('navbar')

@section('content')
<h1 class="text-center">User List</h1>

<div class="user-list-container">
    @if(session('success'))
        <div class="alert alert-success" id="success-alert">
            <span class="alert-icon">✔</span> {{ session('success') }}
        </div>
    @endif

    <div class="user-table-container">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-show">Show</a>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-edit">Edit</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="{{ route('users.create') }}" class="btn btn-create">+ Create User</a>
</div>

<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #5b1b1b;
        color: white;
        margin: 0;
        padding: 0;
    }

    tbody tr:nth-child(even) {
        background-color: #A03A3B;
        /* Warna untuk baris genap */
    }

    h1 {
        text-align: center;
        color: #D6C3A5;
        margin-top: 20px;
    }

    .user-list-container {
        width: 80%;
        margin: 40px auto;
        background-color: #A03A3B;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .user-table-container {
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ccc;
    }

    th {
        background-color: #D6C3A5;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .btn {
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }

    .btn-create {
        background-color: #D6C3A5;
        color: white;
        display: inline-block;
        text-align: center;
        width: 100%;
        margin-top: 20px;
        transition: background-color 0.3s;
    }

    .btn-create:hover {
        background-color: #813636;
    }

    .btn-show {
        background-color: #4CC9FE;
        color: white;
        text-decoration: none;
        padding: 8px 16px;
        border-radius: 5px;
    }

    .btn-show:hover {
        background-color: #608BC1;
    }

    .btn-edit {
        background-color: #FFE700;
        color: black;
        text-decoration: none;
        padding: 8px 16px;
        border-radius: 5px;
    }

    .btn-edit:hover {
        background-color: #FF9800;
    }

    .btn-delete {
        background-color: #DC3545;
        color: white;
        border: none;
        padding: 8px 16px;
        border-radius: 5px;
    }

    .btn-delete:hover {
        background-color: #c82333;
    }

    .alert {
        padding: 10px 20px;
        border-radius: 5px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        background-color: #28a745;
        color: white;
        font-size: 16px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    }

    .alert-icon {
        font-weight: bold;
        margin-right: 10px;
    }

    @media (max-width: 768px) {
        .user-list-container {
            width: 90%;
        }
    }

    @media (max-width: 480px) {
        .user-list-container {
            width: 100%;
        }

        table {
            font-size: 12px;
        }
    }
</style>

@endsection
