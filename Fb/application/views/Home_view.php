
<style type="text/css">
 

 input[type="checkbox"][id^="cb"] {
  display: none;
}

label:before {
  background-color: rgba(16, 65, 99, 0.32);
  text-align: center;
  color: white;
  content: " ";
  display: block;
  border-radius: 50%;
  border: 1px solid grey; 
  position: absolute;
  top: 100px;
  left: 80px;
  z-index: 1;
  width: 100px;
  height: 100px;
  text-align: center;
  line-height: 100px;
  transition-duration: 0.4s;
  transform: scale(0);*/
}

:checked + label {
  border-color: #eee;
}

:checked + label:before {
  content: "✓";
  transform: scale(1.1);
}

:checked + label img {
  transform: scale(1.2);
  box-shadow: 0 0 3px #333;
  z-index: -1;
}
.icon-feather-more-horizontal:before {
    content: "\e99b";
    background: #e5e7eb;
}

@media (max-width: 480px){
        label:before {

            top: 18px;
            left: 33px;
        }
    }


</style>

        <!-- Main Contents -->
        <div class="main_content">
            <div class="mcontainer">

                <div class="profile user-profile">
  
                    <div class="profiles_banner">
                        <?php 
                        if($profile['cimage'] != '' ){
                                $cover = $profile['cimage'];
                        }else{
                                $cover = base_url().'assets/images/avatars/profile-cover.jpg';
                        }
                        ?>
                        <img class="imgCover" src="<?php echo $cover ?>" alt="">
                    </div>
                    <div class="profiles_content">

                        <div class="profile_avatar">
                            <div class="profile_avatar_holder"> 
                                <img  class="imgProfile" src="<?php echo $profile['pimage'] ?>" alt="">
                            </div>
                            <div class="user_status status_online"></div>
                            <div class="icon_change_photo" hidden> <ion-icon name="camera" class="text-xl"></ion-icon> </div>
                        </div>

                        <div class="profile_info">
                            <h1 class="text-center"> <?php echo $profile['name'] ?> </h1>
                            <!-- <p> Family , Food , Fashion , Fourever <a href="#">Edit </a></p> -->
                        </div>

                    </div>

                    <div class="flex justify-between lg:border-t flex-col-reverse lg:flex-row">
                        <nav class="responsive-nav pl-2 is_ligh -mb-0.5 border-transparent">
                            <ul  uk-switcher="connect: #timeline-tab; animation: uk-animation-fade">
                                <li><a href="#" > Best Photos <span class="b-image-count">0/9</span></a></li>
                                <li><a href="#" class="load_images" >Photos  <span class="fb-image-count">0</span> </a></li>
                            </ul>
                        </nav>
 

                    </div>

                </div>

                
                <div class="uk-switcher lg:mt-8 mt-4" id="timeline-tab">
                    <!-- Photos  -->
                    <div class="card md:p-12 p-2 max-w-6xl mx-auto">

                        <div class="flex justify-between items-start relative md:mb-4 mb-3">
                            <div class="flex-1">
                                <h2 class="text-2xl font-semibold"> Best Photos </h2>
                                
                            </div>
                            <a href="#" class="flex items-center justify-center z-10 h-10 w-10 rounded-full bg-blue-600 text-white absolute right-0" title="Add Best Photos" uk-toggle="target: #create-post-modal" onclick="load_fb_images('grid_images_update','')">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>

                        <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-3 mt-5 mb-5 grid_best_images" style="min-height: 300px">
                           
                        </div>

                        

                    </div>

                      <!-- Photos  -->
                    <div class="card md:p-12 p-2 max-w-6xl mx-auto">

                        <div class="flex justify-between items-start relative md:mb-4 mb-3">
                            <div class="flex-1">
                                <h2 class="text-2xl font-semibold"> Photos </h2>
                                
                            </div>
                        </div>

                        <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-3 mt-5 grid_images" style="min-height: 400px; ">
                        
                            
                        </div>

                      <!--   <div class="flex justify-center mt-6">
                            <a href="#" class="bg-white dark:bg-gray-900 font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                                Load more ..</a>
                        </div> -->

                    </div>

                   

                </div>


            </div>
        </div>


    <!-- Craete post modal -->
    <div id="create-post-modal" class="create-post" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical rounded-lg p-0 lg:w-8/12 relative shadow-2xl uk-animation-slide-bottom-small">
    
            <div class="text-center py-4 border-b">
                <h3 class="text-lg font-semibold"> Select Your Best Images</h3>
                <button class="uk-modal-close-default bg-gray-100 rounded-full p-2.5 m-1 right-2" type="button" uk-close uk-tooltip="title: Close ; pos: bottom ;offset:7"></button>
            </div>

             <div class="flex items-center w-full justify-between p-3 border-t">
    
               
                <div class="flex space-x-2">
                
                    <a href="#" class="saveBestImages bg-blue-600 flex h-9 items-center justify-center rounded-md text-white px-5 font-medium">
                      Share </a>  <span class="bestimagecount"> 0/9</span>   
                </div>
            </div>
            <div class="items-start space-x-4 p-5" style="min-height: 400px; overflow: auto;">

                <form id="bestImageForm">
                    
                     <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-3 mt-5 grid_images_update" >
                            
                                
                     </div>
                </form>
                
    
            </div>
            
           
        </div>
    </div>
    

