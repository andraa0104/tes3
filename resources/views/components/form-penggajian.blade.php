<x-layout>

    {{-- <x-slot:title>{{ $title }}</x-slot:title> --}}
    <div class="page-wrapper">
        <div class="content">

            <div class="comp-section">
                <div class="section-header">
                    <h3 class="section-title">Formulir Pembayaran Gaji</h3>
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
                                                Absensi </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#progress-bank-detail" class="nav-link" data-toggle="tab">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Payment Details">
                                                Gaji Pokok dan Tunjangan </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#progress-bank-detail1" class="nav-link" data-toggle="tab">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Payment Details">
                                                Potongan </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#progress-bank-detail2" class="nav-link" data-toggle="tab">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Payment Details">
                                                Pendapatan Bersih </div>
                                        </a>
                                    </li>

                                </ul>

                                <div id="bar" class="mt-4 progress">
                                    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated">
                                    </div>
                                </div>
                                <form action="{{ route('gaji.store') }}" method = "POST">
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
                                                <div class="col-lg-3">
                                                    <div class="mb-3">
                                                        <label for="progresspill-phoneno-input">Jabatan</label>
                                                        <input type="text" class="form-control"
                                                            id="progresspill-phoneno-input" name="jabatan">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
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
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-email-input">Nomor
                                                                Rekening</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-email-input" name="norek">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-email-input">Nama Bank</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-email-input" name="namabank">
                                                        </div>
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
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="progresspill-pancard-input"
                                                                class="form-label">Hari Efektif Kerja</label>
                                                            <input type="text" class="form-control"
                                                                id="hariefektif" onkeyup="hitungHasil()"
                                                                name="hariefektifkerja">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="progresspill-pancard-input"
                                                                class="form-label">Hari Kerja</label>
                                                            <input type="text" class="form-control" id="harikerja"
                                                                name="harikerja" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="progresspill-vatno-input"
                                                                class="form-label">Sakit</label>
                                                            <input type="text" class="form-control" id="sakit"
                                                                name="sakitkerja" onkeyup="hitungHasil()">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="progresspill-cstno-input"
                                                                class="form-label">Izin</label>
                                                            <input type="text" class="form-control" id="izin"
                                                                onkeyup="hitungHasil()" name="izinkerja">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="progresspill-servicetax-input"
                                                                class="form-label">Alfa</label>
                                                            <input type="text" class="form-control" id="alfa"
                                                                onkeyup="hitungHasil()" name="alfakerja">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="progresspill-servicetax-input"
                                                                class="form-label">Cuti</label>
                                                            <input type="text" class="form-control" id="cuti"
                                                                onkeyup="hitungHasil()" name="cutikerja">
                                                        </div>
                                                    </div>

                                                </div>
                                                <script>
                                                    function hitungHasil() {
                                                        // Mengambil nilai dari input
                                                        let hari = document.getElementById('hariefektif').value;
                                                        let tidakhadir = document.getElementById('alfa').value;
                                                        let sakit = document.getElementById('sakit').value;
                                                        let cuti = document.getElementById('cuti').value;
                                                        let izinhadir = document.getElementById('izin').value;

                                                        let hitung, hitung2;
                                                        if (tidakhadir == 0) {
                                                            hitung = 1000000
                                                        } else {
                                                            hitung = 1000000 - parseInt((1000000 / hari) * tidakhadir);
                                                        }
                                                        hitung2 = hari - tidakhadir - sakit - cuti - izinhadir;
                                                        // Menampilkan hasil
                                                        document.getElementById('harikerja').value = hitung2;
                                                        document.getElementById('tunjanganmakan').value = hitung; // Menampilkan 6 angka desimal
                                                    }
                                                </script>



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
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-pancard-input"
                                                                class="form-label">Gaji Pokok</label>
                                                            <input type="text" class="form-control" id="gapok"
                                                                onkeyup= "hitungpotongan()" name="gajipokok">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-vatno-input"
                                                                class="form-label">Tunjangan Makan</label>
                                                            <input type="text" class="form-control"
                                                                id="tunjanganmakan" readonly name="tunjanganmakan">
                                                        </div>
                                                    </div>
                                                </div>



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
                                                <div class="mb-4 card-header">

                                                    <h5 card-title mb-0>BPJS</h5>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="progresspill-pancard-input"
                                                                class="form-label">BPJS Kesehatan 1%</label>
                                                            <input type="text" class="form-control" id="kesehatan"
                                                                readonly name="kesehatan">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="progresspill-vatno-input"
                                                                class="form-label">BPJS
                                                                TK JKK 1,74%</label>
                                                            <input type="text" class="form-control" id="jkk"
                                                                readonly name="jkk">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="progresspill-cstno-input"
                                                                class="form-label">BPJS
                                                                TK JKM 0,3%</label>
                                                            <input type="text" class="form-control" id="jkm"
                                                                readonly name="jkm">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-cstno-input"
                                                                class="form-label">BPJS
                                                                TK JHT 2%</label>
                                                            <input type="text" class="form-control" id="jht"
                                                                readonly name="jht">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-servicetax-input"
                                                                class="form-label">BPJS TK JP 2%</label>
                                                            <input type="text" class="form-control" id="jp"
                                                                readonly name="jp">
                                                        </div>
                                                    </div>
                                                </div>
                                                <script>
                                                    function hitungpotongan() {

                                                        let gajipokok = document.getElementById('gapok').value;
                                                        let tunjangan = document.getElementById('tunjanganmakan').value;
                                                        let pph = document.getElementById('pph21').value;
                                                        let pinjaman = document.getElementById('pinjamanuang').value;


                                                        hitungkesehatan = parseInt(gajipokok * 0.01);
                                                        hitungjkk = parseInt(gajipokok * 0.0174);
                                                        hitungjkm = parseInt(gajipokok * 0.003);
                                                        hitungjht = parseInt(gajipokok * 0.02);
                                                        hitungjp = parseInt(gajipokok * 0.02);


                                                        document.getElementById('kesehatan').value = hitungkesehatan;
                                                        document.getElementById('jkk').value = hitungjkk;
                                                        document.getElementById('jkm').value = hitungjkm;
                                                        document.getElementById('jht').value = hitungjht;
                                                        document.getElementById('jp').value = hitungjp;

                                                    }
                                                </script>
                                                <div class="mb-4 card-header">

                                                    <h5 card-title mb-0>Potongan Lainnya</h5>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-pancard-input"
                                                                class="form-label">PPh
                                                                21</label>
                                                            <input type="text" class="form-control" id="pph21"
                                                                name="pph21">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="progresspill-vatno-input"
                                                                class="form-label">Pinjaman Uang</label>
                                                            <input type="text" class="form-control"
                                                                id="pinjamanuang" name="pinjaman">
                                                        </div>
                                                    </div>
                                                    <script>
                                                        function hitungcicilan() {
                                                            let pinjaman = document.getElementById('pinjamanuang').value;
                                                            let cicil = document.getElementById('cicilbulan').value;

                                                            hitungcicilan = cicil * pinjaman;

                                                            document.getElementById('pinjamanuang').value = hitungcicilan;

                                                        }
                                                    </script>

                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="progresspill-cstno-input"
                                                                class="form-label">Cicilan Per Bulan</label>
                                                            <input type="text" class="form-control"
                                                                id="cicilbulan" onkeyup= "hitungcicilan()"
                                                                name="cicilan">
                                                        </div>
                                                    </div>

                                                </div>




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


                                        <div class="tab-pane" id="progress-bank-detail2">
                                            <div>
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="progresspill-namecard-input"
                                                                class="form-label">Pendapatan Kotor</label>
                                                            <input type="text" class="form-control"
                                                                id="pendapatankotor" readonly name="gajikotor">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="progresspill-expiration-input"
                                                                class="form-label">Potongan</label>
                                                            <input type="text" class="form-control"
                                                                id="potongangaji" readonly name="potongan">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">

                                                            <a href="javascript: void(0);" class="btn btn-primary"
                                                                data-bs-toggle="modal" data-bs-target=".confirmModal"
                                                                onclick="hitunggaji()">Hitung Gaji</a>
                                                        </div>
                                                    </div>
                                                    <script>
                                                        function hitunggaji() {
                                                            const pinjaman = parseInt(document.getElementById('pinjamanuang').value);
                                                            const gajipokok = parseInt(document.getElementById('gapok').value);
                                                            const tunjangan = parseInt(document.getElementById('tunjanganmakan').value);
                                                            const pph = parseInt(document.getElementById('pph21').value);
                                                            const hitungkesehatan = parseInt(document.getElementById('kesehatan').value);
                                                            const hitungjkk = parseInt(document.getElementById('jkk').value);
                                                            const hitungjkm = parseInt(document.getElementById('jkm').value);
                                                            const hitungjht = parseInt(document.getElementById('jht').value);
                                                            const hitungjp = parseInt(document.getElementById('jp').value);




                                                            const hitungkotor = gajipokok + tunjangan;
                                                            const hitungpotongan = hitungkesehatan + hitungjkk + hitungjkm + hitungjht + hitungjp + pph + pinjaman;
                                                            const hitungbersih = hitungkotor - hitungpotongan;


                                                            document.getElementById('pendapatankotor').value = hitungkotor;
                                                            document.getElementById('potongangaji').value = hitungpotongan;
                                                            document.getElementById('gajitransfer').value = hitungbersih;

                                                        }
                                                    </script>

                                                </div>
                                                <div class="row">
                                                    <div class="mb-3">
                                                        <label for="progresspill-expiration-input"
                                                            class="form-label">Gaji
                                                            yang Ditransfer</label>
                                                        <input type="text" class="form-control" id="gajitransfer"
                                                            readonly name="gajibersih">
                                                    </div>
                                                </div>

                                            </div>
                                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                <li class="previous"><a href="javascript: void(0);"
                                                        class="btn btn-primary" onclick="nextTab()"><i
                                                            class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                <button type="submit" class="btn btn-primary">Save
                                                    Changes</button>
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
