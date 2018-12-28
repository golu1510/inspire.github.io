<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="Quiz/img/favicon.ico">
    <title>Inspire Academy</title>
    <link href="Quiz/css/font-awesome.min.css" rel="stylesheet" />
    <link href="Quiz/css/custom.css" rel="stylesheet" />
    <link href="Quiz/css/bootstrap.min.css" rel="stylesheet" />
    <link href="Quiz/css/style.default.css" rel="stylesheet" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125433287-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-125433287-1');
    </script>
</head>

<body>
    <div id="all">
        <header class="main-header">
            <div class="navbar" data-spy="affix" data-offset-top="200">
                <div class="navbar navbar-default yamm" role="navigation" id="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <a class="navbar-brand home">
                                <img src="Quiz/img/logo.png" alt="NTA logo" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-md-5 pull-right">
                            <div class="navbar-collapse">
                                <ul class="nav navbar-nav pull-right exam-paper ">
                                    <li class="user-profile">
                                        <table>
                                            <tr>
                                                <td style="padding: 5px 15px; border: 2px solid #666"><i class="fa fa-user fa-4x"></i></td>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td style="padding: 5px 5px;">Candidate Name</td>
                                                            <td> : <span style="color: #f7931e; font-weight: bold">[Your Name]</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 5px 5px;">Subject Name</td>
                                                            <td> : <span style="color: #f7931e; font-weight: bold">[Test Practice]</span></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="clear"></div>
        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div style="color: #FFF; padding: 0 0 10px 0;">
                            <div style="font-size: 22px;">System Name : C0001</div>
                            <div>Contact Invigilator if the Name and Photograph displayed on the screen is not yours</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-carousel">
                <div class="area-bg">
                    <div id="content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    <div class="box-part">
                                        <h4>Login</h4>
                                        <hr>
                                        <form method="post" action="">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input id="txtUsername" placeholder="xxxx@xxxxx.com" type="text" name="txtUsername" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input id="txtPassword" placeholder="**********" type="password" name="txtPassword" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <input id="submit" type="submit" name="submit" value="login" class="btn btn-primary btn-block btn-lg">
                                        </div>
                                        <?php
                                        if(isset($_REQUEST['submit']))
                                        {
                                            $txtUsername = $_REQUEST['txtUsername'];
                                            $txtPassword = $_REQUEST['txtPassword'];
                                            if ($txtUsername.value='inspire') {
                                                if ($txtPassword.value='inspire') {

                                                   window.location.href = "Quiz/Instruction_jee.html?type=" + window.location.search.split("?")[1].split('=')[1]);
                                                }
                                                else{
                                                    echo "Incorrect Password";

                                                }
                                                
                                            }
                                            else{
                                                echo "Incorrect Username";
                                            }
                                        }

                                        ?>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="copyright">
                <div class="container">
                    <div class="col-md-12">
                        <p class="text-center">&copy; 2019 Inspire Academy Powered By : Aman Gupta</p>

                    </div>
                </div>
            </div>
    </div>
    <script src="Quiz/js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>