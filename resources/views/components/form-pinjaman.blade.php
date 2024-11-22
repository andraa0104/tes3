<x-layout>
    {{-- <x-slot:title>{{ $title }}</x-slot:title> --}}
    <div class="page-wrapper">
        <div class="content">

            <div class="comp-section">
                <div class="section-header">
                    <h3 class="section-title">Formulir Peminjaman Uang</h3>
                    <div class="line"></div>
                </div>
                <div class="row">
                    <div class="bg-white card">
                        <div class="card-body">
                            <div id="progrss-wizard" class="twitter-bs-wizard">
                                <ul class="nav nav-tabs nav-tabs-solid nav-justified">
                                    <li class="nav-item">
                                        <a href="#progress-seller-details" class="nav-link" data-toggle="tab">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="User Details"> Data Peminjam
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#progress-company-document" class="nav-link" data-toggle="tab">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Address Detail">
                                                Pinjaman Uang </div>
                                        </a>
                                    </li>
                                </ul>

                                <div id="bar" class="mt-4 progress">
                                    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated">
                                    </div>
                                </div>
                                <form action="{{ route('pinjaman.store') }}" method="POST">
                                    @csrf
                                    <div class="tab-content twitter-bs-wizard-tab-content">
                                        <div class="tab-pane" id="progress-seller-details">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="progresspill-firstname-input">Nomor Induk
                                                            Kepegawaian</label>
                                                        <input type="text" class="form-control"
                                                            id="progresspill-firstname-input" name= "nip">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="progresspill-lastname-input">Nama
                                                            Lengkap</label>
                                                        <input type="text" class="form-control"
                                                            id="progresspill-lastname-input" name = "nama">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="progresspill-phoneno-input">Jabatan</label>
                                                        <input type="text" class="form-control"
                                                            id="progresspill-phoneno-input" name = "jabatan">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="progresspill-phoneno-input">Departemen</label>
                                                        <input type="text" class="form-control"
                                                            id="progresspill-phoneno-input" name="departemen">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="progresspill-email-input">Penempatan</label>
                                                        <input type="text" class="form-control"
                                                            id="progresspill-email-input" name="penempatan">
                                                    </div>
                                                </div>




                                            </div>
                                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                <li class="next"><a href="javascript: void(0);"
                                                        class="btn btn-primary" onclick="nextTab()">Next <i
                                                            class="bx bx-chevron-right ms-1"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="progress-company-document">
                                            <div>
                                                <form>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="progresspill-namecard-input"
                                                                    class="form-label">Jumlah Uang yang Dipinjam</label>
                                                                <input type="text" class="form-control"
                                                                    id="progresspill-namecard-input"
                                                                    name="jumlah_pinjam">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="mb-3">
                                                                <label for="progresspill-expiration-input"
                                                                    class="form-label">Durasi Waktu Cicilan Per
                                                                    Bulan</label>
                                                                <input type="text" class="form-control"
                                                                    id="progresspill-expiration-input" name="cicilan">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="form-group">
                                                                <label>Tanggal Pinjam </label>
                                                                <div class="input-groupicon">
                                                                    <input type="date" placeholder="Choose Date"
                                                                        class=" myID form-control" id="myID"
                                                                        for="myID" name="tanggal_pinjam">
                                                                    <script>
                                                                        flatpickr(".myID");
                                                                    </script>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-0">
                                                            <div class="mb-3">
                                                                <div class="form-group">
                                                                    <label>Keperluan</label>
                                                                    <textarea rows="5" cols="5" class="form-control" placeholder="Deskripsikan Keperluan Peminjaman Uang"
                                                                        name="keperluan"></textarea>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                        <li class="previous"><a href="javascript: void(0);"
                                                                class="btn btn-primary" onclick="nextTab()"><i
                                                                    class="bx bx-chevron-left me-1"></i> Previous</a>
                                                        </li>
                                                        <li class="float-end"><button type= "submit"
                                                                class="btn btn-primary">Ajukan</button></li>
                                                    </ul>
                                            </div>
                                        </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>

</x-layout>
