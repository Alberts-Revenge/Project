<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>{pagetitle}</title>
        <link rel="stylesheet" href="/assets/css/style.css" type="text/css">
        <link href="/assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        {caboose_styles}
        <style>
            h1   {color:#ff0000}
            p {color:#ff0000}
            a {color:#ffffff}
            td {color:#ff0000}
            th {color:#ffffff}
            form {color:#ff0000}
        </style>
    </head>
    <body>
        <div id="background">
            <div id="page">
                <div id="header">
                    <div id="logo">
                        <a href="/"><img src="/assets/images/logo.png" alt="LOGO" height="112" width="118"></a>
                    </div>
                    <div id ="title"><h1 align="center">Dark Lord Hangout</h1></div>
                    <div id="navigation">
                        <ul>
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="/torturer">Torture</a>
                            </li>
                            <li>
                                <a href="/jedihunt">Jedi Hunting</a>
                            </li>
                            <li>
                                <a href="/tombs">Tombs</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div id="contents">
                    {content}
                </div>
            </div>
            <p align="center">
                © 2023 by Albert's Revenge Ltd. All Rights Reserved.
            </p>
        </div>
        <script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/assets/js/jquery-1.11.1.min.js" type="text/javascript"></script>
        {caboose_scripts}
        {caboose_trailings}
        <script src="/asset/tinymce/js/tinymce/tinymce.min.js"></script>
        <script type="text/javascript">
        tinymce.init({
            selector: "textarea",
            plugins: "link image"
         });
         
        </script>
    </body>
</html>
