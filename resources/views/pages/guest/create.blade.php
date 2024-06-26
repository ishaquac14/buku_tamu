@extends('layouts.app')

@section('body')
    <div class="container px-5">
        <form action="{{ route('guest.store') }}" method="POST">
            @csrf
            <div class="row d-flex flex-wrap">
                <div class="text-center mb-5">
                    <h6 class="display-7 fw-bolder mt-5"><span class="text-gradient d-inline">-- ISI DATA DIRI ANDA --</span>
                    </h6>
                </div>
                <div class="col-md-6 mt-2">
                    <input type="text" class="form-control" name="nik" placeholder="NIK KTP/PASSPORT" required>
                </div>
                <div class="col-md-6 mt-2">
                    <input type="text" class="form-control" name="nama" placeholder="NAMA LENGKAP" required>
                </div>
                <div class="col-md-12 mt-4">
                    <input type="text" class="form-control" name="asal_perusahaan" placeholder="ASAL PERUSAHAAN"
                        required>
                </div>
                <div class="col-md-4 mt-4">
                    <input type="text" class="form-control" name="nama_pic" placeholder="NAMA PIC YANG DITUJU" required>
                </div>
                <div class="col-md-4 mt-4">
                    <select name="departemen" class="form-select" id="DepartemenSelect" contenteditable="true" required>
                        <option value="" disabled selected>--Departemen--</option>
                        <option value="Advisor">Advisor</option>
                        <option value="ENG & QA Electric Components">ENG & QA Electric Components</option>
                        <option value="Engineering Body">Engineering Body</option>
                        <option value="Engineering Unit">Engineering Unit</option>
                        <option value="Human Resources Development & General Affairs">Human Resources Development & General
                            Affairs</option>
                        <option value="Industrial Relation & Legal">Industrial Relation & Legal</option>
                        <option value="Information Technology Development">Information Technology Development</option>
                        <option value="Machine Maintenance">Machine Maintenance</option>
                        <option value="Maintenance">Maintenance</option>
                        <option value="Management System">Management System</option>
                        <option value="Plant Director">Plant Director</option>
                        <option value="President Director">President Director</option>
                        <option value="Production Body">Production Body</option>
                        <option value="Production Electric Components">Production Electric Components</option>
                        <option value="Production Planning & Inventory Control">Production Planning & Inventory Control
                        </option>
                        <option value="Production Planning & Inventory Control Electric Components">Production Planning &
                            Inventory Control Electric Components</option>
                        <option value="Procuction System & Development">Procuction System & Development</option>
                        <option value="Production Unit DC">Production Unit DC</option>
                        <option value="Production Unit MA">Production Unit MA</option>
                        <option value="Quality Body">Quality Body</option>
                        <option value="Quality Unit">Quality Unit</option>
                        <option value="Vice President Director">Vice President Director</option>
                        <option value="Tidak Ada">--Tidak Ada--</option>
                    </select>
                </div>
                <div class="col-md-4 mt-4">
                    <select name="tujuan_lokasi" class="form-select" id="TujuanLokasiSelect" required>
                        <option value="" disabled selected>--Tujuan Lokasi--</option>
                        <option value="Level 0 - Loker">Level 0 - Loker</option>
                        <option value="Level 0 - Parkiran Mobil">Level 0 - Parkiran Mobil</option>
                        <option value="Level 0 - Parkiran Motor">Level 0 - Parkiran Motor</option>
                        <option value="Level 1 - Kantin">Level 1 - Kantin</option>
                        <option value="Level 1 - Mushola">Level 1 - Mushola</option>
                        <option value="Level 1 - Lobi">Level 1 - Lobi</option>
                        <option value="Level 2 - Unit Plant">Level 2 - Unit Plant</option>
                        <option value="Level 2 - Body Plant">Level 2 - Body Plant</option>
                        <option value="Level 2 - Office Lt.1/2">Level 2 - Office Lt.1/2</option>
                        <option value="Level 3 - Gardu Listrik">Level 3 - Gardu Listrik</option>
                        <option value="Level 3 - Ruangan Server">Level 3 - Ruangan Server</option>
                        <option value="Level 3 - Water Tank">Level 3 - Water Tank</option>
                        <option value="Level 3 - Area Gas PGN">Level 3 - Area Gas PGN</option>
                    </select>
                </div>
                <div class="col-md-12 mt-4">
                    <textarea class="form-control" name="tujuan" placeholder="TUJUAN" rows="5" required></textarea>
                </div>

                <!-- Page Content-->
                <div class="container px-5 my-5">
                    <div class="text-center mb-5">
                        <h5 class="display-7 fw-bolder mb-0"><span class="text-gradient d-inline">GASG - Education</span>
                        </h5>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            <!-- Experience Section-->
                            <section>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <h5 class="text-primary fw-bolder mb-0">>> Taking Foto</h5>
                                    <!-- Download resume button-->
                                    <!-- Note: Set the link href target to a PDF file within your project-->
                                    {{-- <a class="btn btn-primary px-4 py-3" href="#!">
                                        <div class="d-inline-block bi bi-download me-2"></div>
                                        Download Resume
                                    </a> --}}
                                </div>
                                <!-- Experience Card 1-->
                                <div class="card shadow border-0 rounded-4 mb-5">
                                    <div class="card-body p-5">
                                        <div class="row align-items-center gx-5">
                                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                                <div class="bg-light p-4 rounded-4">
                                                    <div class="text-primary fw-bolder mb-2">2019 - Present</div>
                                                    <div class="small fw-bolder">Web Developer</div>
                                                    <div class="small text-muted">Stark Industries</div>
                                                    <div class="small text-muted">Los Angeles, CA</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus
                                                    laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet
                                                    officiis corporis sed aliquam non voluptate corrupti excepturi maxime
                                                    porro
                                                    fuga.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Experience Card 2-->
                                <div class="card shadow border-0 rounded-4 mb-5">
                                    <div class="card-body p-5">
                                        <div class="row align-items-center gx-5">
                                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                                <div class="bg-light p-4 rounded-4">
                                                    <div class="text-primary fw-bolder mb-2">2017 - 2019</div>
                                                    <div class="small fw-bolder">SEM Specialist</div>
                                                    <div class="small text-muted">Wayne Enterprises</div>
                                                    <div class="small text-muted">Gotham City, NY</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus
                                                    laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet
                                                    officiis corporis sed aliquam non voluptate corrupti excepturi maxime
                                                    porro
                                                    fuga.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Education Section-->
                            <section>
                                <h5 class="text-secondary fw-bolder mb-4">>> Education</h5>
                                <!-- Education Card 1-->
                                <div class="card shadow border-0 rounded-4 mb-5">
                                    <div class="card-body p-5">
                                        <div class="row align-items-center gx-5">
                                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                                <div class="bg-light p-4 rounded-4">
                                                    <div class="text-secondary fw-bolder mb-2">2015 - 2017</div>
                                                    <div class="mb-2">
                                                        <div class="small fw-bolder">Barnett College</div>
                                                        <div class="small text-muted">Fairfield, NY</div>
                                                    </div>
                                                    <div class="fst-italic">
                                                        <div class="small text-muted">Master's</div>
                                                        <div class="small text-muted">Web Development</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus
                                                    laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet
                                                    officiis corporis sed aliquam non voluptate corrupti excepturi maxime
                                                    porro
                                                    fuga.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Education Card 2-->
                                <div class="card shadow border-0 rounded-4 mb-5">
                                    <div class="card-body p-5">
                                        <div class="row align-items-center gx-5">
                                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                                <div class="bg-light p-4 rounded-4">
                                                    <div class="text-secondary fw-bolder mb-2">2011 - 2015</div>
                                                    <div class="mb-2">
                                                        <div class="small fw-bolder">ULA</div>
                                                        <div class="small text-muted">Los Angeles, CA</div>
                                                    </div>
                                                    <div class="fst-italic">
                                                        <div class="small text-muted">Undergraduate</div>
                                                        <div class="small text-muted">Computer Science</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus
                                                    laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet
                                                    officiis corporis sed aliquam non voluptate corrupti excepturi maxime
                                                    porro
                                                    fuga.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>

                {{-- Webcam --}}
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="text-center">
                            <h5 class="text-secondary fw-bolder mb-4">FOTO DULU !!</h5>
                            <div class="row justify-content-center align-items-center" id="camera_wrapper">
                                <div id="my_camera"></div>
                            </div>
                            <br>
                            <div class="me-2">
                                <input type="button" value="Ambil Foto" onclick="take_snapshot()"
                                    class="btn btn-secondary me-2 ms-4">
                                <input type="button" value="Ulangi Foto" onclick="retake_snapshot()"
                                    class="btn btn-secondary">
                                <input type="hidden" name="image" class="image-tag">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="mt-5 mb-4 text-center">
                        <div class="">
                            <button class="btn btn-primary">SIMPAN</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Add WebcamJS library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js"></script>
    <script language="JavaScript">
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
    </script>

    <style>
        #camera_wrapper img {
            max-width: 320px;
            max-height: 240px;
        }
    </style>
@endsection
