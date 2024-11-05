<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situs - Futhia Salmatul Azhar</title>
    <style>
        table {
            border-collapse: collapse; /* Menggabungkan border */
            width: 100%;
            border: none; /* Menghilangkan garis tabel */
        }
        th, td {
            border: none; /* Menghilangkan garis batas sel */
            padding: 0; /* Menghilangkan padding untuk menjaga ukuran */
            text-align: left; /* Rata kiri */
        }
        img {
            max-width: 100%; /* Membuat gambar responsif */
            height: auto; /* Menjaga rasio aspek gambar */
        }
        /* Menambahkan warna latar belakang peach pada menu */
        .menu-background {
            background-color: peachpuff; /* Anda dapat menggunakan kode hex #FFDAB9 untuk warna peach */
            height: 100%; /* Mengatur tinggi agar memenuhi ruang */
        }
    </style>
</head>
<body>
    <table width='100%' border="0" cellspacing="0">
        <tr>
            <td colspan="2" height="100">
                <img src="nyoba.png" width="100%" height="250" alt="Header Image">
            </td>
        </tr>
        <tr height="500" valign="top">
            <td width="20%" class="menu-background"> <!-- Menambahkan kelas di sini -->
                <table width="100%" border="0" cellspacing="0">
                    <tr>
                        <th>Menu</th>
                    </tr>
                    <tr>
                        <td><img src="depan.png" width="16" height="16"> <a href="index.php?menu=biodata">Depan</a></td>
                    </tr>
                    <tr>
                        <td><img src="biodata.png" width="16" height="16"> <a href="biodata.php?menu=home">Biodata</a></td>
                    </tr>
                    <tr>
                        <td><img src="pendidikan.png" width="16" height="16"> <a href="pendidikan.php?menu=pendidikan">Pendidikan</a></td>
                    </tr>
                    <tr>
                        <td><img src="pelatihan.png" width="16" height="16"> <a href="pelatihan.php?menu=pelatihan">Pelatihan</a></td>
                    </tr>
                    <tr>
                        <td><img src="portofolio.png" width="16" height="16"> <a href="portofolio.php?menu=portofolio">Portofolio</a></td>
                    </tr>
                </table>
            </td>
            <td colspan="2">
                <img src="isi.png.png" width="100%" height="500" alt="Content Image"> <!-- Gambar isi diatur untuk memenuhi lebar -->
            </td>
        </tr>
        <tr>
            <td colspan="2" height="20%">
                <img src="footer.png" height="250" width="100%" alt="Footer Image">
            </td>
        </tr>
    </table>
</body>
</html>