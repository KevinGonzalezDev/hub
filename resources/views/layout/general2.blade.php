<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>HUBSENA</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="../css/all.css" rel="stylesheet">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/bootstrap4-toggle.min.css" rel="stylesheet">
        <link href="../css/fontawesome.css" rel="stylesheet">
        <?php echo '<script type="text/javascript" src = "../js/datatables.min.js?v='.date("Y-m-d H:i:s").'"></script>';?>

        <?php echo '<script type="text/javascript" src = "../js/bootstrap4-toggle.min.js?v='.date("Y-m-d H:i:s").'"></script>';?>

        <link rel="stylesheet" type="text/css" href="../css/datatables.min.css"/>
        <?php echo '<script type="text/javascript" src = "../js/dataTables.bootstrap4.min.js?v='.date("Y-m-d H:i:s").'"></script>';?>
        <?php echo '<script type="text/javascript" src = "../js/dataTables.js?v='.date("Y-m-d H:i:s").'"></script>';?>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <?php echo "<link rel='stylesheet' href='../css/generalPage.css?v=".date("Y-m-d H:i:s")."'>";?>
        
        <?php echo '<script type="text/javascript" src = "../js/jquery-ui.min.js?v='.date("Y-m-d H:i:s").'"></script>';?>
        <?php echo '<script type="text/javascript" src = "../js/config.js?v='.date("Y-m-d H:i:s").'"></script>';?>

        <?php echo '<script type="text/javascript" src = "../js/popper.min.js?v='.date("Y-m-d H:i:s").'"></script>';?>
        <?php echo '<script type="text/javascript" src = "../js/bootstrap.min.js?v='.date("Y-m-d H:i:s").'"></script>';?>


        <?php echo '<script type="text/javascript" src = "../js/jquery-ui.min.js?v='.date("Y-m-d H:i:s").'"></script>';?>
        <?php echo '<script type="text/javascript" src = "../js/bootstrap-datepicker.js?v='.date("Y-m-d H:i:s").'"></script>';?>
        <?php echo '<script type="text/javascript" src = "../js/jquery.creditCardValidator.js?v='.date("Y-m-d H:i:s").'"></script>';?>
        
        <style>
            
        </style>
    </head>
    <body style = 'overflow-y:scroll;'>
        {{ csrf_field() }}
        @yield('content')
        
        
        <script>
            $(document).ready(function () {
                nextPaso(0)
                var slideIndex = 0;
                carousel();

            })
        </script>
    </body>
</html>
