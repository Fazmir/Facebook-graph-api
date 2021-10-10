            
    </div>



    
    <!-- For Night mode -->
  
    <!-- Javascript
    ================================================== -->
    
    <script src="<?php echo base_url() ?>assets/js/tippy.all.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/uikit.js"></script>
    <script src="<?php echo base_url() ?>assets/js/simplebar.js"></script>
    <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap-select.min.js"></script>

 
<script type="text/javascript">
        (function (window, document, undefined) {
            'use strict';
            if (!('localStorage' in window)) return;
            var nightMode = localStorage.getItem('gmtNightMode');
            if (nightMode) {
                document.documentElement.className += ' night-mode';
            }
        })(window, document);
    
        (function (window, document, undefined) {
    
            'use strict';
    
            // Feature test
            if (!('localStorage' in window)) return;
    
            // Get our newly insert toggle
            var nightMode = document.querySelector('#night-mode');
            if (!nightMode) return;
    
            // When clicked, toggle night mode on or off
            nightMode.addEventListener('click', function (event) {
                event.preventDefault();
                document.documentElement.classList.toggle('dark');
                if (document.documentElement.classList.contains('dark')) {
                    localStorage.setItem('gmtNightMode', true);
                    return;
                }
                localStorage.removeItem('gmtNightMode');
            }, false);
    
        })(window, document);


        function statusChangeCallback(response) {  
            // console.log(response);
          if (response.status === 'connected') {
              // fbLogout();
          }else {     
             // window.location.replace(base_url);
          }


        }

        function fbLogout() {
              FB.logout(function() {
                window.location.replace(base_url);

              });
        }


        function fbLogin() {
            
          FB.login(function(response) {
              if (response.authResponse) {
                       // console.log(response);

                 var userId =response.authResponse.userID;    
                 FB.api(
                    '/me',
                    'GET',
                    {"fields":"id,name,email,birthday,cover,hometown,picture.width(800).height(800),albums.limit(2){cover_photo{images}}"},
                    function(response) {
                       console.log(response);
                        // if(response.email === true ){
                           client_login_social(response);
                      // }
                       
                    }
                  );
                  } else {
                   console.log('User cancelled login or did not fully authorize.');
                  }
              });

          }

         function client_login_social(response) {
            $.ajax({
                url: base_url+'index.php/Login/client_login_social',
                type: 'POST',
                data: {fb : response },
                dataType: 'json',
                success: function(data) {
                    if(data.success == true){

                         window.location.replace(base_url+'index.php/Home');
                      
                    }else{

                    }
                   
                }

            });

        }

        const Toast = Swal.mixin({
          toast: true,
          position: 'top',
          showConfirmButton: false,
          timer: 5000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })


       

     
    </script>



</body>

<!-- Mirrored from demo.foxthemes.net/socialitev2.1/timeline.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Oct 2021 11:09:10 GMT -->
</html>