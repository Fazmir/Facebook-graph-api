<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.foxthemes.net/socialitev2.1/timeline.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Oct 2021 11:09:05 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="<?php echo base_url() ?>assets/images/favicon.png" rel="icon" type="image/png">

    <!-- Basic Page Needs
        ================================================== -->
    <title><?php echo $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Socialite is - Professional A unique and beautiful collection of UI elements">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/icons.css">

    <!-- CSS 
    ================================================== --> 
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/uikit.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/tailwind.css">  
    <script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script> 
    <script type="text/javascript">
         var base_url = "<?php echo base_url(); ?>";

             (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/en_US/sdk.js";
              fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));

       

            window.fbAsyncInit = function() {
              FB.init({
                appId      : '1037949440313567',
                cookie     : false,                     // Enable cookies to allow the server to access the session.
                xfbml      : true, 
                status     : true, 
                oauth      : true,                    // Parse social plugins on this webpage.
                version    : 'v12.0',            // Use this Graph API version for this call.
              });




              FB.getLoginStatus(function(response) {

                 statusChangeCallback(response);
              });


            };

    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>




</head> 
<body>

    <style type="text/css">
        .imgcenter {
          display: block;
          margin-left: 78%;
          margin-right: auto;
          width: 100%;
          height:   auto !important   ;
        }
    </style>
   
    


    <div id="wrapper">

        <!-- Header -->
        <header>
            <div class="header_wrap">
                <div class="header_inner mcontainer">
                    <div class="left_side">
                        
                      <!--   <span class="slide_menu" uk-toggle="target: #wrapper ; cls: is-collapse is-active">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M3 4h18v2H3V4zm0 7h12v2H3v-2zm0 7h18v2H3v-2z" fill="currentColor"></path></svg>
                        </span> -->

                        <div id="logo">
                            <a href="<?php echo base_url().'index.php/Home' ?>"> 
                                <img src="<?php echo base_url() ?>assets/images/logo.png" alt="">
                                <img src="<?php echo base_url() ?>assets/images/logo.png" class="logo_mobile imgcenter" alt="">
                            </a>
                        </div>
                    </div>
                     
                  <!-- search icon for mobile -->
                    <!-- <div class="header-search-icon" uk-toggle="target: #wrapper ; cls: show-searchbox"> </div> -->
                 
    
                    <div class="right_side">
    
                        <div class="header_widgets">
                            <a href="#">
                                <img src="<?php echo $profile['pimage'] ?>" class="is_avatar imgProfile" alt="">
                            </a>
                            <div uk-drop="mode: click;offset:5" class="header_dropdown profile_dropdown">

                                <a href="timeline.html" class="user">
                                    <div class="user_avatar">
                                        <img src="<?php echo $profile['pimage'] ?>" alt="">
                                    </div>
                                    <div class="user_name">
                                        <div> <?php echo $profile['name'] ?>  </div>
                                        <span><?php echo $profile['email'] ?> </span>
                                    </div>
                                </a>
                                <hr>
                                <a href="#" id="night-mode" class="btn-night-mode">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                                      </svg>
                                     Night mode
                                    <span class="btn-night-mode-switch">
                                        <span class="uk-switch-button"></span>
                                    </span>
                                </a>
                                <a href="#" onclick="fbLogout()"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                    </svg>
                                    Log Out 
                                </a>

                                
                            </div>

                        </div>
                        
                    </div>
                </div>
            </div>
        </header>

        <style type="text/css">
            
        @media (min-width: 1200px){

            .main_content {
                margin-left: 0  !important   ;
            }

            .container, .mcontainer {
                max-width: 100%;
            }

            .lg\:h-44 {
                    height: 20rem;
            }
            .create-post .uk-modal-dialog {
                width: 1100px;
            }

            .profile.user-profile .profiles_banner {
                height: 450px;
            }

        }

    

        .swal2-container {
          z-index: 1000000;
        }

        </style>