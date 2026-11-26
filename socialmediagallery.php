<?php
  $bannerheading = 'S O C I A L&nbsp;&nbsp;&nbsp;M E D I A&nbsp;&nbsp;&nbsp;G A L L E R Y';
  include 'mainbanner.php';
?>
<div id='gallery' class='GallerySocialMediaWrapper'></div>
<script language=javascript>
RenderSocialMediaGallery('<?php echo $action ?>', <?php echo $page ?>);
window . addEventListener ('scroll' , function (event) {
  RunGalleryListener () ;
} , true );
</script>