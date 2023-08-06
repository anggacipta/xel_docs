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
            <h1><img src="<?=asset("/images/logo.png");?>" alt="xel" id="logo" /><a href="/xel" class="logo">Xel</a></h1>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Welcome to Xel</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="/xel/welcome">Welcome to Xel Alpha 0.5</a>
                        </li>
                        <li>
                            <a href="/xel/server-req">Server Requirement</a>
                        </li>
                        <li>
                            <a href="/xel/credits">Credit</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Installation</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu1">
                        <li>
                            <a href="/xel/composer-instalation">Composer Installation</a>
                        </li>
                        <li>
                            <a href="/xel/running-app">Running Your App</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Routing</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu2">
                        <li>
                            <a href="/xel/add-route">Add Route</a>
                        </li>
                        <li>
                            <a href="/xel/request-class">Request Class</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Databases</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                        <li>
                            <a href="/xel/database-config">Database Configuration</a>
                        </li>
                        <li>
                            <a href="/xel/connect-database">Connect to database</a>
                        </li>
                        <li>
                            <a href="/xel/database-xgen">Xgen Queries</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Managing Databases</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu4">
                        <li>
                            <a href="/xel/database-migration">Database Migration</a>
                        </li>
                        <li>
                            <a href="/xel/database-seed">Database Seeding</a>
                        </li>
                        <li>
                            <a href="/xel/database-command">Database Command</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Helpers</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu5">
                        <li>
                            <a href="/xel/array-helper">Array Helper</a>
                        </li>
                        <li>
                            <a href="/xel/cookie-helper">Cookie Helper</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Testing</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu6">
                        <li>
                            <a href="/xel/database-testing">Database</a>
                        </li>
                        <li>
                            <a href="/xel/generate-data">Generating Data</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Security</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu7">
                        <li>
                            <a href="/xel/auth">Authentication</a>
                        </li>
                        <li>
                            <a href="/xel/encrypt">Encryption</a>
                        </li>
                        <li>
                            <a href="/xel/hash">Hashing</a>
                        </li>
                        <li>
                            <a href="/xel/stonegem">StoneGem</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/xel/command-line">Command Line Usage</a>
                </li>
                <li>
                    <a href="/xel-dash">Xel Dashboard</a>
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
</body>
</html>
