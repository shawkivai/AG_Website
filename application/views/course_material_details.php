<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '600570166802194',
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=600570166802194";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="main_page">
    
     
<div class="mainbar">
    

    <div class="article">
        <p><span style="font-size: 18px"><?php echo $course_materials_info->file_name?><br></span></p>
               <span style="font-size: 13px"> Posted on <span class="date"><?php echo $course_materials_info->created_date_time;?></span>
        
        
        <br>Posted by <a href="#"><?php echo $course_materials_info->author_name?></a>
        <hr>
        
        
         
        
        <br><p class="spec"><a href="<?php echo base_url().$course_materials_info->file_location?>" class="rm">Download File &raquo;</a>
          <div class="fb-share-button" 
    data-href="<?php echo base_url() . $course_materials_info->file_location; ?>" 
    data-layout="button_count"> 
  </div></p>
     <br>
     
         <iframe width="1100" height="400" src="<?php echo base_url().$course_materials_info->file_location?>" frameborder="20" ></iframe>
    
    </div>
    <br><br>
<br><br> 
</div>
    </div>
</div>
   



     
