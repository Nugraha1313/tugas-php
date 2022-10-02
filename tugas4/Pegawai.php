
<?php 
/*

Buatlah Class Pegawai dengan member class:

variabel : nip, nama, jabatan, agama, status
konstruktor (nip, nama, jabatan, agama, status)

fungsi:
setGajiPokok (gunakan switch case : manager=>15jt, asmen=>10jt, kabag=>7jt, staff=>4jt)
setTunjab = 20% dari Gaji Pokok
setTunkel= 10% dari Gaji Pokok untuk sudah menikah (ternary)
setZakatProfesi= 2,5% dari GajiPokok untuk muslim dan Gaji Kotor minimal 6jt
mencetak => nip, nama, jabatan, agama, status, Gaji Pokok, Tunj Jab, Tunkel, Zakat, Gaji Bersih 


Buatlah objPegawai dengan data:

5 instance object pegawai
cetaklah semua struktur gaji pegawai


*/

class Pegawai {

    private $nip, $nama, $jabatan, $agama, $status;

    public function __construct($nip, $nama, $jabatan, $agama, $status) {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
    }

    public function setGajiPokok() {
        switch (strtolower($this->jabatan)) {
            case 'manager':
                $gajiPokok = 15000000;
                break;
            case 'asmen':
                $gajiPokok = 10000000;
                break;
            case 'kabag':
                $gajiPokok = 7000000;
                break;
            case 'staff':
                $gajiPokok = 4000000;
                break;
            default:
                $gajiPokok = 0;
                break;
        }
        return $gajiPokok;
    }

    public function setTunjab() {
        return $this->setGajiPokok() * 0.2;
    }

    public function setTunkel() {
        $convertStatus = strtolower($this->status);
        return $convertStatus == 'menikah' ? $this->setGajiPokok() * 0.1 : 0;
    }

    public function getGajiKotor() {
        return $this->setGajiPokok() + $this->setTunjab() + $this->setTunkel();
    }

    public function setZakatProfesi() {
        $convertAgama = strtolower($this->agama);
        // return $convertAgama == 'islam' && $this->setGajiPokok() >= 6000000 ? $this->setGajiPokok() * 0.025 : 0;
        return $convertAgama == 'islam' && $this->getGajiKotor() >= 6000000 ? $this->getGajiKotor() * 0.025 : 0;
    }

    public function mencetak() {
        echo "NIP : " . $this->nip . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Jabatan : " . $this->jabatan . "<br>";
        echo "Agama : " . $this->agama . "<br>";
        echo "Status : " . $this->status . "<br>";
        echo "Gaji Pokok : Rp. " . number_format($this->setGajiPokok(), 0, ',', '.') . "<br>";
        echo "Tunjangan Jabatan : Rp. " . number_format($this->setTunjab(), 0, ',', '.') . "<br>";
        echo "Tunjangan Keluarga : Rp. " . number_format($this->setTunkel(), 0, ',', '.') . "<br>";
        echo "Zakat Profesi : Rp. " . number_format($this->setZakatProfesi(), 0, ',', '.') . "<br>";
        echo "Gaji Bersih : Rp. " . number_format($this->getGajiKotor() - $this->setZakatProfesi(), 0, ',', '.') . "<hr>";
        // echo "Gaji Bersih : Rp. " . number_format($this->setGajiPokok() + $this->setTunjab() + $this->setTunkel() - $this->setZakatProfesi(), 0, ',', '.') . "<br>";
        echo "<hr>";
    }
    
    // table row
    public function mencetak2() {
        echo "<td>" . $this->nip . "</td>";
        echo "<td>" . $this->nama . "</td>";
        echo "<td>" . $this->jabatan . "</td>";
        echo "<td>" . $this->agama . "</td>";
        echo "<td>" . $this->status . "</td>";
        echo "<td> Rp. " . number_format($this->setGajiPokok(), 0, ',', '.') . "</td>";
        echo "<td> Rp. " . number_format($this->setTunjab(), 0, ',', '.') . "</td>";
        echo "<td> Rp. " . number_format($this->setTunkel(), 0, ',', '.') . "</td>";
        echo "<td> Rp. " . number_format($this->setZakatProfesi(), 0, ',', '.') . "</td>";
        echo "<td> Rp. " . number_format($this->getGajiKotor() - $this->setZakatProfesi(), 0, ',', '.') . "</td>";
        // echo "<td> Rp. " . number_format($this->setGajiPokok() + $this->setTunjab() + $this->setTunkel() - $this->setZakatProfesi(), 0, ',', '.') . "</td>";
    }

}



?>