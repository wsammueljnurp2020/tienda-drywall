<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>AdminUsers</title>

        <!--STYLES-->
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../../Content/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../Content/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../Content/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../Content/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
        <link href="../../Content/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>


        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME STYLES -->
        <link href="../../Content/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="../../Content/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />

        <link href="../../Content/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../../Content/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />

        <link href="../../Content/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />

        <link href="../../Content/template/css/components.css" id="style_components" rel="stylesheet" type="text/css" />
        <link href="../../Content/template/css/plugins.css" rel="stylesheet" type="text/css" />
        <link href="../../Content/template/layout/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="../../Content/template/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../../Content/template/layout/css/custom.css" rel="stylesheet" type="text/css" />
        <link href="../../Content/plugins/icheck/skins/all.css" rel="stylesheet" stylesheet" type="text/css" />
              <link href="../../Content/css/Custom.css" rel="stylesheet" type="text/css" />
        <!-- END THEME STYLES -->

        <link rel="shortcut icon" href="favicon.ico" />
        <!--SCRIPTS-->
        <script src="../../Content/plugins/jquery-2.1.4.js" type="text/javascript"></script>

    </head>

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        @RenderSection("topLevel", required: false)
        <!--HEADER-->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner">
                <div class="page-logo">
                    <a href="/">
                        <img src="../../Content/template/layout/img/logo.png" alt="logo" class="logo-default" />
                    </a>
                    <div class="menu-toggler sidebar-toggler"> </div>
                </div>
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!--@Html.Partial("_LoginPartial")-->
                    </ul>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <!--BODY-->
        <div class="page-container">
            <div class="page-sidebar-wrapper">
                <div class="page-sidebar navbar-collapse collapse">
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <li class="sidebar-toggler-wrapper hide">                       
                            <div class="sidebar-toggler"> </div>

                        </li>
                        <li class="heading">
                            <h3 class="uppercase">Menu</h3>
                        </li>
                        <li class="nav-item start active open">
                            <a href="/" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Inicio</span>
                                <span class="selected"></span>                           
                            </a>
                        </li>

                        <!-- @{Html.RenderAction("LoadMenu", "Home");}-->   
                        <?php
                        include 'LoadMenu.php';
                        ?>
                    </ul>
                </div>
            </div>
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="theme-panel hidden-xs hidden-sm">
                        <div class="toggler"> </div>
                        <div class="toggler-close"> </div>
                        <div class="theme-options">
                            <div class="theme-option theme-colors clearfix">
                                <span> THEME COLOR </span>
                                <ul>
                                    <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>
                                    <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue"> </li>
                                    <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>
                                    <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>
                                    <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>
                                    <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2"> </li>
                                </ul>
                            </div>
                            <div class="theme-option">
                                <span> Theme Style </span>
                                <select class="layout-style-option form-control input-sm">
                                    <option value="square" selected="selected">Square corners</option>
                                    <option value="rounded">Rounded corners</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Layout </span>
                                <select class="layout-option form-control input-sm">
                                    <option value="fluid" selected="selected">Fluid</option>
                                    <option value="boxed">Boxed</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Header </span>
                                <select class="page-header-option form-control input-sm">
                                    <option value="fixed" selected="selected">Fixed</option>
                                    <option value="default">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Top Menu Dropdown</span>
                                <select class="page-header-top-dropdown-style-option form-control input-sm">
                                    <option value="light" selected="selected">Light</option>
                                    <option value="dark">Dark</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Mode</span>
                                <select class="sidebar-option form-control input-sm">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Menu </span>
                                <select class="sidebar-menu-option form-control input-sm">
                                    <option value="accordion" selected="selected">Accordion</option>
                                    <option value="hover">Hover</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Style </span>
                                <select class="sidebar-style-option form-control input-sm">
                                    <option value="default" selected="selected">Default</option>
                                    <option value="light">Light</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Position </span>
                                <select class="sidebar-pos-option form-control input-sm">
                                    <option value="left" selected="selected">Left</option>
                                    <option value="right">Right</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Footer </span>
                                <select class="page-footer-option form-control input-sm">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="page-bar">

                        <ul class="page-breadcrumb">
                            <li>
                                <a href="/">Home</a>                            
                                <i class="fa fa-circle"></i>
                            </li>                                                
                            <li>
                                <span>Dashboard</span>
                            </li>
                        </ul> 
                        <div class="page-toolbar">                        
                        </div>
                    </div> 

                    <!--@RenderSection("featured", required: false)-->                   

                    <!--@RenderBody()--> 

                    <div class="bg-danger" id="contenedor">

                        <!--CARGA EL CONTENIDO DINAMICO DE LA PAGINA-->

                    </div>

                </div>
            </div>

            <!--MODAL-->
            <div class="modal fade" id="basic" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Modal Title</h4>
                        </div>
                        <div class="modal-body"> Modal body goes here </div>
                        <div class="modal-footer">
                            <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                            <button type="button" class="btn green">Save changes</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        </div>


        <!--FOOTER-->
        <div class="page-footer">
            <div class="page-footer-inner">
                @DateTime.Now.Year &copy; Saul Henriquez
                <a href="http://debsv.blogspot.com" title="My Web Site" target="_blank">My Blog</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $('#menuCreate').click(function () {
                    $('#contenedor').load("../producto/Create.php");
                });
                $('#menuMostrar').click(function () {
                    $('#contenedor').load("../producto/FindAll.php");
                });

            });
        </script>

        <!--SCRIPTS-->
        <script src="../../Content/plugins/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="../../Content/plugins/jquery-ui/jquery-ui.js" type="text/javascript"></script>
        <script src="../../Content/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../Content/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="../../Content/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <script src="../../Content/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
        <script src="../../Content/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <script src="../../Content/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../../Content/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../../Content/plugins/jquery.cokie.min.js" type="text/javascript"></script>
        <script src="../../Content/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="../../Content/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
        <script src="../../Content/template/scripts/app.js" type="text/javascript"></script>
        <script src="../../Content/template/layout/scripts/layout.js" type="text/javascript"></script>
        <script src="../../Content/template/layout/scripts/demo.js" type="text/javascript"></script>
        <script src="../../Content/plugins/jquery-validation/js/jquery.validate.js" type="text/javascript"></script>

        <!--@{Html.RenderPartial("_RenderConfirm.js");}-->

        <audio id="audio-alert" src="../../Content/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="../../Content/audio/fail.mp3" preload="auto"></audio>

        <script src="../../Content/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="../../Content/plugins/icheck/icheck.js" type="text/javascript"></script>
        <script src="../../Content/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
        <script src="../../Content/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
        <script src="../../Content/js/AdminUsers.js" type="text/javascript"></script>

        <script>
            $(document).ready(function () {
                var msg = '@TempData["ResultMessage"]';
                var msgType = '@TempData["ResultType"]';
                // showNotification(msg, msgType);
            });
        </script>

    </body>
</html>


