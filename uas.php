<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Penggajihan Guru/Karyawan Yayasan Assalaam</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <img src="download.png" alt="Logo" class="img-fluid d-block mx-auto">
        <h3 class="text-center"><b>PENGGAJIHAN</b></h3>
        <h5 class="text-center"><b>GURU/KARYAWAN YAYASAN ASSALAAM</b></h5>

        <!-- Form -->
        <form action="iya.php" method="POST">
            <!-- Data Diri -->
            <div class="card mb-4">
                <div class="card-header"><b>Data Diri</b></div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="no" class="form-label">No</label>
                        <input type="number" class="form-control" id="no" name="no" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="major" class="form-label">Unit Pendidikan</label>
                        <select class="form-select" id="major" name="unit" required>
                            <option value="">Pilih Unit Pendidikan</option>
                            <option value="tk">TK</option>
                            <option value="sd">SD</option>
                            <option value="smp">SMP</option>
                            <option value="smk">SMK</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_gaji" class="form-label">Tanggal Gaji</label>
                        <input type="date" class="form-control" id="tanggal_gaji" name="tanggal_gaji" required>
                    </div>
                </div>
            </div>

            <!-- Gaji -->
            <div class="card mb-4">
                <div class="card-header"><b>Gaji</b></div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <select class="form-select" id="jabatan" name="jabatan" required>
                            <option value="">Pilih Jabatan</option>
                            <option value="kepala sekolah">Kepala Sekolah</option>
                            <option value="wakasek">Wakasek</option>
                            <option value="guru">Guru</option>
                            <option value="ob">OB</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="lama_kerja" class="form-label">Lama Kerja (Tahun)</label>
                        <input type="number" class="form-control" id="lama_kerja" name="lama_kerja" required>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status Kerja</label>
                        <select class="form-select" id="status" name="status" required>
                            <option value="">Pilih Status Kerja</option>
                            <option value="tetap">Tetap</option>
                            <option value="kontrak">Kontrak</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Potongan -->
            <div class="card mb-4">
                <div class="card-header"><b>Potongan</b></div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="BPJS" class="form-label">BPJS</label>
                        <input type="number" class="form-control" id="BPJS" name="BPJS" required>
                    </div>
                    <div class="mb-3">
                        <label for="pinjaman" class="form-label">Pinjaman</label>
                        <input type="number" class="form-control" id="pinjaman" name="pinjaman" required>
                    </div>
                    <div class="mb-3">
                        <label for="cicilan" class="form-label">Cicilan</label>
                        <input type="number" class="form-control" id="cicilan" name="cicilan" required>
                    </div>
                    <div class="mb-3">
                        <label for="infaq" class="form-label">Infaq</label>
                        <input type="number" class="form-control" id="infaq" name="infaq" required>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
