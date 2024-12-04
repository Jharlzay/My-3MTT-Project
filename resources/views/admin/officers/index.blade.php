@extends('layouts.admin.extend')

@section('content')
    <section class="user-management">
        <div class="header-row">
            <h3>Registered Officers</h3>
            <br>
            <button class="add-user-btn"><a href="{{ route('admin.officers.create') }}"> Add New Officer </a></button>
        </div>
        <br><br>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Rank</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @php
                $i = 0;
            @endphp
            @foreach($officers as $officer)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $officer->firsname ." ". $officer->lastname }}John Doe</td>
                <td>{{ $officer->email }}john.doe@example.com</td>
                <td>{{ $officer->rank }}</td>
                <td><span class="status active">{{ $officer->status ? 'Active': 'Inactive' }}</span></td>
                {{--<td>
                    <button class="edit-btn">Edit</button>
                    <button class="delete-btn">Delete</button>
                </td>--}}
            </tr>
            @endforeach
            <!-- Additional rows -->
            </tbody>
        </table>

@endsection
