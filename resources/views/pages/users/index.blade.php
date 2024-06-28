@extends('layouts.app')

@section('body')
    <div class="container px-5">
        <div class="row">
            <div class="col-12">
                <div class="text-center mb-4 mt-4">
                    <h6 class="text-primary fw-bolder">-- USERS LIST --</h6>
                </div>
                <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Create User</a>
                <table id="myTable" class="table table-bordered table-striped table-hover" style="width: 100%">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 20px">No</th>
                            <th class="text-center">Full Name</th>
                            <th class="text-center">Department</th>
                            <th class="text-center">No Handphone</th>
                            <th class="text-center">NPK</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $user->full_name }}</td>
                                <td class="text-center">{{ $user->department }}</td>
                                <td class="text-center">{{ $user->no_hp }}</td>
                                <td class="text-center">{{ $user->npk }}</td>
                                <td class="text-center">
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirmDelete(this);">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#myTable').DataTable();
        });

        function confirmDelete(form) {
            if (confirm('Apakah yakin akan dihapus?')) {
                form.submit();
            } else {
                return false;
            }
        }
    </script>
@endsection
