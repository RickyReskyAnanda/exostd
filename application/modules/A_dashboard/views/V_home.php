    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-md-4">
                <span ng-controller="profilectrl">    
                    <div class="widget-head-color-box red-bg p-lg text-center">
                        <div class="m-b-md">
                            <h2 class="font-bold no-margins">{{profilText.nama_lengkap | capitalize}}</h2>
                            <small>{{profilText.posisi | capitalize}}</small>
                        </div>
                        <img src="<?=base_url()?>sets/img/{{profilText.foto}}" class="img-circle circle-border m-b-md" alt="profile">
                    </div>
                    <div class="widget-text-box">
                        <h4 class="media-heading">{{profilText.nama_lengkap | capitalize}}</h4>
                        <p>{{profilText.no_hp | capitalize}}</p>
                        <p>{{profilText.alamat | capitalize}}</p>
                        <div class="text-right">
                            <a class="btn btn-xs btn-danger">Selengkapnya</a>
                        </div>
                    </div>
                </span>
            </div>
        <span ng-controller="dashboardctrl">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-4">
                    <a href="#/proyek">
                        <div class="widget style1 navy-bg">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-area-chart fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <span> Proyek <small>Berjalan</small></span>
                                    <h2 class="font-bold">{{dashboardText.berjalan}}</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>                
                <div class="col-md-4">
                    <a href="#/proyek">
                        <div class="widget style1 navy-bg">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-area-chart fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <span> Proyek <small>Selesai</small></span>
                                    <h2 class="font-bold">{{dashboardText.selesai}}</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                
                <a href="#/developer">
                    <div class="col-md-4">
                        <div class="widget style1 yellow-bg">
                            
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-info fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <h4> Developer </h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </a>
                
            </div>
            <div class="row">
                <a href="#/suplier">
                    <div class="col-md-4">
                        <div class="widget style1 lazur-bg">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-th-large fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <span> Suplier </span>
                                    <h2 class="font-bold">{{dashboardText.suplier}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#/kontak">
                    <div class="col-md-4">
                        <div class="widget style1 lazur-bg">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-list fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <span> Kontak </span>
                                    <h2 class="font-bold">{{dashboardText.kontak}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <?php if($this->session->userdata('status')=='admin'){ ?>
                <a href="#/user">
                    <div class="col-md-4">
                        <div class="widget style1" style="background: #52c04c; color: #ffffff">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <span> User</span>
                                    <h2 class="font-bold">{{dashboardText.user}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <?php } ?>
                

            </div>
        </span>
        </div>
    </div>
<!-- content end -->
