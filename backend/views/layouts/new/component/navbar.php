<?php 
use yii\helpers\Url;
?>
    <div class="nav-header">
        <a href="#" class="brand-logo"  style=" background-color: white;">
            <img class="logo-abbr" src="<?= Url::to('@web/images/RemaInspectorChile.png') ?>">
            <img class="logo-compact" src="<?= Url::to('@web/images/RemaInspector.png') ?>">
        </a>

        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <ul class="navbar-nav header-right">
                            <li class="nav-item header-profile">
                                <a class="nav-link" href="gerencial-dashboard" role="button" >
                                    <h6>Dashboard principal</h6> 
                                </a>
                            </li>
                            <li class="nav-item header-profile">
                                <a class="nav-link" href="#" role="button" >
                                    <h6>Dashboard protocolos</h6> 
                                </a>
                            </li>
                            <li class="nav-item header-profile">
                                <a class="nav-link" href="#" role="button" >
                                    <h6>Iquique
                                        <i class="mdi mdi-arrow-down-drop-circle" style="color: red;"></i> 
                                    </h6>
                                </a>
                            </li>
                            <li class="nav-item header-profile">
                                <a class="nav-link" href="#" role="button" >
                                    <h6>Antofagasta
                                        <i class="mdi mdi-arrow-down-drop-circle" style="color: red;"></i>
                                    </h6> 
                                </a>
                            </li>
                            <li class="nav-item header-profile">
                                <a class="nav-link" href="#" role="button" >
                                    <h6>Calama
                                        <i class="mdi mdi-arrow-down-drop-circle" style="color: red;"></i> 
                                    </h6>
                                </a>
                            </li>
                            <li class="nav-item header-profile">
                                <a class="nav-link" href="#" role="button" >
                                    <h6>Centro norte
                                        <i class="mdi mdi-arrow-down-drop-circle" style="color: red;"></i> 
                                    </h6>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <ul class="navbar-nav header-right">
                        <li class="nav-item dropdown header-profile">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown"> 
                                <h6>   
                                    <i class="mdi mdi-account-circle mdi-24px" style="color: red;"></i>
                                    Username
                                    <i class="mdi mdi-arrow-down-drop-circle" style="color: red;"></i> 
                                </h6>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="./app-profile.html" class="dropdown-item">
                                    <i class="icon-user"></i>
                                    <span class="ml-2">Perfil </span>
                                </a>
                                <a href="./page-login.html" class="dropdown-item">
                                    <i class="icon-key"></i>
                                    <span class="ml-2">Cerrar sesion </span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

