<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags  -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Huro :: Components</title>
    <link rel="icon" type="image/png" href="<?php echo base_url();?>/assets/img/favicon.png" />

    <!--Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/app.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/main.css" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" rel="stylesheet" />

</head>

<body>
    <div id="huro-app" class="app-wrapper">
        <div class="app-overlay"></div>
        <!--Pageloader-->
        <!-- Pageloader -->
        <div class="pageloader"></div>
        <div class="infraloader is-active"></div>
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

                    <a class="navbar-item is-brand" href="index.html">
                        <img class="light-image" src="<?php echo base_url();?>/assets/img/logos/logo/logo.svg" alt="">
                        <img class="dark-image" src="<?php echo base_url();?>/assets/img/logos/logo/logo-light.svg" alt="">
                    </a>

                    <div class="brand-end">
                        <div class="navbar-item has-dropdown is-notification is-hidden-tablet is-hidden-desktop">
                            <a class="navbar-link is-arrowless" href="javascript:void(0);">
                                <i data-feather="bell"></i>
                                <span class="new-indicator pulsate"></span>
                            </a>
                            <div class="navbar-dropdown is-boxed is-right">
                                <div class="heading">
                                    <div class="heading-left">
                                        <h6 class="heading-title">Notifications</h6>
                                    </div>
                                    <div class="heading-right">
                                        <a class="notification-link" href="#">See all</a>
                                    </div>
                                </div>
                                <div class="inner has-slimscroll">

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
                        <div class="dropdown is-right is-spaced dropdown-trigger user-dropdown">
                            <div class="is-trigger" aria-haspopup="true">
                                <div class="profile-avatar">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="<?php echo base_url();?>/assets/img/avatars/photos/8.jpg" alt="">
                                </div>
                            </div>
                            <div class="dropdown-menu" role="menu">
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
                                            <span>Account settings</span>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <div class="dropdown-item is-button">
                                        <button class="button h-button is-primary is-raised is-fullwidth logout-button">
                                            <span class="icon is-small">
                                              <i data-feather="log-out"></i>
                                          </span>
                                            <span>Logout</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
        <!--Mobile sidebar-->

        <!--Sidebar-->
       <?php echo $this->load->view('common/sidebar');?>
        <!--Page body-->

        
        <!-- Content Wrapper -->
        <div id="app-home" class="view-wrapper" data-naver-offset="342" data-menu-item="#components-sidebar-menu" data-mobile-item="#home-sidebar-menu-mobile">

            <div class="page-content-wrapper">
                <div class="page-content is-relative">

                    <div class="page-title has-text-centered">
                        <!-- Sidebar Trigger -->
                        <div class="huro-hamburger nav-trigger push-resize" data-sidebar="components-sidebar">
                            <span class="menu-toggle has-chevron">
                              <span class="icon-box-toggle">
                                  <span class="rotate">
                                      <i class="icon-line-top"></i>
                                      <i class="icon-line-center"></i>
                                      <i class="icon-line-bottom"></i>
                                  </span>
                            </span>
                            </span>
                        </div>

                        <div class="title-wrap">
                            <h1 class="title is-4">Components</h1>
                        </div>

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
                                                            <img class="user-photo" alt="" src="https://via.placeholder.com/150x150" data-demo-src="<?php echo base_url();?>/assets/img/avatars/photos/25.jpg" />
                                                        </div>
                                                        <div class="user-content">
                                                            <p class="user-info"><span class="name">Melany W.</span> left a comment.</p>
                                                            <p class="time">3 hours ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <a class="toolbar-link right-panel-trigger" data-panel="activity-panel">
                                <i data-feather="grid"></i>
                            </a>
                        </div>
                    </div>

                    <div class="page-content-inner">
                         <!--Ecommerce Dashboard V1-->
                        <div class="ecommerce-dashboard ecommerce-dashboard-v1">

                            <!--Header-->
                            <div class="dashboard-header">
                                <div class="h-avatar is-large">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/8.jpg" alt="">
                                </div>
                                <div class="start">
                                    <h3 class="dark-inverted">Welcome back, Erik Kovalsky</h3>
                                    <p>We're very happy to see you again on your dashboard.</p>
                                </div>
                                <div class="end">
                                    <button class="button h-button is-dark-outlined">View Reports</button>
                                    <button class="button h-button is-primary is-elevated">Manage Shop</button>
                                </div>
                            </div>

                            <div class="columns is-multiline">

                                <!--Dashboard tile-->
                                <div class="column is-3">
                                    <div class="dashboard-tile">
                                        <div class="tile-head">
                                            <h3>Total Sales</h3>
                                            <div class="h-icon is-info is-rounded">
                                                <i data-feather="gift"></i>
                                            </div>
                                        </div>
                                        <div class="dashboard-tile-inner">
                                            <div class="left">
                                                <span class="dark-inverted">641.4K</span>
                                            </div>
                                            <div class="right">
                                                <div id="spark1"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Dashboard tile-->
                                <div class="column is-3">
                                    <div class="dashboard-tile">
                                        <div class="tile-head">
                                            <h3>Total Income</h3>
                                            <div class="h-icon is-purple is-rounded">
                                                <i data-feather="dollar-sign"></i>
                                            </div>
                                        </div>
                                        <div class="dashboard-tile-inner">
                                            <div class="left">
                                                <span class="dark-inverted">$389.9K</span>
                                            </div>
                                            <div class="right">
                                                <div id="spark2"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Dashboard tile-->
                                <div class="column is-3">
                                    <div class="dashboard-tile">
                                        <div class="tile-head">
                                            <h3>New Orders</h3>
                                            <div class="h-icon is-green is-rounded">
                                                <i data-feather="box"></i>
                                            </div>
                                        </div>
                                        <div class="dashboard-tile-inner">
                                            <div class="left">
                                                <span class="dark-inverted">371</span>
                                            </div>
                                            <div class="right">
                                                <div id="spark3"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Dashboard tile-->
                                <div class="column is-3">
                                    <div class="dashboard-tile">
                                        <div class="tile-head">
                                            <h3>Abandonned</h3>
                                            <div class="h-icon is-orange is-rounded">
                                                <i data-feather="shopping-cart"></i>
                                            </div>
                                        </div>
                                        <div class="dashboard-tile-inner">
                                            <div class="left">
                                                <span class="dark-inverted">29</span>
                                            </div>
                                            <div class="right">
                                                <div id="spark4"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               

                                <!--Flex Stat Widget-->
                                <div class="column is-6">
                                    <div class="stat-widget flex-stat-widget is-straight">
                                        <div class="chart-media">
                                            <div class="meta">
                                                <h4 class="dark-inverted">Product Returns</h4>
                                                <span class="is-dark-primary">Avg. 642</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Bonum integritas
                                                    corporis: misera debilitas. Ita ne hoc quidem modo paria.</p>
                                            </div>
                                            <div class="chart-container">
                                                <div id="flex-stat-circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Flex Stat Widget-->
                                <div class="column is-6">
                                    <div class="stat-widget flex-stat-widget is-straight has-fullheight">
                                        <div class="chart-media">
                                            <div class="meta">
                                                <h4 class="dark-inverted">Customer Engagement</h4>
                                                <span class="is-dark-primary">+34.2%</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Bonum integritas
                                                    corporis: misera debilitas. Ita ne hoc quidem modo paria.</p>
                                            </div>
                                            <div class="chart-container">
                                                <div id="flex-stat-radial"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Grouped Stat Widget-->
                                <div class="column is-6">
                                    <div class="stat-widget grouped-stat-widget is-straight">
                                        <div class="widget-head">
                                            <h3 class="dark-inverted">Shipping Stats</h3>
                                        </div>
                                        <div class="chart-group">
                                            <div class="group">
                                                <div class="group-content">
                                                    <div class="chart-container">
                                                        <div id="widget-group-radial-1"></div>
                                                    </div>
                                                    <span class="dark-inverted">36.8K</span>
                                                    <p>Free Shipping</p>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div class="group-content">
                                                    <div class="chart-container">
                                                        <div id="widget-group-radial-2"></div>
                                                    </div>
                                                    <span class="dark-inverted">292.3K</span>
                                                    <p>Ground Shipping</p>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div class="group-content">
                                                    <div class="chart-container">
                                                        <div id="widget-group-radial-3"></div>
                                                    </div>
                                                    <span class="dark-inverted">108.2K</span>
                                                    <p>Next Day Air</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Grouped Stat Widget-->
                                <div class="column is-6">
                                    <div class="stat-widget grouped-stat-widget is-straight">
                                        <div class="widget-head">
                                            <h3 class="dark-inverted">Customer Support</h3>
                                        </div>
                                        <div class="chart-group">
                                            <div class="group">
                                                <div class="group-content">
                                                    <div class="chart-container is-gauge">
                                                        <div id="widget-group-radial-4"></div>
                                                    </div>
                                                    <span class="dark-inverted">641</span>
                                                    <p>Active Tickets</p>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div class="group-content">
                                                    <div class="chart-container is-gauge">
                                                        <div id="widget-group-radial-5"></div>
                                                    </div>
                                                    <span class="dark-inverted">84</span>
                                                    <p>Escalated</p>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div class="group-content">
                                                    <div class="chart-container is-gauge">
                                                        <div id="widget-group-radial-6"></div>
                                                    </div>
                                                    <span class="dark-inverted">1,749</span>
                                                    <p>Closed Tickets</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Table-->
                                <div class="column is-12">

                                    <!--Header-->
                                    <div class="table-header">
                                        <h3 class="dark-inverted">Recent Orders</h3>
                                        <div class="field">
                                            <div class="control">
                                                <div class="h-select">
                                                    <div class="select-box">
                                                        <span>Last 30 days</span>
                                                    </div>
                                                    <div class="select-icon">
                                                        <i data-feather="chevron-down"></i>
                                                    </div>
                                                    <div class="select-drop has-slimscroll-sm">
                                                        <div class="drop-inner">
                                                            <div class="option-row">
                                                                <input type="radio" name="instagram_period_select">
                                                                <div class="option-meta">
                                                                    <span>Last Week</span>
                                                                </div>
                                                            </div>
                                                            <div class="option-row">
                                                                <input type="radio" name="instagram_period_select">
                                                                <div class="option-meta">
                                                                    <span>Last 30 days</span>
                                                                </div>
                                                            </div>
                                                            <div class="option-row">
                                                                <input type="radio" name="instagram_period_select">
                                                                <div class="option-meta">
                                                                    <span>Last 60 days</span>
                                                                </div>
                                                            </div>
                                                            <div class="option-row">
                                                                <input type="radio" name="instagram_period_select">
                                                                <div class="option-meta">
                                                                    <span>Last 90 days</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex-table">

                                        <!--Table header-->
                                        <div class="flex-table-header">
                                            <span class="is-grow">Customer</span>
                                            <span>Date</span>
                                            <span>Amount</span>
                                            <span>Status</span>
                                            <span>Tracking</span>
                                            <span class="cell-end">Actions</span>
                                        </div>

                                        <!--Table item-->
                                        <div class="flex-table-item">
                                            <div class="flex-table-cell is-media is-grow" data-th="">
                                                <div class="h-avatar is-medium">
                                                    <img class="avatar is-squared" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/8.jpg" alt="">
                                                </div>
                                                <div>
                                                    <span class="item-name dark-inverted is-font-alt is-weight-600">Erik K.</span>
                                                    <span class="item-meta">
                                                      <span>#158456</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-table-cell" data-th="Date">
                                                <span class="light-text">Oct 31, 2020</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Amount">
                                                <span class="dark-inverted is-weight-600">$863.42</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Status">
                                                <span class="tag is-green is-rounded">Paid</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Tracking">
                                                <a class="action-link is-pushed-mobile">TR-7295</a>
                                            </div>
                                            <div class="flex-table-cell cell-end" data-th="Actions">
                                                <button class="button h-button is-dark-outlined is-pushed-mobile">View Order</button>
                                            </div>
                                        </div>

                                        <!--Table item-->
                                        <div class="flex-table-item">
                                            <div class="flex-table-cell is-media is-grow" data-th="">
                                                <div class="h-avatar is-medium">
                                                    <img class="avatar is-squared" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/22.jpg" alt="">
                                                </div>
                                                <div>
                                                    <span class="item-name dark-inverted is-font-alt is-weight-600">Jimmy H.</span>
                                                    <span class="item-meta">
                                                      <span>#15893</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-table-cell" data-th="Date">
                                                <span class="light-text">Oct 31, 2020</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Amount">
                                                <span class="dark-inverted is-weight-600">$128.00</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Status">
                                                <span class="tag is-green is-rounded">Paid</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Tracking">
                                                <a class="action-link is-pushed-mobile">TR-6259</a>
                                            </div>
                                            <div class="flex-table-cell cell-end" data-th="Actions">
                                                <button class="button h-button is-dark-outlined is-pushed-mobile">View Order</button>
                                            </div>
                                        </div>

                                        <!--Table item-->
                                        <div class="flex-table-item">
                                            <div class="flex-table-cell is-media is-grow" data-th="">
                                                <div class="h-avatar is-medium">
                                                    <img class="avatar is-squared" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/25.jpg" alt="">
                                                </div>
                                                <div>
                                                    <span class="item-name dark-inverted is-font-alt is-weight-600">Melany W.</span>
                                                    <span class="item-meta">
                                                      <span>#155848</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-table-cell" data-th="Date">
                                                <span class="light-text">Oct 31, 2020</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Amount">
                                                <span class="dark-inverted is-weight-600">$236.79</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Status">
                                                <span class="tag is-orange is-rounded">Pending</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Tracking">
                                                <span class="light-text is-pushed-mobile">N/A</span>
                                            </div>
                                            <div class="flex-table-cell cell-end" data-th="Actions">
                                                <button class="button h-button is-dark-outlined is-pushed-mobile">View Order</button>
                                            </div>
                                        </div>

                                        <!--Table item-->
                                        <div class="flex-table-item">
                                            <div class="flex-table-cell is-media is-grow" data-th="">
                                                <div class="h-avatar is-medium">
                                                    <img class="avatar is-squared" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/12.jpg" alt="">
                                                </div>
                                                <div>
                                                    <span class="item-name dark-inverted is-font-alt is-weight-600">Joshua S.</span>
                                                    <span class="item-meta">
                                                      <span>#154736</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-table-cell" data-th="Date">
                                                <span class="light-text">Oct 30, 2020</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Amount">
                                                <span class="dark-inverted is-weight-600">$98.31</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Status">
                                                <span class="tag is-green is-rounded">Paid</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Tracking">
                                                <a class="action-link is-pushed-mobile">TR-48951</a>
                                            </div>
                                            <div class="flex-table-cell cell-end" data-th="Actions">
                                                <button class="button h-button is-dark-outlined is-pushed-mobile">View Order</button>
                                            </div>
                                        </div>

                                        <!--Table item-->
                                        <div class="flex-table-item">
                                            <div class="flex-table-cell is-media is-grow" data-th="">
                                                <div class="h-avatar is-medium">
                                                    <img class="avatar is-squared" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/13.jpg" alt="">
                                                </div>
                                                <div>
                                                    <span class="item-name dark-inverted is-font-alt is-weight-600">Tina C.</span>
                                                    <span class="item-meta">
                                                      <span>#158315</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-table-cell" data-th="Date">
                                                <span class="light-text">Oct 30, 2020</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Amount">
                                                <span class="dark-inverted is-weight-500">$112.00</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Status">
                                                <span class="tag is-green is-rounded">Paid</span>
                                            </div>
                                            <div class="flex-table-cell" data-th="Tracking">
                                                <a class="action-link is-pushed-mobile">TR-48555</a>
                                            </div>
                                            <div class="flex-table-cell cell-end" data-th="Actions">
                                                <button class="button h-button is-dark-outlined is-pushed-mobile">View Order</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!--Huro Scripts-->
        <!--Load Mapbox-->

        <!-- Concatenated plugins -->
        <script src="<?php echo base_url();?>/assets/js/app.js"></script>
        <script src="<?php echo base_url();?>/assets/js/functions.js"></script>
        <script src="<?php echo base_url();?>/assets/js/main.js" async></script>
        <script src="<?php echo base_url();?>/assets/js/components.js" async></script>
        <script src="<?php echo base_url();?>/assets/js/popover.js" async></script>
        <script src="<?php echo base_url();?>/assets/js/widgets.js" async></script>
        <script src="<?php echo base_url();?>/assets/js/touch.js" async></script>
        <script src="<?php echo base_url();?>/assets/js/syntax.js" async></script>
    </div>
</body>

</html>
<script type="text/javascript">
    $('.dropdown_menu').on('click',function(){

        var menu = $(this).attr('data-menu');
        if($('#'+menu+'.is-active').length == 1){
            $('#'+menu).removeClass('is-active');
            $('#app-home').removeClass('is-pushed-full');
             $('.icon-box-toggle').removeClass('active');
            $(".sidemenu").each(function() {
                $('#'+$(this).attr('data-menu')).removeClass('is-active');
            });
        }
        else{
             $('#'+menu).addClass('is-active');
             $('#app-home').addClass('is-pushed-full');
             $('.icon-box-toggle').addClass('active');
             
        }

    })
</script>