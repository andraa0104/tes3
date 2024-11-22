<x-layout>
    {{-- <x-slot:title>{{ $title }}</x-slot:title> --}}
    <div class="page-wrapper">
        <div class="content">

            <div class="comp-section">
                <div class="section-header">
                    <h3 class="section-title">Input Data Pegawai</h3>
                    <div class="line"></div>
                </div>
                <div class="row">
                    <div class="card bg-white">
                        <div class="card-body">
                            <div id="progrss-wizard" class="twitter-bs-wizard">
                                <ul class="nav nav-tabs nav-tabs-solid  nav-justified">
                                    <li class="nav-item">
                                        <a href="#progress-seller-details" class="nav-link" data-toggle="tab">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="User Details"> Data Diri
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#progress-company-document" class="nav-link" data-toggle="tab">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Address Detail">
                                                Pendidikan </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#progress-bank-detail" class="nav-link" data-toggle="tab">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Payment Details">
                                                Pengalaman Kerja </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#progress-bank-detail1" class="nav-link" data-toggle="tab">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Payment Details">
                                                Lainnya </div>
                                        </a>
                                    </li>
                                </ul>

                                <div id="bar" class="progress mt-4">
                                    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated">
                                    </div>
                                </div>
                                <div class="tab-content twitter-bs-wizard-tab-content">
                                    <div class="tab-pane" id="progress-seller-details">
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="progresspill-firstname-input">Nomor Induk
                                                            Kependudukan</label>
                                                        <input type="text" class="form-control"
                                                            id="progresspill-firstname-input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="progresspill-lastname-input">Nama
                                                            Lengkap</label>
                                                        <input type="text" class="form-control"
                                                            id="progresspill-lastname-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="progresspill-phoneno-input">Tempat Lahir</label>
                                                        <input type="text" class="form-control"
                                                            id="progresspill-phoneno-input">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Tanggal Lahir </label>
                                                        <div class="input-groupicon">
                                                            <input type="date" placeholder="Choose Date"
                                                                class=" myID form-control" id="myID"
                                                                for="myID">
                                                            <script>
                                                                flatpickr(".myID");
                                                            </script>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="progresspill-email-input">Nomor Handphone</label>
                                                        <input type="email" class="form-control"
                                                            id="progresspill-email-input">
                                                    </div>
                                                </div>





                                                <div class="col-lg-6">
                                                    <div class="mb-3">

                                                        <div class="form-group">
                                                            <label class="d-block">Gender:</label>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="gender" id="gender_male" value="Laki-laki" />
                                                                <label class="form-check-label"
                                                                    for="gender_male">Male</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="gender" id="gender_female"
                                                                    value="Perempuan" />
                                                                <label class="form-check-label"
                                                                    for="gender_female">Female</label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-lg-0">
                                                    <div class="mb-3">
                                                        <div class="form-group">
                                                            <label>Alamat Lengkap</label>
                                                            <textarea rows="5" cols="5" class="form-control" placeholder="Enter message"></textarea>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-3">

                                                        <div class="form-group">
                                                            <label class="d-block">Golongan Darah:</label>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="gender" id="gender_male" value="A" />
                                                                <label class="form-check-label"
                                                                    for="gender_male">A</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="gender" id="gender_female"
                                                                    value="B" />
                                                                <label class="form-check-label"
                                                                    for="gender_female">B</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="gender" id="gender_female"
                                                                    value="AB" />
                                                                <label class="form-check-label"
                                                                    for="gender_female">AB</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="gender" id="gender_female"
                                                                    value="O" />
                                                                <label class="form-check-label"
                                                                    for="gender_female">O</label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-3">

                                                        <div class="form-group">
                                                            <label class="d-block">Agama:</label>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="gender" id="gender_male" value="Islam" />
                                                                <label class="form-check-label"
                                                                    for="gender_male">Islam</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="gender" id="gender_female"
                                                                    value="Kristen" />
                                                                <label class="form-check-label"
                                                                    for="gender_female">Kristen</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="gender" id="gender_female"
                                                                    value="Katholik" />
                                                                <label class="form-check-label"
                                                                    for="gender_female">Katholik</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="gender" id="gender_female"
                                                                    value="Hindu" />
                                                                <label class="form-check-label"
                                                                    for="gender_female">Hindu</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="gender" id="gender_female"
                                                                    value="Budha" />
                                                                <label class="form-check-label"
                                                                    for="gender_female">Budha</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="gender" id="gender_female"
                                                                    value="Konghuchu" />
                                                                <label class="form-check-label"
                                                                    for="gender_female">Konghuchu</label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>



                                            </div>
                                        </form>
                                        <ul class="pager wizard twitter-bs-wizard-pager-link">
                                            <li class="next"><a href="javascript: void(0);" class="btn btn-primary"
                                                    onclick="nextTab()">Next <i
                                                        class="bx bx-chevron-right ms-1"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="progress-company-document">
                                        <div>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-pancard-input"
                                                                class="form-label">Nama Sekolah</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-pancard-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-vatno-input"
                                                                class="form-label">Jurusan</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-vatno-input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-cstno-input"
                                                                class="form-label">IPK Atau Nilai Rata-rata</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-cstno-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-servicetax-input"
                                                                class="form-label">Nomor Ijasah</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-servicetax-input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                <li class="previous"><a href="javascript: void(0);"
                                                        class="btn btn-primary" onclick="nextTab()"><i
                                                            class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                <li class="next"><a href="javascript: void(0);"
                                                        class="btn btn-primary" onclick="nextTab()">Next <i
                                                            class="bx bx-chevron-right ms-1"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="progress-bank-detail">
                                        <div>
                                            <form>
                                                <div class="mb-4 card-header">

                                                    <h5 card-title mb-0>Pengalaman Kerja 1</h5>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-pancard-input"
                                                                class="form-label">Nama Perusahaan</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-pancard-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-vatno-input"
                                                                class="form-label">Departemen</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-vatno-input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-cstno-input"
                                                                class="form-label">Jabatan</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-cstno-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-servicetax-input"
                                                                class="form-label">Alamat Perusahaan</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-servicetax-input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-servicetax-input"
                                                                class="form-label">Alasan Keluar</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-servicetax-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">

                                                            <div class="form-group">
                                                                <label>Tanggal Masuk </label>
                                                                <div class="input-groupicon">
                                                                    <input type="date" placeholder="Choose Date"
                                                                        class=" myID form-control" id="myID"
                                                                        for="myID">
                                                                    <script>
                                                                        flatpickr(".myID");
                                                                    </script>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">

                                                            <div class="form-group">
                                                                <label>Tanggal Keluar </label>
                                                                <div class="input-groupicon">
                                                                    <input type="date" placeholder="Choose Date"
                                                                        class=" myID form-control" id="myID"
                                                                        for="myID">
                                                                    <script>
                                                                        flatpickr(".myID");
                                                                    </script>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">

                                                        <div class="col-lg-0">
                                                            <div class="mb-3">
                                                                <div class="form-group">
                                                                    <label>Deskripsi Pekerjaan</label>
                                                                    <textarea rows="5" cols="5" class="form-control" placeholder="Enter message"></textarea>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>

                                                <div class="mb-4 card-header">

                                                    <h5 card-title mb-0>Pengalaman Kerja 2</h5>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-pancard-input"
                                                                class="form-label">Nama Perusahaan</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-pancard-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-vatno-input"
                                                                class="form-label">Departemen</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-vatno-input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-cstno-input"
                                                                class="form-label">Jabatan</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-cstno-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-servicetax-input"
                                                                class="form-label">Alamat Perusahaan</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-servicetax-input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-servicetax-input"
                                                                class="form-label">Alasan Keluar</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-servicetax-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">

                                                            <div class="form-group">
                                                                <label>Tanggal Masuk </label>
                                                                <div class="input-groupicon">
                                                                    <input type="date" placeholder="Choose Date"
                                                                        class=" myID form-control" id="myID"
                                                                        for="myID">
                                                                    <script>
                                                                        flatpickr(".myID");
                                                                    </script>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">

                                                            <div class="form-group">
                                                                <label>Tanggal Keluar </label>
                                                                <div class="input-groupicon">
                                                                    <input type="date" placeholder="Choose Date"
                                                                        class=" myID form-control" id="myID"
                                                                        for="myID">
                                                                    <script>
                                                                        flatpickr(".myID");
                                                                    </script>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">

                                                        <div class="col-lg-0">
                                                            <div class="mb-3">
                                                                <div class="form-group">
                                                                    <label>Deskripsi Pekerjaan</label>
                                                                    <textarea rows="5" cols="5" class="form-control" placeholder="Enter message"></textarea>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>


                                                <div class="mb-4 card-header">

                                                    <h5 card-title mb-0>Pengalaman Kerja 3</h5>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-pancard-input"
                                                                class="form-label">Nama Perusahaan</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-pancard-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-vatno-input"
                                                                class="form-label">Departemen</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-vatno-input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-cstno-input"
                                                                class="form-label">Jabatan</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-cstno-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-servicetax-input"
                                                                class="form-label">Alamat Perusahaan</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-servicetax-input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-servicetax-input"
                                                                class="form-label">Alasan Keluar</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-servicetax-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">

                                                            <div class="form-group">
                                                                <label>Tanggal Masuk </label>
                                                                <div class="input-groupicon">
                                                                    <input type="date" placeholder="Choose Date"
                                                                        class=" myID form-control" id="myID"
                                                                        for="myID">
                                                                    <script>
                                                                        flatpickr(".myID");
                                                                    </script>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">

                                                            <div class="form-group">
                                                                <label>Tanggal Keluar </label>
                                                                <div class="input-groupicon">
                                                                    <input type="date" placeholder="Choose Date"
                                                                        class=" myID form-control" id="myID"
                                                                        for="myID">
                                                                    <script>
                                                                        flatpickr(".myID");
                                                                    </script>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">

                                                        <div class="col-lg-0">
                                                            <div class="mb-3">
                                                                <div class="form-group">
                                                                    <label>Deskripsi Pekerjaan</label>
                                                                    <textarea rows="5" cols="5" class="form-control" placeholder="Enter message"></textarea>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>

                                            </form>
                                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                <li class="previous"><a href="javascript: void(0);"
                                                        class="btn btn-primary" onclick="nextTab()"><i
                                                            class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                <li class="next"><a href="javascript: void(0);"
                                                        class="btn btn-primary" onclick="nextTab()">Next <i
                                                            class="bx bx-chevron-right ms-1"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="progress-bank-detail1">
                                        <div>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-namecard-input"
                                                                class="form-label">Nomor Induk Kepegawaian</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-namecard-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-expiration-input"
                                                                class="form-label">Nomor Pokok Wajib Pajak</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-expiration-input">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">

                                                            <div class="form-group">
                                                                <label class="d-block">Jenis SIM:</label>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="gender" id="gender_male"
                                                                        value="A" />
                                                                    <label class="form-check-label"
                                                                        for="gender_male">A</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="gender" id="gender_female"
                                                                        value="B Umum" />
                                                                    <label class="form-check-label"
                                                                        for="gender_female">B Umum</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="gender" id="gender_female"
                                                                        value="B I" />
                                                                    <label class="form-check-label"
                                                                        for="gender_female">B I</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="gender" id="gender_female"
                                                                        value="B II" />
                                                                    <label class="form-check-label"
                                                                        for="gender_female">B II</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="gender" id="gender_female"
                                                                        value="C" />
                                                                    <label class="form-check-label"
                                                                        for="gender_female">C</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="gender" id="gender_female"
                                                                        value="D" />
                                                                    <label class="form-check-label"
                                                                        for="gender_female">D</label>
                                                                </div>
                                                            </div>



                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-card-verification-input"
                                                                class="form-label">Nomor SIM</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-card-verification-input">
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Status Perkawinan</label>
                                                                    <select class="form-select">
                                                                        <option selected>Pilih Opsi</option>
                                                                        <option value="Lajang">Lajang</option>
                                                                        <option value="Menikah">Menikah</option>
                                                                        <option value="Cerai Hidup">Cerai Hidup
                                                                        </option>
                                                                        <option value="Cerai Mati">Cerai Mati</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="progresspill-cardno-input"
                                                                        class="form-label">Jumlah Anak</label>
                                                                    <input type="text" class="form-control"
                                                                        id="progresspill-cardno-input">
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="row">

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-card-verification-input"
                                                                class="form-label">Nomor SK Kontrak Kerja</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-card-verification-input">
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">

                                                            <div class="form-group">
                                                                <label>Tanggal Masuk Kerja </label>
                                                                <div class="input-groupicon">
                                                                    <input type="date" placeholder="Choose Date"
                                                                        class=" myID form-control" id="myID"
                                                                        for="myID">
                                                                    <script>
                                                                        flatpickr(".myID");
                                                                    </script>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <div class="mb-3">

                                                            <div class="form-group">
                                                                <label>Tanggal Kontrak Habis </label>
                                                                <div class="input-groupicon">
                                                                    <input type="date" placeholder="Choose Date"
                                                                        class=" myID form-control" id="myID"
                                                                        for="myID">
                                                                    <script>
                                                                        flatpickr(".myID");
                                                                    </script>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="progresspill-card-verification-input"
                                                                class="form-label">Poin of Hire</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-card-verification-input">
                                                        </div>


                                                    </div>
                                                    <div class="col-lg-3">

                                                        <div class="mb-3">
                                                            <label for="progresspill-card-verification-input"
                                                                class="form-label">Penempatan</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-card-verification-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-card-verification-input"
                                                                class="form-label">Gaji Pokok</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-card-verification-input">
                                                        </div>

                                                    </div>

                                                </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="progresspill-card-verification-input"
                                                        class="form-label">Departement</label>
                                                    <input type="text" class="form-control"
                                                        id="progresspill-card-verification-input">
                                                </div>

                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="progresspill-card-verification-input"
                                                        class="form-label">Jabatan</label>
                                                    <input type="text" class="form-control"
                                                        id="progresspill-card-verification-input">
                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="progresspill-card-verification-input"
                                                        class="form-label">Nomor BPJS Kesehatan</label>
                                                    <input type="text" class="form-control"
                                                        id="progresspill-card-verification-input">
                                                </div>

                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="progresspill-card-verification-input"
                                                        class="form-label">Nomor BPJS Ketenagakerjaan</label>
                                                    <input type="text" class="form-control"
                                                        id="progresspill-card-verification-input">
                                                </div>

                                            </div>

                                        </div>

                                        </form>
                                        <ul class="pager wizard twitter-bs-wizard-pager-link">
                                            <li class="previous"><a href="javascript: void(0);"
                                                    class="btn btn-primary" onclick="nextTab()"><i
                                                        class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                            <li class="float-end"><a href="javascript: void(0);"
                                                    class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target=".confirmModal">Save Changes</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>

</x-layout>
