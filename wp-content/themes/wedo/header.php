<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title><?php bloginfo("name"); ?></title>
        <?php include("includescript.php"); ?>
</head>
<body>

  <!-- START HEADER -->
  <div class="header head-pat6">
        <div class="container_12">
            <!-- START HEADING -->
            <div class="heading">
                <!-- START LOGO -->
                <div class="logo">
                    <a href="index.html"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="" width="80" height="37"/></a>
                </div>
                <!-- END LOGO -->
                <!-- START NAVIGATION -->
                <?php include("menu.php");?>
                <!-- END NAVIGATION -->
            </div>
            <!-- END HEADING -->
        </div>
         <?php if(is_home()):?>
        <!-- START SLIDER -->
        <div class="container_12">
            <div class="jcycle">
                <div class="jcycle-slider-item">
                <div class="grid_6 jcycle-slider-item-text">
                        <h1>WEDOApp维度云计算<?php is_home();?></h1>
                        <h1> Computing Cloud</h1>
                        <span> VMware offers you an evolutionary and practical path to this new model, with solutions that harness the power of the cloud while ensuring security and preserving the value of your existing technology investments.<a href="infrastructure.html" class="slider-readmore"> Read More »</a></span>
                </div>
                <div class="grid_6 jcycle-slider-item-image">
                        <img src="<?php bloginfo('template_url'); ?>/images/content/jcycle/bg1.png" alt=""/>
                </div>
                </div>
                <div class="jcycle-slider-item">
                  <div class="grid_6 jcycle-slider-item-text">
                        <h1>WEDOApp 工作流产品</h1>
                        <h1>Workflow Products</h1>
                        <span>In today's world, every organization is faced with the challenges of coping with processes, from the mundane to the elaborate (company-wide invoices and claims processing). K2 is a leader in developing sophisticated yet easy-to-use tools that can help you solve any process challenge.<a href="applications.html" class="slider-readmore">Read More »</a></span>
                    </div>
                    <div class="grid_6 jcycle-slider-item-image ">
                        <img src="<?php bloginfo('template_url'); ?>/images/content/jcycle/bg2.png" alt=""/>
                    </div>
                </div>
                <div class="jcycle-slider-item">
                  <div class="grid_6 jcycle-slider-item-text">
                        <h1>WEDOApp FlexCube</h1>
                        <h2>Server+Switch+Storage 魔立方</h2>
                        <span>Diam, sed, turpis ac rhoncus aliquet risus arcu habitasse! Dignissim cum? Est rhoncus? Turpis massa, tincidunt nunc enim mauris enim aliquam? Non nisi urna placerat ultrices enim porta tristique.<a href="infrastructure.html" class="slider-readmore">Read More »</a></span>
                    </div>
                    <div class="grid_6 jcycle-slider-item-image ">
                        <img src="<?php bloginfo('template_url'); ?>/images/content/jcycle/bg3.png" alt=""/>
                    </div>
                </div>
            </div>
    </div>
    <?php endif;?>
    <!-- END SLIDER -->
</div>
<!-- END Healder -->