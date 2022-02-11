<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags  -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

   <title> <?php echo $app['app_title'];?> :: Welcome</title>
    <link rel="icon" type="image/png" href="<?php echo base_url();?>/assets/img/favicon.png" />

    <!--Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/app.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/main.css" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" rel="stylesheet" />
    <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
      
    <!--Mapbox styles-->
</head>

<body>
    <div id="huro-app" class="app-wrapper">
        <div class="app-overlay"></div>

        <!--Full pageloader-->
        <!-- Pageloader -->
        <div class="pageloader is-full"></div>
        <div class="infraloader is-full is-active"></div>
        <!--Mobile navbar-->
        <nav class="navbar mobile-navbar no-shadow is-hidden-desktop is-hidden-tablet" aria-label="main navigation">
            <div class="container">
                <!-- Brand -->
                <div class="navbar-brand">
                    <!-- Mobile menu toggler icon -->
                    <div class="brand-start">
                        <div class="navbar-burger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <a class="navbar-item is-brand" href="<?php echo base_url();?>">
                        <img class="light-image" src="<?php echo base_url();?>/assets/img/logos/logo/logo.svg" alt="">
                        <img class="dark-image" src="<?php echo base_url();?>/assets/img/logos/logo/logo-light.svg" alt="">
                    </a>

                    <div class="brand-end">
                       
                        <div class="dropdown is-right is-spaced dropdown-trigger user-dropdown">
                            <div class="is-trigger" aria-haspopup="true">
                                <div class="profile-avatar">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="<?php echo base_url();?>/assets/img/avatars/photos/8.jpg" alt="">
                                </div>
                            </div>
                           <!--  <div class="dropdown-menu" role="menu">
                                <div class="dropdown-content">
                                    <div class="dropdown-head">
                                        <div class="h-avatar is-large">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="<?php echo base_url();?>/assets/img/avatars/photos/8.jpg" alt="">
                                        </div>
                                        <div class="meta">
                                            <span>Erik Kovalsky</span>
                                            <span>Product Manager</span>
                                        </div>
                                    </div>
                                    <a href="#" class="dropdown-item is-media">
                                        <div class="icon">
                                            <i class="lnil lnil-user-alt"></i>
                                        </div>
                                        <div class="meta">
                                            <span>Profile</span>
                                            <span>View your profile</span>
                                        </div>
                                    </a>
                                    <a class="dropdown-item is-media layout-switcher">
                                        <div class="icon">
                                            <i class="lnil lnil-layout"></i>
                                        </div>
                                        <div class="meta">
                                            <span>Layout</span>
                                            <span>Switch to admin/webapp</span>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <a href="#" class="dropdown-item is-media">
                                        <div class="icon">
                                            <i class="lnil lnil-briefcase"></i>
                                        </div>
                                        <div class="meta">
                                            <span>Projects</span>
                                            <span>All my projects</span>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item is-media">
                                        <div class="icon">
                                            <i class="lnil lnil-users-alt"></i>
                                        </div>
                                        <div class="meta">
                                            <span>Team</span>
                                            <span>Manage your team</span>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <a href="#" class="dropdown-item is-media">
                                        <div class="icon">
                                            <i class="lnil lnil-cog"></i>
                                        </div>
                                        <div class="meta">
                                            <span>Settings</span>
                                            <span>Account settingssssssssssss</span>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <div class="dropdown-item is-button">
                                        <a class="button h-button is-primary is-raised is-fullwidth logout-button" href="<?php echo base_url();?>login/logout">
                                            <span class="icon is-small">
                                              <i data-feather="log-out"></i>
                                          </span>
                                            <span>Logouts</span>
                                        </a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>

                </div>
            </div>
        </nav>
        <!--Webapp navbar regular-->
        <div class="webapp-navbar">
            <div class="webapp-navbar-inner">
                <div class="left">
                    <a href="<?php echo base_url();?>" class="brand">
                        <img class="light-image" src="<?php echo base_url();?>/assets/img/logos/logo/logo.svg" alt="" />
                        <img class="dark-image" src="<?php echo base_url();?>/assets/img/logos/logo/logo-light.svg" alt="" />
                    </a>
                    <div class="separator"></div>
                    <div class="dropdown project-dropdown dropdown-trigger is-spaced">
                        <div class="h-avatar is-small">
                            <span class="avatar is-fake is-h-green">
                              <span><?php echo substr($this->session->userdata('admin_name'), 0, 1);?></span>
                            </span>
                        </div>
                         <div class="dropdown-menu" role="menu">
                            <div class="dropdown-content">
                                <?php foreach($app['branches'] as $branch){ ?>
                                <div class="dropdown-block">
                                    <div class="h-avatar is-small">
                                        <span class="avatar is-fake is-warning">
                                          <span><?php echo substr($branch->branch_name,0,1);?></span>
                                        </span>
                                    </div>
                                    <div class="meta">
                                        <span class="dark-inverted"><?php echo $branch->branch_name;?></span>
                                        <span><?php echo $branch->branch_name;?></span>
                                    </div>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                    </div> 
                    <h1 id="" class="title is-5">
                        <?php echo $this->session->userdata('admin_name'); ?></h1>
                </div>
                <div class="center">
                    <div id="webapp-navbar-menu" class="centered-links">

                        <?php 
                    $CI =& get_instance();
                    $CI->load->model('General_Model');
                    $menu_title_v = $CI->General_Model->get_side_bar_menu_v1('privilege_title');

                    if(!empty($menu_title_v))
                    { 

                    for($jd=0;$jd<count($menu_title_v);$jd++)
                    {


                    ?>

                        <a id="<?php echo strtolower($menu_title_v[$jd]->privilege_title); ?>-navbar-menu" class="centered-link centered-link-toggle" data-menu-id="<?php echo strtolower($menu_title_v[$jd]->privilege_title); ?>-webapp-menu">
                           <i class="fa <?php echo strtolower($menu_title_v[$jd]->privilege_icon); ?>"></i>
                            <span><?php echo strtolower($menu_title_v[$jd]->privilege_title); ?></span>
                        </a>
                        <?php } ?>

                <?php } ?>
                    </div>

                </div>
                <div class="right">
                    <div class="toolbar ml-auto">

                        <div class="toolbar-notifications is-hidden-mobile">
                            <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                <div class="is-trigger" aria-haspopup="true">
                                    <i data-feather="bell"></i>
                                    <span class="new-indicator pulsate"></span>
                                </div>
                                <div class="dropdown-menu" role="menu">
                                    <div class="dropdown-content">
                                        <div class="heading">
                                            <div class="heading-left">
                                                <h6 class="heading-title">Notifications</h6>
                                            </div>
                                            <div class="heading-right">
                                                <a class="notification-link" href="/admin-profile-notifications.html">See all</a>
                                            </div>
                                        </div>
                                        <ul class="notification-list">
                                            <li>
                                                <a class="notification-item">
                                                    <div class="img-left">
                                                        <img class="user-photo" alt="" src="https://via.placeholder.com/150x150" data-demo-src="<?php echo base_url();?>/assets/img/avatars/photos/7.jpg" />
                                                    </div>
                                                    <div class="user-content">
                                                        <p class="user-info"><span class="name">Alice C.</span> left a comment.</p>
                                                        <p class="time">1 hour ago</p>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="dropdown profile-dropdown dropdown-trigger is-spaced is-right">
                        <img src="<?php echo $this->session->userdata('profile_pic'); ?>" alt="">
                        <span class="status-indicator"></span>

                        <div class="dropdown-menu" role="menu">
                            <div class="dropdown-content">
                                <div class="dropdown-head">
                                    <div class="h-avatar is-large">
                                        <img class="avatar" src="<?php echo $this->session->userdata('profile_pic'); ?>" alt="">
                                    </div>
                                    <div class="meta">
                                        <span><?php echo $this->session->userdata('admin_name'); ?></span>
                                        <?php if($this->session->userdata('admin_type') != 'SUB ADMIN'){?>
                                        <span>Admin</span>
                                        <?php } ?>
                                         <?php if($this->session->userdata('admin_type') == 'SUB ADMIN'){?>
                                        <span>Seller</span>
                                        <?php } ?>
                                    </div>
                                </div>
                                <a href="<?php echo base_url();?>home/profile/edit_profile" class="dropdown-item is-media">
                                    <div class="icon">
                                        <i class="lnil lnil-user-alt"></i>
                                    </div>
                                    <div class="meta">
                                        <span>Profile</span>
                                        <span>View your profile</span>
                                    </div>
                                </a>
                                <hr class="dropdown-divider">
                                <div class="dropdown-item is-button">
                                    <a href="<?php echo base_url();?>login/logout" class="button h-button is-primary is-raised is-fullwidth logout-button">
                                        <span class="icon is-small">
                                          <i data-feather="log-out"></i>
                                      </span>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <div class="webapp-subnavbar">

            <?php 
                    $CI =& get_instance();
                    $CI->load->model('General_Model');
                    $menu_title_v = $CI->General_Model->get_side_bar_menu_v1('privilege_title');

                    if(!empty($menu_title_v))
                    { 

                    for($jd=0;$jd<count($menu_title_v);$jd++)
                    {


                    ?>
            <div id="<?php echo strtolower($menu_title_v[$jd]->privilege_title); ?>-webapp-menu" class="webapp-subnavbar-inner tabs-wrapper">
                <div class="tabs-inner">
                    <div class="tabs is-centered is-2">
                        <ul>
                            <li data-tab="elements-basic-pages-tab-<?php echo strtolower($menu_title_v[$jd]->privilege_title); ?>" class="is-active"><a><?php echo ucfirst($menu_title_v[$jd]->privilege_title); ?></a></li>
                        </ul>
                    </div>
                </div>


                <div class="container">
                    <div id="elements-basic-pages-tab-<?php echo strtolower($menu_title_v[$jd]->privilege_title); ?>" class="tab-content is-active">
                        <div class="tab-content-inner">
                            <div class="center has-slimscroll">
                                <div class="columns">

                                      <?php
                                            $CI =& get_instance();
                                            $CI->load->model('General_Model');
                                            $menu_module_v = $CI->General_Model->get_side_bar_menu_v1('privilege_module',$menu_title_v[$jd]->privilege_title);
                                            //echo $this->db->last_query();exit;

                                            for($j=0;$j<count($menu_module_v);$j++)
                                            {
                                            ?>
                                            <?php

                                            $CI =& get_instance();
                                            $CI->load->model('General_Model');
                                            $menu_module_v1 = $CI->General_Model->get_side_bar_menu_v1($gdata='',$menu_title_v[$jd]->privilege_title,$menu_module_v[$j]->privilege_module);


                                            ?>
                                    
                                     <?php
                                            for($k=0;$k<count($menu_module_v1);$k++)
                                            {?>
                                     <?php if($k == 0){ ?>   
                                    <div class="column is-3">
                                        <h4 class="column-heading"><?php echo ucfirst($menu_title_v[$jd]->privilege_title); ?></h4>
                                        <ul>
                                     <?php } ?>
                                            <li>
                                                <a href="<?php echo base_url();?><?php echo $menu_module_v1[$k]->controller_name;?>/<?php echo $menu_module_v1[$k]->function_name;?>">
                                                    <span><?php echo ucfirst($menu_module_v1[$k]->privilege_sub_module); ?></span>
                                                </a>
                                            </li>
                                      <?php if(count($menu_module_v1) == $k+1){ ?>   
                                        </ul>
                                    </div>
                                    <?php } ?>
                                     <?php } ?>
                                    
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <?php } } ?>

        </div>