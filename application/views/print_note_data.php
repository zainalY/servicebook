<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/img/agenda.svg">
    <title><?php echo $title; ?> &mdash; Book Services</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/node_modules/bootstrap/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/node_modules/@fortawesome/fontawesome-free/css/all.min.css">



    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>


    <link rel="stylesheet" href="<?php echo base_url() ?>assets/node_modules/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/node_modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/node_modules/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/node_modules/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/node_modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">


    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/components.css">

</head>

<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Date</th>
                <th scope="col">Sent To</th>
                <th scope="col">Item</th>
                <th scope="col">User</th>
                <th scope="col">Department</th>
                <th scope="col">Unit</th>
                <th scope="col">S\N</th>
                <th scope="col">Damage</th>
                <th scope="col">Remarks</th>
                <th scope="col">Number</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($note as $data) : ?>
                <tr>
                    <td class="text-small"><?php echo $no++; ?></td>
                    <td>
                        <small><mark><?php echo $data->tanggal ?></mark></small>
                    </td>
                    <td class="text-small"><?php echo $data->dikirim_ke ?></td>
                    <td class="text-small"><?php echo $data->item ?></td>
                    <td class="text-small"><?php echo $data->user ?></td>
                    <td class="text-small"><?php echo $data->department ?></td>
                    <td class="text-small"><?php echo $data->unit ?></td>
                    <td class="text-small"><?php echo $data->sn ?></td>
                    <td class="text-small"><?php echo $data->kerusakan ?></td>
                    <td class="text-small"><?php echo $data->remarks ?></td>
                    <td class="text-small"><?php echo $data->number ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="<?php echo base_url() ?>assets/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/node_modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>


    <!-- Template JS File -->
    <script src="<?php echo base_url() ?>assets/js/scripts.js"></script>
    <script src="<?php echo base_url() ?>assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="<?php echo base_url() ?>assets/js/page/forms-advanced-forms.js"></script>
    <!-- Page Specific JS File -->
    <script src="<?php echo base_url() ?>/assets/js/page/modules-datatables.js"></script>
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
</body>

</html>