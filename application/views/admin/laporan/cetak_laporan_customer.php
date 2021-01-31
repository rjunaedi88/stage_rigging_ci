<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Laporan</title>
        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                window.print();
            })
        </script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="page-header text-center">
                <h3><?php echo $pheader ?></h3>
            </div>
            <table class="table table-bordered datatables">
                <thead>
                    <tr>
                        <th width="50">No</th>
                        <th>Nama</th>
                        <th>No Telepon</th>
                        <th>Email</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($customer as $r => $v){ ?>
                    <tr>
                        <td><?php echo $r + 1 ?></td>
                        <td><?php echo $v['nama_customer'] ?></td>
                        <td><?php echo $v['telepon'] ?></td>
                        <td><?php echo $v['email'] ?></td>
                        <td><?php echo $v['alamat'] ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
