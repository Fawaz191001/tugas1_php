<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 2rem;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
            text-align: center;
        }
        p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            /* text-align: center; */
        }
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
            /* text-align: center; */
        }
        li {
            margin-bottom: 1rem;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1 style="color: orange;">Welcome my profile</h1>
        <?php
        $bio = "Perkenalkan nama saya Fawaz Abdul Aziz, Saya merupakan mahasiswa dari Kampus Universitas Bina Sarana Informatika Cengkareng. Berikut, dibawah ini data diri lengkap saya";
        $nama = "Fawaz Abdul Aziz";
        $email = "fawazbmc191001@gmail.com";
        $phone = "+62 812 8572 2558";
        $alamat = "Kp Lamporan Jl Raya Semanan RT08/RW08 No.152 Kel.Semanan Kec.Kalideres Jakarta Barat DKI Jakarta";
        $pekerjaan = "Mahasiswa / Conten Creator";
        $kampus = "Bina Sarana Informatika";
        $prodi = "Ilmu Komputer";
        $fakultas = "Teknik dan Informatika";
        $social = [
            "github" => "https://github.com/Fawaz191001",
            "instagram" => "https://www.instagram.com/fawaz_a.a191001/",
            "linkedin" => "https://www.linkedin.com/in/fawaz-abdul-aziz-1bba82230/"
        ];
        ?>
        <p align="center"><?php echo $bio; ?></p>
        <p>Nama: <?php echo $nama; ?></p>
        <p>Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
        <p>Phone: <?php echo $phone; ?></p>
        <p>Alamat: <?php echo $alamat; ?></p>
        <p>Pekerjaan: <?php echo $pekerjaan; ?></p>
        <p>Kampus: <?php echo $kampus; ?></p>
        <p>Prodi: <?php echo $prodi; ?></p>
        <p>Fakultas: <?php echo $fakultas; ?></p>
        <p>My Sosmed:</p>
        <ul>
            <li><a href="<?php echo $social['github']; ?>">GitHub</a></li>
            <li><a href="<?php echo $social['instagram']; ?>">Intagram</a></li>
            <li><a href="<?php echo $social['linkedin']; ?>">LinkedIn</a></li>
        </ul>
    </div>
</body>
</html>