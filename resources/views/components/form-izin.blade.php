<x-layout>
    {{-- <x-slot:title>{{ $title }}</x-slot:title> --}}
    <div class="page-wrapper">
        <div class="content">

            <div class="comp-section">
                <div class="section-header">
                    <h3 class="section-title">Formulir Pengajuan Izin</h3>
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
                                                title="User Details"> Data Pegawai
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#progress-company-document" class="nav-link" data-toggle="tab">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Address Detail">
                                                Pengajuan Izin </div>
                                        </a>
                                    </li>

                                </ul>

                                <div id="bar" class="mt-4 progress">
                                    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated">
                                    </div>
                                </div>
                                <form action="{{ route('izin.store') }}" method="POST">
                                    @csrf
                                    <div class="tab-content twitter-bs-wizard-tab-content">
                                        <div class="tab-pane" id="progress-seller-details">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="progresspill-firstname-input">Nomor Induk
                                                            Kepegawaian</label>
                                                        <input type="text" class="form-control"
                                                            id="progresspill-firstname-input" name="nip">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="progresspill-lastname-input">Nama
                                                            Lengkap</label>
                                                        <input type="text" class="form-control"
                                                            id="progresspill-lastname-input" name="nama">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="progresspill-phoneno-input">Jabatan</label>
                                                        <input type="text" class="form-control"
                                                            id="progresspill-phoneno-input" name="jabatan">
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
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">

                                                            <div class="form-group">
                                                                <label class="d-block">Jenis Izin:</label>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="jenisizin" id="gender_male"
                                                                        value="Izin" />
                                                                    <label class="form-check-label"
                                                                        for="gender_male">Izin</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="jenisizin" id="gender_female"
                                                                        value="Sakit" />
                                                                    <label class="form-check-label"
                                                                        for="gender_female">Sakit</label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <label>Tanggal Izin </label>
                                                            <div class="input-groupicon">
                                                                <input type="date" placeholder="Choose Date"
                                                                    class=" myID form-control" id="mulaiizin"
                                                                    for="myID" name="mulai">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <label>Tanggal Aktif Kerja </label>
                                                            <div class="input-groupicon">
                                                                <input type="date" placeholder="Choose Date"
                                                                    class=" myID form-control" id="selesaiizin"
                                                                    for="myID" name="selesai">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="mb-3">
                                                            <label for="progresspill-phoneno-input">Jumlah
                                                                Izin</label>
                                                            <input type="text" class="form-control"
                                                                id="jumlahhari" readonly name=jumlahizin>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-lg-0">
                                                    <div class="mb-3">
                                                        <div class="form-group">
                                                            <label>Alasan</label>
                                                            <textarea rows="5" cols="5" class="form-control" placeholder="Enter message" name="keterangan"></textarea>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>



                                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                <li class="previous"><a href="javascript: void(0);"
                                                        class="btn btn-primary" onclick="nextTab()"><i
                                                            class="bx bx-chevron-left me-1"></i> Previous</a>
                                                </li>
                                                <button type="submit" class="btn btn-primary">Ajukan
                                                </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                            </div>

                            </form>
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    const mulaiInput = document.getElementById('mulaiizin');
                                    const selesaiInput = document.getElementById('selesaiizin');
                                    const jumlahInput = document.getElementById('jumlahhari');

                                    function calculateDays() {
                                        const mulaiDate = new Date(mulaiInput.value);
                                        const selesaiDate = new Date(selesaiInput.value);
                                        if (mulaiInput.value && selesaiInput.value) {
                                            const timeDiff = selesaiDate - mulaiDate;
                                            const dayDiff = Math.ceil(timeDiff / (1000 * 3600 *
                                            24)); // Tambah 1 untuk menghitung hari mulai
                                            jumlahInput.value = dayDiff >= 0 ? dayDiff : 0; // Pastikan tidak negatif
                                        } else {
                                            jumlahInput.value = ''; // Reset jika salah satu input kosong
                                        }
                                    }

                                    mulaiInput.addEventListener('change', calculateDays);
                                    selesaiInput.addEventListener('change', calculateDays);
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</x-layout>
