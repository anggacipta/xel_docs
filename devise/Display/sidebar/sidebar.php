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
                    <a href="/xel">Welcome to Xel</a>
                </li>
                <li>
                    <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Installation</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu1">
                        <li>
                            <a href="/xel/app-server">App Server</a>
                        </li>
                        <li>
                            <a href="/xel/apache-server">Apache Server</a>
                        </li>
                        <li>
                            <a href="/xel/composer">Composer</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">BSD</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu2">
                        <li>
                            <a href="/xel/basedata">Basedata</a>
                        </li>
                        <li>
                            <a href="/xel/service">Service</a>
                        </li>
                        <li>
                            <a href="/xel/display">Display</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Routing</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                        <li>
                            <a href="/xel/overview">Routing Overview</a>
                        </li>
                        <li>
                            <a href="/xel/router-gemstone">Router Gemstone</a>
                        </li>
                        <li>
                            <a href="/xel/router-middleware">Middleware</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Security</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu4">
                        <li>
                            <a href="/xel/gemstone-xss">Gemstone XSS Protection</a>
                        </li>
                        <li>
                            <a href="/xel/gemstone-csrf">Gemstone CSRF Protection</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Database</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu5">
                        <li>
                            <a href="/xel/setup-database">Setup Database</a>
                        </li>
                        <li>
                            <a href="/xel/future-dbms">Future DBMS</a>
                        </li>
                        <li>
                            <a href="/xel/xgen-query">Xgen Query Builder</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">File Storage</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu6">
                        <li>
                            <a href="/xel/file-storage">File Storage Processing</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Utility Class</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu7">
                        <li>
                            <a href="/xel/helper">Helper</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/xel/unit-testing">PHPUnit Test Integration</a>
                </li>
                <li>
                    <a href="">Xel Dependency Collection(coming soon)</a>
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
