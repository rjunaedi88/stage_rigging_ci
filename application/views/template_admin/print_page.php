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
            <p>Mulai dari tanggal <?php echo date('d/m/Y', strtotime($this->input->get('tgl1'))) ?> sampai <?php echo date('d/m/Y', strtotime($this->input->get('tgl2'))) ?></p>
            <?php $this->load->view($content) ?>
        </div>
    </body>
</html>
