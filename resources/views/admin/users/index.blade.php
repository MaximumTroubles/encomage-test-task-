@extends('layouts.app')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
@endsection
@section('content')

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @elseif(session('danger'))
    <div class="alert alert-danger">
        {{ session('danger') }}
    </div>
    @endif

    <div class="create-button">
        <a href="{{ url('/admin/users/create') }}">
            <button class="btn btn-success">
                <i class="fas fa-plus"></i>
                Create User
            </button>
        </a>
    </div>

    <table class="hover cell-border" id="dataTable">
        <thead>
            <tr>
                <td>#</td>
                <td>Имя</td>
                <td>Фамилия</td>
                <td>Мыло</td>
                <td>Редактирование</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ url('/admin/users/'.$user->id.'/edit') }}">
                            <button class="btn btn-primary">
                                <i class="fas fa-edit"></i>
                            </button>
                        </a>

                        {!! Form::open(['url' => 'admin/users/'.$user->id, 'method' => 'delete', 'class' => 'd-inline']) !!}
                            <button class="btn btn-danger">  <i class="fas fa-trash-alt"></i> </button>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
@endsection
@section('js')

    <script>
        $(document).ready( function () {
            $('#dataTable').DataTable();
        } );
    </script>
@endsection
