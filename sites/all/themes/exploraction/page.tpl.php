<?php
// $Id: page.tpl.php,v 1.28.2.1 2009/04/30 00:13:31 goba Exp $


    global $user;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <?php print $head ?>
  <title><?php print $head_title ?></title>
  <?php print $styles ?>
  <?php print $scripts ?>
  <script type="text/javascript" src="http://mediaplayer.yahoo.com/js"></script>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
</head>

<body>
<table id="shadow_table" cellspacing="0" cellpadding="0">
    <tr>
        <td id="shadow_left"></td>
        <td>
            <div id="main_column">
                <div id="header">
                    <div class="clear-block"></div>
                </div>
                <!-- <div id="top_nav_green_bar"></div>
                <div id="top_nav">
                    <div id="primary_links">
                        <?php if (isset($primary_links)) {  
                                print theme('links', $primary_links, array('class' => 'links', 'id' => 'navlist'));
                             } ?>
                    </div>
                </div>
                <div style="height: 25px; background-color: black;">
                    &nbsp;
                </div> -->
                <div id="name-and-slogan">
                    <div id="animated_man">
                        <img src="<?php print $base_path . $directory; ?>/images/standing_man.gif" />
                    </div>
                    <div id="banner">
                        <img src="<?php print $base_path . $directory; ?>/images/header.gif" />
                    </div>
                    <div style="clear: both"></div>
                </div> <!-- /name-and-slogan -->
                <?php if ($header): ?>
                  <?php print $header; ?>
                <?php endif; ?>

                <div id="main">
                    
                    <div id="front_content">
                        
                        <br clear="both"/>
                        <div id="col_left">
                            
                            <div  id="sidebar-left"><?php print $left ?></div>
                            <!-- <div class="social_media_div">
                                 <a href="http://www.facebook.com/pages/ExplorAction/183170008388868" target="_blank"> 
                                     <img src="<?php print $base_path . $directory ?>/images/facebook_icon.gif" alt="Find Dal on Facebook" />
                                     Find Us on Facebook
                                 </a>
                             </div>
                             <div class="clear-block"></div> -->
                            <!-- <div class="social_media_div">
                                <a href="http://www.twitter.com/exploraction" target="_blank"> 
                                    <img src="<?php print $base_path . $directory ?>/images/twitter_icon.gif" alt="Find Dal on Facebook" />
                                    Follow Us on Twitter
                                </a>
                            </div> -->
                            <div class="clear-block"></div>
                            <!-- BEGIN: Constant Contact Stylish Email Newsletter Form -->
                            <div align="center" style="padding-top: 20px">
                                <div style="width:160px;">
                                <form name="ccoptin" action="http://visitor.r20.constantcontact.com/d.jsp" target="_blank" method="post" style="margin-bottom:3;"><span style="background-color: #006699; float:right;margin-right:5;margin-top:3"><img src="https://imgssl.constantcontact.com/ui/images1/visitor/email1_trans.gif" alt="Email Newsletter icon, E-mail Newsletter icon, Email List icon, E-mail List icon" border="0"></span>
                                <font style="font-weight: bold; color:#006699;">Sign up for our Email Newsletter</font>
                                <input type="text" name="ea" size="20" value="" style="font-family:Verdana,Geneva,Arial,Helvetica,sans-serif; font-size:10px; border:1px solid #999999;">
                                <input type="submit" name="go" value="GO" class="submit"  style="font-family:Verdana,Arial,Helvetica,sans-serif; font-size:10px;">
                                <input type="hidden" name="llr" value="6zo77ogab">
                                <input type="hidden" name="m" value="1106454133565">
                                <input type="hidden" name="p" value="oi">
                                </form>
                                </div>
                            </div>
                            <!-- END: Constant Contact Stylish Email Newsletter Form -->
                            <div id="facebook_like_box">
                                <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like-box href="http://www.facebook.com/pages/ExplorAction/183170008388868" width="200" show_faces="true" stream="false" header="true"></fb:like-box>
                            </div>
                        </div>
                        <div id="col_right">
                            <h1 id="page_title"><?=$title?></h1>
                            <div class="tabs"><?php print $tabs ?></div>
                            <?php if ($show_messages) { print $messages; } ?>
                            <?php print $content; ?>
                        </div>
                    </div>
                    <div class="clear-block"></div>
                </div>
    
                
    
            </div>
            <div id="footer-wrapper" class="clearfix">
              <div id="footer">
                  <hr/>
                <?php if ($below) { ?><div id="below"><?php print $below; ?></div><?php } ?>
                <div class="legal">
                  Copyright &copy; <?php print date('Y') ?> <a href="/"><?php print $site_name ?></a>. <?php print $footer_message ?><br/><br/>
                  <a href="/user">Login</a>

                </div>
              </div>
            </div> <!-- /footer-wrapper -->
        </td>
    </tr>
</table>

<?php print $closure ?>


</body>
</html>
