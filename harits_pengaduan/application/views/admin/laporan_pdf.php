<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LAPORAN PPM</title>

    <style type="text/css">
        @page {
            margin: 0px;
        }
        body {
            margin: 0px;
        }
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        table {
            font-size: x-small;
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        table th {
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: left;
        }
        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
            border: 1px solid #ddd;
            padding: 8px;
        }
        .invoice table {
            margin: 15px;
        }
        .invoice h3 {
            margin-left: 15px;
        }
        .information {
            background-color: #60A7A6;
            color: #FFF;
        }
        .information .logo {
            margin: 5px;
        }
        .information table {
            padding: 10px;
        }
    </style>

</head>
<body>

<div class="information">
    <table width="100%">
        <tr>
            <td align="left" style="width: 40%;">
                <h3>LAPORAN PENGADUAN MASYARAKAT</h3>
                <pre>
JL.Nitikan
INDONESIA
<br /><br />
Date: <?=date('y-m-d')?>
</pre>


            </td>

        </tr>

    </table>
</div>


<br/>

<div class="invoice">
    <div class="table-responsive">
        <table id="table" class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pelapor</th>
                    <th>Nik</th>
                    <th>Kategori</th>
                    <th>Sub Kategori</th>
                    <th>Laporan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            <?php $no = 1;
                foreach ($pengaduan as $p) : ?>
                    <tr>
                        <td scope="row"><?= $no++ ?></td>
                        <td><?= $p['nama'] ?></td>
                        <td><?= $p['nik']?></td>
                        <td><?= $p['kategori'] ?></td>
                        <td><?= $p['subkategori']?></td>
                        <td><?= $p['isi_laporan'] ?></td>
                        <td><?= $p['status'] ?></td>
                    </tr>
                <?php endforeach;  ?>
            </tbody>
        </table>
    </div>
</div>

<div class="information" style="position: absolute; bottom: 0;">
    <table width="100%">
        <tr>
            <td align="left" style="width: 50%;">
                &copy; Pelaporan pengaduan masyarakat - All rights reserved.
            </td>
        </tr>

    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>