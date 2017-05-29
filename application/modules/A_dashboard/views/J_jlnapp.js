/**
|---------------------------------------------------------------------------------------------------------------------------
|                                               ROUTING                                                                     |
|---------------------------------------------------------------------------------------------------------------------------
*/
 app.config(function($routeProvider) {
     
        
            $routeProvider
            // dashvoard
            .when("/proyek", {
                templateUrl : "<?=base_url('A_project')?>",
                controller  : "projectctrl",
            })
            .when("/", {
                templateUrl : "<?=base_url('A_dashboard/view_dashboard')?>",
                controller  : "profilectrl",
                controller  : "dashboardctrl"
            })

                .when("/detail-project/:id", {
                    templateUrl : "<?=base_url('A_project/view_detail_project')?>",
                    controller  : "detailprojectctrl"
                })
         	

            .when("/user", {
                templateUrl : "<?=base_url('A_user')?>",
                controller  : "userctrl"
            })
                .when("/user-detail/:id", {
                    templateUrl : "<?=base_url('A_user/detail_user')?>",
                    controller  : "detailuserctrl"
                })
                    .when("/user-proyek/:id", {
                        templateUrl : "<?=base_url('A_user/project_user')?>",
                        controller  : "projectuserctrl"
                    })
                        .when("/user-proyek-detail/:id", {
                            templateUrl : "<?=base_url('A_user/detail_user_project')?>",
                            controller  : "detailprojectuserctrl"
                        })
                    //suplier
                    .when("/user-suplier/:id", {
                        templateUrl : "<?=base_url('A_user/suplier_user')?>",
                        controller  : "usersuplierctrl"
                    })
                    //kontak
                    .when("/user-kontak/:id", {
                        templateUrl : "<?=base_url('A_user/kontak_user')?>",
                        controller  : "userkontakctrl"
                    })



         	.when("/suplier", {
                templateUrl : "<?=base_url('A_suplier')?>",
                controller  : "suplierctrl"
            })
                .when("/suplier/:id_suplier", {
                    templateUrl : "<?=base_url('A_suplier/view_list_pembelian')?>",
                    controller  : "listpembelianctrl"
                })
                
            .when("/kontak", {
                templateUrl : "<?=base_url('A_kontak')?>",
                controller  : "kontakctrl"
            })
                .when("/kontak/:id_kontak", {
                    templateUrl : "<?=base_url('A_kontak/view_list_penjualan')?>",
                    controller  : "listpenjualanctrl"
                })

            .when("/profil", {
                templateUrl : "<?=base_url('A_profil')?>",
                controller  : "profilectrl"
            })
            .when("/lockscreen", {
                templateUrl : "<?=base_url('A_tambahan/lock_screen')?>"
            })
            .when("/developer", {
                templateUrl : "<?=base_url('A_tambahan/web_developer')?>"
            })

            .when("/errorpage", {
                templateUrl : "<?=base_url('A_tambahan')?>"
            })
            
            .otherwise({ redirectTo: '/errorpage' });

           
        
 });