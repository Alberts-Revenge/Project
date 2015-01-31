<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>{pagetitle}</title>
        <link rel="stylesheet" href="../css/style.css" type="text/css">
        <link href="../css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/jquery-1.11.1.min.js" type="text/javascript"></script>
        <style>
            h1   {color:#ff0000}
            p {color:#ff0000}
        </style>
    </head>
    <body>
        <div id="background">
            <div id="page">
                <div id="header">
                    <div id="logo">html
                        <a href="../index.php"><img src="../images/logo.png" alt="LOGO" height="112" width="118"></a>

                    </div>
                    <div id ="title"><h1 align="center">Dark Lord Hangout</h1></div>
                    <div id="navigation">
                        <ul>
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="../index.php/torturer">Torture</a>
                            </li>
                            <li>
                                <a href="../index.php/jediHunt">Jedi Hunting</a>
                            </li>
                            <li>
                                <a href="../index.php/tombs">Tombs</a>
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
    </body>
</html>
