  <footer class="footer">
  <?php if(meowdata('live2d')){?>
    <?php if ( wp_is_mobile() ) {} else{?>
  <div id="landlord"><canvas id="live2d" width="240" height="260" class="live2d"></canvas></div>
  <script language="javascript">
lastScrollY=0;
function heartBeat0(){
diffY=document.body.scrollTop;
percent=.1*(diffY-lastScrollY);
if(percent>0)percent=Math.ceil(percent);
else percent=Math.floor(percent);
document.all.live2d.style.pixelTop+=percent;
lastScrollY=lastScrollY+percent;}
window.setInterval("heartBeat0()",1);
$('#live2d').click(function(){
        $('html, body').animate({                
            scrollTop: 0
        }, 100);
    });
</script>
  <?php } ?><?php } ?>
    <div class="container">
      <div class="row row-grid align-items-center">
        <div class="col-lg-12 text-lg-center btn-wrapper justify-content-center">
		<?php if(meowdata('social_github')){?><a target="_blank" href="<?php echo meowdata('social_github');?>" class="btn btn-neutral btn-icon-only btn-github btn-round btn-lg" data-toggle="tooltip" data-original-title="Github"><i class="fa fa-github"></i></a><?php } ?>
<?php if(meowdata('social_mail')){?><a href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=<?php echo meowdata('social_mail');?>" target="_blank" class="btn btn-neutral btn-icon-only btn-mail btn-round btn-lg wow fadeInUpBig" data-toggle="tooltip" data-original-title="Email：<?php echo meowdata('social_mail');?>"><i class="fa fa-envelope"></i></a><?php } ?>						  
        </div>
      </div>
      <hr>
      <div class="row align-items-center justify-content-md-between">
	      <div class="col-md-12 ">
          <ul class="nav nav-footer justify-content-center">
           <?php echo meowdata('footer_seo') ?>
          </ul>
        </div>
        <div class="col-md-12">
          <div class="copyright text-center">
            © <?php echo date('Y'); ?> <a href="<?php echo home_url();?>" ><?php echo get_bloginfo( 'name' );?> </a>. Theme by <a href="https://www.boxmoe.com"  target="_blank" >LoLiMeow</a>&nbsp;<?php echo get_num_queries(); ?> queries in <?php timer_stop(3); ?> s &nbsp;<?php echo meowdata('footer_info') ?> <div <?php if(meowdata('trackcodehidden'))echo 'style="display:none;"'?>><?php echo meowdata('trackcode') ?>
            <?php if(meowdata('webinfopage')) echo '<a href=/wp-content/themes/lolimeow-master/Webinfo.php>网站信息</a>';?>
            <?php _e('<br>已在风雨中度过'); ?> <span id="runTime">Loading...</span>
            <?php if(meowdata('icp_num')) echo '<br><a href="http://www.beian.miit.gov.cn/" rel="external nofollow" target="_blank">'.meowdata('icp_num').'</a>';
                  if(meowdata('gov_num')) echo '<a href="'.meowdata('gov_link').'" rel="external nofollow" target="_blank"><i class="govimg"></i>'.' || '.meowdata('gov_num').'</a>'; ?>
          </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div id="search"> 
	<span class="close">X</span>
	<form role="search" id="searchform" method="get" action="<?php echo home_url( '/' ) ?>">
		<input type="search" name="s" value="<?php echo htmlspecialchars($s) ?>" placeholder="输入搜索关键词..."/>
	</form>
</div>
  <script src="<?php echo md_stylesrc();?>/assets/vendor/popper/popper.min.js"></script>
  <script src="<?php echo md_stylesrc();?>/assets/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="<?php echo md_stylesrc();?>/assets/vendor/headroom/headroom.min.js"></script>    
  <script src="<?php echo md_stylesrc();?>/assets/js/wow.min.js"></script>
  <script src="<?php echo md_stylesrc();?>/assets/js/theme.js"></script>
  <script src="<?php echo md_stylesrc();?>/assets/js/other.js"></script>
  <script type="text/javascript" src="<?php echo md_stylesrc();?>/assets/js/live2d.js"></script>
  <script type="text/javascript"> loadlive2d("live2d", "<?php echo md_stylesrc();?>/assets/model/histoire/model.json"); </script>
  <?php wp_footer(); ?>
  <?php if(is_single() || is_page() ) {?><script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
  <?php if(meowdata('codept')){?><script src="<?php echo md_stylesrc();?>/assets/vendor/prettify/prettify.js"></script><?php } ?>
  <script src="<?php echo md_stylesrc();?>/assets/vendor/fancybox/fancybox.js"></script><?php } ?>
</body>
</html>
