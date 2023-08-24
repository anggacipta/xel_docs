<!DOCTYPE html>
<html lang="en">
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<head>
    <title>Xel Documentation</title>
    <link rel="icon" href="<?=asset("/images/favicon.png");?>" type="image/x-icon" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="<?=asset("/xelcss/style.css");?>" />
</head>
<body>
<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
        <div class="custom-menu">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
                <i class="fa fa-bars"></i>
                <span class="sr-only">Toggle Menu</span>
            </button>
        </div>
        <div class="p-4 pt-5">
            <h1><img src="<?=asset("/images/logo.png");?>" alt="xel" id="logo" /><a href="/xel-dash" class="logo">Xel</a></h1>
            <ul class="list-unstyled components mb-5">
                <li>
                    <a href="/xel-dash">All Contents</a>
                </li>
                <li>
                    <a href="/xel-dash/create">Add Contents</a>
                </li>
                <li>
                    <a href="/xel-dash/categories">All Categories</a>
                </li>
                <li>
                    <a href="/xel-dash/create/categories">Add Categories</a>
                </li>
                <li>
                    <a href="/xel/admin/logout">Logout</a>
                </li>
            </ul>

            <div class="footer">
                <p>
                    Xel Framework &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                </p>
            </div>
        </div>
    </nav>


    <script src="<?=asset("/xeljs/jquery.min.js");?>"></script>
    <script src="<?=asset("/xeljs/popper.js");?>"></script>
    <script src="<?=asset("/xeljs/bootstrap.min.js");?>"></script>
    <!-- <script src="js/main.js"></script> -->
    <script>
        // Toggling the sidebar menu
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>

    <!--tinymce js-->
    <script src="<?=asset("/libs/tinymce/tinymce.min.js");?>" defer></script>
    <!-- init js -->
    <script src="<?=asset("/xeljs/form-editor.init.js");?>" defer></script>

    <!--  datatable js  -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
</body>
</html>
