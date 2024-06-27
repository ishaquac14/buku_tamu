@extends('layouts.app')

@section('body')
    <div class="container px-5">
        <form action="{{ route('guest.update', $guest->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row d-flex flex-wrap">
                <div class="text-center mb-5">
                    <h6 class="display-7 fw-bolder mt-5"><span class="text-gradient d-inline">-- EDIT DATA DIRI ANDA --</span>
                    </h6>
                </div>
                <div class="col-md-6 mt-2">
                    <input type="text" class="form-control" name="nik" value="{{ $guest->nik }}" required>
                </div>
                <div class="col-md-6 mt-2">
                    <input type="text" class="form-control" name="nama" value="{{ $guest->nama }}" required>
                </div>
                <div class="col-md-6 mt-4">
                    <input type="text" class="form-control" name="asal_perusahaan" value="{{ $guest->asal_perusahaan }}" required>
                </div>
                <div class="col-md-6 mt-4">
                    <input type="number" class="form-control" name="no_hp_tamu" value="{{ $guest->no_hp_tamu }}" required>
                </div>
                <div class="col-md-6 mt-4">
                    <select id="nama_pic" class="form-control" name="nama_pic" required>
                        <option value="" disabled>--- INPUT PIC AIIA ---</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}" data-department="{{ $user->department }}" {{ $guest->nama_pic == $user->id ? 'selected' : '' }}>
                                {{ $user->full_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mt-4">
                    <input type="text" id="departemen" class="form-control" name="departemen" value="{{ $guest->departemen }}" readonly required>
                </div>
                <div class="col-md-6 mt-4">
                    <select name="tujuan_lokasi" class="form-select" id="TujuanLokasiSelect" required>
                        <option value="" disabled>--- TUJUAN LOKASI ---</option>
                        <option value="Level 0 - Loker" {{ $guest->tujuan_lokasi == 'Level 0 - Loker' ? 'selected' : '' }}>Level 0 - Loker</option>
                        <option value="Level 0 - Parkiran Mobil" {{ $guest->tujuan_lokasi == 'Level 0 - Parkiran Mobil' ? 'selected' : '' }}>Level 0 - Parkiran Mobil</option>
                        <option value="Level 0 - Parkiran Motor" {{ $guest->tujuan_lokasi == 'Level 0 - Parkiran Motor' ? 'selected' : '' }}>Level 0 - Parkiran Motor</option>
                        <option value="Level 1 - Kantin" {{ $guest->tujuan_lokasi == 'Level 1 - Kantin' ? 'selected' : '' }}>Level 1 - Kantin</option>
                        <option value="Level 1 - Mushola" {{ $guest->tujuan_lokasi == 'Level 1 - Mushola' ? 'selected' : '' }}>Level 1 - Mushola</option>
                        <option value="Level 1 - Lobi" {{ $guest->tujuan_lokasi == 'Level 1 - Lobi' ? 'selected' : '' }}>Level 1 - Lobi</option>
                        <option value="Level 2 - Unit Plant" {{ $guest->tujuan_lokasi == 'Level 2 - Unit Plant' ? 'selected' : '' }}>Level 2 - Unit Plant</option>
                        <option value="Level 2 - Body Plant" {{ $guest->tujuan_lokasi == 'Level 2 - Body Plant' ? 'selected' : '' }}>Level 2 - Body Plant</option>
                        <option value="Level 2 - Office Lt.1/2" {{ $guest->tujuan_lokasi == 'Level 2 - Office Lt.1/2' ? 'selected' : '' }}>Level 2 - Office Lt.1/2</option>
                        <option value="Level 3 - Gardu Listrik" {{ $guest->tujuan_lokasi == 'Level 3 - Gardu Listrik' ? 'selected' : '' }}>Level 3 - Gardu Listrik</option>
                        <option value="Level 3 - Ruangan Server" {{ $guest->tujuan_lokasi == 'Level 3 - Ruangan Server' ? 'selected' : '' }}>Level 3 - Ruangan Server</option>
                        <option value="Level 3 - Water Tank" {{ $guest->tujuan_lokasi == 'Level 3 - Water Tank' ? 'selected' : '' }}>Level 3 - Water Tank</option>
                        <option value="Level 3 - Area Gas PGN" {{ $guest->tujuan_lokasi == 'Level 3 - Area Gas PGN' ? 'selected' : '' }}>Level 3 - Area Gas PGN</option>
                    </select>
                </div>
                <div class="col-md-6 mt-4">
                    <input type="text" name="kartu" class="form-control" id="KartuInput" readonly value="{{ $guest->kartu }}">
                </div>
                <div class="col-md-12 mt-4">
                    <textarea class="form-control" name="tujuan" placeholder="TUJUAN" rows="3" required>{{ $guest->tujuan }}</textarea>
                </div>

                {{-- Webcam --}}
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="text-center mt-5">
                            <h5 class="text-secondary fw-bolder mb-4">FOTO DULU !!</h5>
                            <div class="row justify-content-center align-items-center" id="camera_wrapper">
                                <div id="my_camera"></div>
                            </div>
                            <br>
                            <div class="me-2">
                                <input type="button" value="Ambil Foto" onclick="take_snapshot()" class="btn btn-secondary me-2 ms-4">
                                <input type="button" value="Ulangi Foto" onclick="retake_snapshot()" class="btn btn-secondary">
                                <input type="hidden" name="image" class="image-tag" value="{{ $guest->image }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="mt-5 mb-4 text-center">
                        <div class="">
                            <button class="btn btn-primary">UPDATE</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Add jQuery and Select2 library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js"></script>
    <script language="JavaScript">
        // Initialize Select2 on nama_pic
        $('#nama_pic').select2({
            placeholder: '--- INPUT PIC AIIA ---',
            allowClear: true
        });

        // Update department field based on selected PIC
        $('#nama_pic').on('change', function () {
            var selectedOption = $(this).find(':selected');
            var department = selectedOption.data('department');
            $('#departemen').val(department);
        });

        // Focus on Select2 element when clicked
        $('#nama_pic').on('select2:open', function () {
            $(".select2-search__field").focus();
        });

        // Configure a few settings and attach camera
        Webcam.set({
            width: 320,
            height: 240,
            image_format: 'jpeg',
            jpeg_quality: 90
        });
        Webcam.attach('#my_camera');

        // Take snapshot and get image data
        function take_snapshot() {
            Webcam.snap(function(data_uri) {
                document.querySelector('.image-tag').value = data_uri;
                document.getElementById('camera_wrapper').innerHTML = '<img src="' + data_uri +
                    '" id="captured_image" class="img-fluid" style="max-width: 320px; max-height: 240px;"/>';
            });
        }

        // Retake snapshot
        function retake_snapshot() {
            document.getElementById('camera_wrapper').innerHTML = '<div id="my_camera"></div>';
            Webcam.attach('#my_camera');
        }

        // ini integrasi kartu
        document.getElementById('TujuanLokasiSelect').addEventListener('change', function() {
            const kartuInput = document.getElementById('KartuInput');
            const selectedOption = this.options[this.selectedIndex].value;

            if (selectedOption.includes('Level 2')) {
                kartuInput.value = 'SILAHKAN AMBIL KARTU BERWARNA KUNING DI SECURITY !!';
            } else if (selectedOption.includes('Level 3')) {
                kartuInput.value = 'SILAHKAN AMBIL KARTU BERWARNA KUNING DI SECURITY !!';
            } else {
                kartuInput.value = 'TANPA MENGGUNAKAN KARTU';
            }
        });
    </script>

    <style>
        #camera_wrapper img {
            max-width: 320px;
            max-height: 240px;
        }
    </style>
@endsection
