<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Form Pasien</h1>
    <form method="POST">
        @csrf
        <label for="">Nama Pasien</label>
        <input type="text" name="nama" placeholder="Masukkan Nama"><br>
        <label for="">Tanggal Pemeriksaan</label>
        <input type="date" name="tgl_pemeriksaan" placeholder="Masukkan Nama"><br>
        <label for="">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" placeholder="Masukkan Nama"><br>
        <label for="">Jenis Kelamin</label><br>
        <input type="radio" name="jk" value="Laki-laki"> Laki-laki <br>
        <input type="radio" name="jk" value="Perempuan"> Perempuan <br>
        <button name="submit" value="submit">Kirim</button>
    </form>

    {{--
        Note :
        @ = untuk menulis kode yang lebih efisien ini bawaan Template dari blade engine atau dari laravelnya

        Cara Membacanya:
        Jika(IF) tombol submit(isset($_POST['submit'])) di klick maka :
        yang pertama, Kita Buat wadah/sering di sebut variable(
            $nama = $_POST['nama'];
            $tgl_pemeriksaan = $_POST['tgl_pemeriksaan'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $jk = $_POST['jk'];
        )

        Kedua, Kita Isi Wadah tersebut dengan Isinya yang sudah kita kirim dari form pada name inputnya, seperti :
        $nama = $_POST['nama'];

        Ketiga, Kita Panggil data yang sudah kita simpan tadi, Boleh versi php atau bawaan laravel dengan contoh :
            1. Jika di PHP menggunakan Echo, Contohnya:
                echo "
                <td>Nama Pasien</td>
                <td>:</td>
                <td>$nama<td>
                </tr>"
            2. Jika di Laravel menggunakan tag kurung kurawal yaitu tamplate bawaan dari aplikasi framework laravel itu sendiri, contohnya:
            {{ $nama }}
    --}}

    {{-- @php
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $tgl_pemeriksaan = $_POST['tgl_pemeriksaan'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $jk = $_POST['jk'];

            echo '<table>';
            echo '<tr>';
            echo "
            <td>Nama Pasien</td>
            <td>:</td>
            <td>$nama<td>
                </tr>";
            echo "<tr>
             <td>Pemeriksaan Pasien</td>
             <td>:</td>
             <td>$tgl_pemeriksaan<td><br>
                </tr>";
            echo "<tr>
             <td>Tanggal Lahir</td>
             <td>:</td>
             <td>$tgl_lahir<td><br>
                </tr>";
            echo "<tr>
             <td>Jenis Kelamin Pasien</td>
             <td>:</td>
             <td>$jk<td><br>";
            echo '</tr>';
            echo '</table>';
        }
    @endphp
    <table border="1" rules="all">
        <tr>
            <th>Entri</th>
            <th></th>
            <th>Nama PAsien</th>
        </tr>
        <tr>
            <td>Nama Pasien</td>
            <td>:</td>
            <td>Arya
            <td>
        </tr>
        <tr>
            <td>Nama Pasien</td>
            <td>:</td>
            <td>Arya
            <td>
        </tr>
    </table> --}}

    @if (isset($_POST['submit']))
    @php
    $nama = $_POST['nama'];
    $tgl_pemeriksaan = $_POST['tgl_pemeriksaan'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jk = $_POST['jk'];
    @endphp
    <table>
        <tr>
            <td>Nama Pasien</td>
            <td>:</td>
            <td>{{ $nama }}
            <td>
        </tr>
        <tr>
            <td>Tanggal Pemeriksaan</td>
            <td>:</td>
            <td>{{ $tgl_pemeriksaan }}
            <td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>{{ $tgl_lahir }}
            <td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>{{ $jk }}
            <td>
        </tr>
    </table>
    @endif
    <table border="2" rules="all">
        <tr>
            <th>Jenis Tes</th>
            <th>Hasil Pemeriksaan</th>
            <th>Normal</th>
        </tr>
        <tr>
            <td>Tekanan Darah</td>
            <td></td>
            <td>120/80 mmhg</td>
        </tr>
        <tr>
            <td>Asam Urat</td>
            <td></td>
            <td>Pria : < 7 mg/dl | Wanita: < 6 mg/dl</td>
        </tr>
        <tr>
            <td>Kolesterol total</td>
            <td></td>
            <td>< 200 mg/dl</td>
        </tr>
        <tr>
            <td rowspan="3">Gula darah</td>
            <td rowspan="3"></td>
            <td>Puasa: 70-110 mg/dl</td>
        </tr>
        <tr>
            <td>2 jam setelah makan: 100-150 mg/dl</td>
        </tr>
        <tr>
            <td>Sewaktu/acak : 70-125 mg/dl</td>
        </tr>
    </table>


</body>

</html>