<script type="text/javascript">
    load_best_image();

    function load_best_image() {
        $.ajax({
                url: base_url+'index.php/Home/Best_images',
                dataType: 'json',
                success: function(data) {
                    var div = '<h1 class="text-center"> Add you best photos </h1>';
                    if(data.images.length > 0){
                        var div = '';
                        $('.b-image-count').html(data.images.length+'/9');
                        $.each(data.images , function( key, value ) {

                            var img = this.img;
                            var id = this.id;
                             div +=`
                                    <div class="best-image">
                                     <div>
                                          <a href="#" style="position: absolute;z-index: 10;" aria-expanded="false" class=""> <i class="icon-feather-more-horizontal text-2xl hover:bg-gray-200 rounded-full p-2 transition-mr-1 dark:hover:bg-gray-700"></i> </a>

                                          <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700 uk-drop uk-drop-bottom-right" uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small" style="left: 297.625px; top: -0.125px;">
                                        
                                              <ul class="space-y-1">
                                                <li> 
                                                    <a href="#" imgid="`+id+`" type="Profile" class="setImage
                                                    flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800"> 
                                                    Make as profile </a>
                                                </li>
                                                <li> 
                                                    <a href="#" imgid="`+id+`" type="Cover" class="setImage flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800" > 
                                                    Make as cover </a> 
                                                </li>

                                                <li> 
                                                    <a href="#" imgid="`+id+`" type="Delete" class="setImage flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800" > 
                                                    Delete </a> 
                                                </li>
                                                
                                              </ul>
                                          
                                          </div>
                                        </div>
                                        <div  class="bg-green-400 max-w-full lg:h-44 h-36 rounded-lg relative overflow-hidden shadow uk-transition-toggle">


                                                <div uk-lightbox>
                                                    <a href="`+img+`">  
                                                    <img src="`+img+`" imgid="`+id+`" class="w-full h-full absolute object-cover inset-0">
                                                    </a>
                                                </div>

                                                    <div class="-bottom-12 absolute bg-gradient-to-b from-transparent h-1/2 to-gray-800 uk-transition-slide-bottom-small w-full"></div>
                                                <div class="absolute bottom-0 w-full p-3 text-white uk-transition-slide-bottom-small">
                                                    <div class="text-base"> </div>
                                                    <div class="flex justify-between text-xs">

                                                        <div class="flex justify-between text-xs">
                                                            
                                                        </div>
                                                      
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                `;


                        });
                    }

                     $('.grid_best_images').html(div);


                   
                }

            });
    }



    $(document).on('click','.load_images',function(e) {
          // body...
          load_fb_images('grid_images','zoom');


    });


     // load_fb_images('grid_images','zoom');


    function load_fb_images(loadClass,type) {
         // body...
            FB.getLoginStatus(function(response) {  
                    console.log(response);
                FB.api('/me', {fields:'photos.limit(100){images.width(800).height(800)}'}, function(datas) {
                    var div= '';

                    $('.fb-image-count').html(datas.photos.data.length);
                    var d=0;
                    $.each(datas.photos.data, function( key, value ) {

                        var img = datas.photos.data[key];
                        var id = datas.photos.data[key]['id'];
                        var cls = '';
                        var url = '#';
                        var checkedcls =''
                          if(type == 'zoom'){
                            cls = 'uk-lightbox';
                            url = img['images'][0]['source'];
                          }else{

                            var checked = '';
                             $('.best-image img').each(function(e) {

                                if( $(this).attr('imgid') == id  ) {

                                    checked = 'checked';
                                    d++;
                                }

                            });

                            $('.bestimagecount').html(d+'/9');

                            checkedcls = `
                                        <input type="checkbox" name="bestImage[]" value="`+id+`,`+img['images'][0]['source']+`" class="checkedimg" id="cb`+key+`" `+checked+` />
                                        `;
                          }

                          div +=`
                            <div>
                                <div `+cls+` class="bg-green-10 max-w-full lg:h-44 h-36 rounded-lg relative overflow-hidden shadow uk-transition-toggle">
                                        <a href="`+url+`">  
                                        `+checkedcls+`
                                        <label for="cb`+key+`">
                                            <img src="`+img['images'][0]['source']+`" imgid="`+id+`" class="w-full h-full absolute object-cover inset-0">
                                        </label>
                                        </a>

                                        <div class="-bottom-12 absolute bg-gradient-to-b from-transparent h-1/2 to-gray-800 uk-transition-slide-bottom-small w-full"></div>
                                        <div class="absolute bottom-0 w-full p-3 text-white uk-transition-slide-bottom-small">
                                            <div class="text-base"> </div>
                                            <div class="flex justify-between text-xs">
                                              
                                            </div>
                                        </div>
                                </div>
                            </div>
                        `;
                       

                    });


                    $('.'+loadClass).html(div);
                });
              });
     }

    $(document).on('click','.checkedimg',function(e) {
      // body...
      var best = $('.checkedimg:checked').length;

      var max = 9;

      if(max < best ){

            Toast.fire({
              icon: 'warning',
              title: 'You can add maximum 9 images'
            })
            
            $(this).prop('checked', false);

            return false;
      }

      $('.bestimagecount').html(best+'/9');
    });



    function save_selected_images() {
        var bestImageForm = $('#bestImageForm').serializeArray();
        $.ajax({
            url: base_url+'index.php/Home/Save_Best_images',
            type:'POST',
            dataType: 'json',
            data: bestImageForm,
            success: function(data) {
                    if(data.success == true){
                        load_best_image();
                        $('.uk-close').click();

                    }

            }

        });

    }


    $(document).on('click','.saveBestImages',function(e) {
        // body...
        var best = $('.checkedimg:checked').length;
         var max = 9;


        if(best  == 0 ){

          Toast.fire({
              icon: 'warning',
              title: 'Please select your best images'
            });
            return false
        }

        if(max < best ){

            Toast.fire({
              icon: 'warning',
              title: 'You can add maximum 9 images'
            })
            
            $(this).prop('checked', false);

            return false
        }
        save_selected_images();
    });

    $(document).on('click','.setImage',function(e) {
        e.preventDefault();

        var id = $(this).attr('imgid');
        var type = $(this).attr('type');
        var img = $(this).parent().parent().parent().parent().parent().find('img').attr('src');
        var parent = $(this).parent().parent().parent().parent().parent();

        // alert(img);
        Swal.fire({
          imageUrl: img,
          // imageWidth: 400,
          imageHeight: 200,
          title: 'Are you sure?',
          text: "You want change "+type+" Image!",
          // icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes',
          cancelButtonText: 'No, cancel!',
          reverseButtons: true
        }).then((result) => {
          if (result.isConfirmed) {
            save_pc_images(img,type,id,parent);
          }
          
      });



    });

    function save_pc_images(img,type,id,parent) {
        $.ajax({
            url: base_url+'index.php/Home/Save_pc_images',
            type:'POST',
            dataType: 'json',
            data: {id: id, type: type, img: img},
            success: function(data) {
                if(data.success == true){

                    if(type != 'Delete'){
                        $('.img'+type).attr('src',img);

                    }else{
                        parent.remove();
                        load_best_image();
                    }

                }

            }

        });

    }





   


</script>