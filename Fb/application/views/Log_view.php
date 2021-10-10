<!DOCTYPE html>
<html lang="en" class="bg-gray-100">

<!-- Mirrored from demo.foxthemes.net/socialitev2.1/form-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Oct 2021 11:09:24 GMT -->
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
    <meta name="description" content="Make">

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
    <style>
        input , .bootstrap-select.btn-group button{
            background-color: #f3f4f6  !important;
            height: 44px  !important;
            box-shadow: none  !important; 
        }

        .imgcenter {
          display: block;
          margin-left: auto;
          margin-right: auto;
          width: 80%;
        }
        .btns-facebook {
            background-color: #00bcd4;
            padding: 5% 10% ;
            border-radius: 6px;
            color: black
        }
    </style>
</head> 
<body>

    <body class="bg-gray-100">


        <div id="wrapper" class="flex flex-col justify-between h-screen">
    
            <!-- header-->
            <div class="bg-white py-4 shadow dark:bg-gray-800">
                <div class="max-w-6xl mx-auto">
    
    
                    <div class="flex items-center lg:justify-between justify-around">
    
                        <a href="#">
                            <img src="<?php echo base_url() ?>assets/images/logo.png" alt="" class="w-32">
                        </a>
    
                       
    
                    </div>
                </div>
            </div>
    
            <!-- Content-->
            <div>
                <div class="lg:p-12 max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">
                    <form class="lg:p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md">
                        <h1 class="lg:text-2xl text-xl font-semibold mb-6 text-center"> WELCOME TO </h1>
                        <div  class="w-100 text-center">
                         <img src="<?php echo base_url() ?>assets/images/logo.png" alt="" class="w-50 imgcenter">
                            
                        </div>
                        <h2 class="lg:text-2xl text-xl font-semibold mb-6 text-center"> Login </h2>

                        <div class="last-loaded-list"></div>


                        <a class="btn btns-facebook text-left offs-md col-12  imgcenter text-center" href="#" onclick="fbLogin()"> Sign In with Facebook</a>
                    </form>


                </div>
            </div>
            
            <!-- Footer -->
    
            <div class="lg:mb-5 py-3 uk-link-reset">
                <div class="flex flex-col items-center justify-between lg:flex-row max-w-6xl mx-auto lg:space-y-0 space-y-3">
                    <p class="capitalize"> © copyright 2020 by Ghub</p>
                </div>
            </div>
    