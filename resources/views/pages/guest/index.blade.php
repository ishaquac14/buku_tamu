@extends('layouts.app')

@section('body')
    <div class="container px-5">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center mb-4 mt-4">
                    <h6 class="text-primary fw-bolder">-- GUESTS LIST --</h6>
                </div>
                <a href="{{ route('guest.create') }}" class="btn btn-primary mb-3">Add Guest</a>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <table id="myTable" class="table table-bordered table-striped table-hover" style="width: 100%">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">NIK</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Asal Perusahaan</th>
                            <th class="text-center">PIC</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($guests as $guest)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $guest->nik }}</td>
                                <td class="text-center">{{ $guest->nama }}</td>
                                <td class="text-center">{{ $guest->asal_perusahaan }}</td>
                                <td class="text-center">{{ optional($guest->user)->full_name }}</td>
                                {{-- <td><img src="{{ $guest->image }}" alt="Guest Image" class="img-fluid" style="max-width: 100px;"></td> --}}
                                <td class="text-center">
                                    <a href="{{ route('guest.show', $guest->id) }}" class="btn btn-info btn-sm">Detail</a>
                                    <a href="{{ route('guest.edit', $guest->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('guest.destroy', $guest->id) }}" method="POST" class="d-inline"
                                        id="delete-form-{{ $guest->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm"
                                            onclick="confirmDelete({{ $guest->id }})">Delete</button>
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

    </script>

    <script>
        function confirmDelete(id) {
            if (confirm('Apakah yakin akan dihapus?')) {
                document.getElementById('delete-form-' + id).submit();
            }
        }
    </script>
@endsection
