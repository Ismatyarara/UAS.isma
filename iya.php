<?php

class Gajiku
{
    // Function nya
    public function data_aja($data)
    {
        $no = $data['no'];
        $nama = $data['name'];
        $unit_pendidikan = $data['unit'];
        $tanggal_gaji = $data['tanggal_gaji'];
        $jabatan = $data['jabatan'];
        $lama_kerja = $data['lama_kerja'];
        $status = $data['status'];
        $bpjs = $data['BPJS'];
        $pinjaman = $data['pinjaman'];
        $cicilan = $data['cicilan'];
        $infaq = $data['infaq'];
        $lain = $data['lain'];

        //total potongan
        $total_potongan = $bpjs + $pinjaman + $cicilan + $infaq + $lain;

        //gaji berdasarkan jabatan
        $gaji = $this->Jabatanku($jabatan);

        // bonus berdasarkan status kerja
        $bonus = 0;
        if ($status === "tetap") {
            $bonus = 1000000;
        }

        // Hitung gaji bersih
        $gaji_bersih = ($gaji + $bonus) - $total_potongan;

        
        echo "<center><h2><b>STUCK GAJI</b></h2></center><br><br>";
        $this->Struk($no, $nama, $unit_pendidikan, $tanggal_gaji, $jabatan, $gaji, $lama_kerja, $status, $bonus, $total_potongan, $bpjs, $pinjaman, $cicilan, $infaq, $lain, $gaji_bersih);
    }


    public function Jabatanku($jabatan)
    {
        switch ($jabatan) {
            case "kepala sekolah":
                return 10000000;
            case "wakasek":
                return 7000000;
            case "guru":
                return 5000000;
            case "ob":
                return 2500000;
            default:
                return 0;
        }
    }

    
    public function Struk($no, $nama, $unit_pendidikan, $tanggal_gaji, $jabatan, $gaji, $lama_kerja, $status, $bonus, $total_potongan, $bpjs, $pinjaman, $cicilan, $infaq, $lain, $gaji_bersih)
    {
    
        echo "<center>========================================</center>";
        echo " <center><table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr>
        <td><b>No</b></td>
        <td>:</td>
        <td>$no</td>
        </tr>";
        echo "<tr>
        <td><b>Nama</b></td>
        <td>:</td>
        <td>$nama</td>
        </tr>";
        echo "<tr>
        <td><b>Unit Pendidikan</b></td>
        <td>:</td>
        <td>$unit_pendidikan</td>
        </tr>";
        echo "<tr>
        <td><b>Tanggal Gaji</b></td>
        <td>:</td>
        <td>$tanggal_gaji</td>
        </tr>";
        echo "<tr>
        <td><b>Jabatan</b></td>
        <td>:</td>
        <td>$jabatan</td>
        </tr>";
        echo "<tr>
        <td><b>Gaji</b></td>
        <td>:</td>
        <td>$gaji</td>
        </tr>";
        echo "<tr>
        <td><b>Lama Kerja</b></td>
        <td>:</td>
        <td>$lama_kerja</td>
        </tr>";
        echo "<tr>
        <td><b>Status Kerja</b></td>
        <td>:</td>
        <td>$status</td>
        </tr>";
        echo "<tr>
        <td><b>Bonus</b></td>
        <td>:</td>
        <td>$bonus</td>
        </tr>";
        echo "<tr>
        <td><b>Total Potongan</b></td>
        <td>:</td>
        <td>$total_potongan</td>
        </tr>";
        echo "<tr>
        <td><b>BPJS</b></td>
        <td>:</td>
        <td>$bpjs</td>
        </tr>";
        echo "<tr>
        <td><b>Pinjaman</b></td>
        <td>:</td>
        <td>$pinjaman</td>
        </tr>";
        echo "<tr>
        <td><b>Cicilan</b></td>
        <td>:</td>
        <td>$cicilan</td>
        </tr>";
        echo "<tr>
        <td><b>Infaq</b></td>
        <td>:</td>
        <td>$infaq</td>
        </tr>";
        echo "<tr>
        <td><b><i><u>Gaji Bersih</u></i></b></td>
        <td>:</td>
        <td>$gaji_bersih</td>
        </tr>";
        echo "</table></center> <br>";
        echo "<center>===========================================</center>";
        echo "<br><hr>";
    }
}


if (isset($_POST['submit'])) {
    $data = [];

    // ini teh kenapa ada : 0, gunanya kalo ga ngisi datanya tetep ada
    $data['no'] = isset($_POST['no']) ? $_POST['no'] : 0;
    $data['name'] = isset($_POST['name']) ? $_POST['name'] : '';
    $data['unit'] = isset($_POST['unit']) ? $_POST['unit'] : '';
    $data['tanggal_gaji'] = isset($_POST['tanggal_gaji']) ? $_POST['tanggal_gaji'] : '';
    $data['jabatan'] = isset($_POST['jabatan']) ? $_POST['jabatan'] : '';
    $data['lama_kerja'] = isset($_POST['lama_kerja']) ? $_POST['lama_kerja'] : '';
    $data['status'] = isset($_POST['status']) ? $_POST['status'] : '';
    $data['BPJS'] = isset($_POST['BPJS']) ? $_POST['BPJS'] : 0;
    $data['pinjaman'] = isset($_POST['pinjaman']) ? $_POST['pinjaman'] : 0;
    $data['cicilan'] = isset($_POST['cicilan']) ? $_POST['cicilan'] : 0;
    $data['infaq'] = isset($_POST['infaq']) ? $_POST['infaq'] : 0;
    $data['lain'] = isset($_POST['lain']) ? $_POST['lain'] : 0;

    $cetak = new Gajiku();
    $cetak->data_aja($data);  
}
?>