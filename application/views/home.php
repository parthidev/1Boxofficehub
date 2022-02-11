        <?php $this->load->view('common/header');?>

        <!-- Content Wrapper -->
           <div class="view-wrapper is-webapp" data-page-title="Dashboard" data-naver-offset="150" data-menu-item="#dashboards-navbar-menu" data-mobile-item="#home-sidebar-menu-mobile">

            <div class="page-content-wrapper">
                <div class="page-content is-relative">

                    <div class="page-title has-text-centered is-webapp">

                        <div class="title-wrap">
                            <h1 class="title is-4">Dashboard</h1>
                        </div>

                        <div class="toolbar ml-auto">

                            <div class="toolbar-link">
                                <label class="dark-mode ml-auto">
                                    <input type="checkbox" checked>
                                    <span></span>
                                </label>
                            </div>

                            <a class="toolbar-link right-panel-trigger" data-panel="languages-panel">
                                <img src="assets/img/icons/flags/united-states-of-america.svg" alt="">
                            </a>

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
                                                            <img class="user-photo" alt="" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/7.jpg" />
                                                        </div>
                                                        <div class="user-content">
                                                            <p class="user-info"><span class="name">Alice C.</span> left a comment.</p>
                                                            <p class="time">1 hour ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="notification-item">
                                                        <div class="img-left">
                                                            <img class="user-photo" alt="" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/12.jpg" />
                                                        </div>
                                                        <div class="user-content">
                                                            <p class="user-info"><span class="name">Joshua S.</span> uploaded a file.</p>
                                                            <p class="time">2 hours ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="notification-item">
                                                        <div class="img-left">
                                                            <img class="user-photo" alt="" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/13.jpg" />
                                                        </div>
                                                        <div class="user-content">
                                                            <p class="user-info"><span class="name">Tara S.</span> sent you a message.</p>
                                                            <p class="time">2 hours ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="notification-item">
                                                        <div class="img-left">
                                                            <img class="user-photo" alt="" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/25.jpg" />
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

                                <!--Line Stats Widget-->
                                <div class="column is-6">
                                    <div class="stat-widget line-stats-widget is-straight">
                                        <div class="widget-head">
                                            <h3 class="dark-inverted">Revenue</h3>
                                            <!--Dropdown-->
                                            <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                                <div class="is-trigger" aria-haspopup="true">
                                                    <i data-feather="more-vertical"></i>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-reload"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Reload</span>
                                                                <span>Reload chart</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-users-alt"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Customers</span>
                                                                <span>View customer reports</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-gift-alt-1"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Products</span>
                                                                <span>View product reports</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-bank"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Finance</span>
                                                                <span>View financial reports</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="line-stats">
                                            <div class="line-stat">
                                                <span>This Month</span>
                                                <span class="current">$75,648.43</span>
                                            </div>
                                            <div class="line-stat">
                                                <span>Last Month</span>
                                                <span class="dark-inverted">$91,512.18</span>
                                            </div>
                                        </div>
                                        <div id="line-stats-widget-chart"></div>
                                    </div>
                                </div>

                                <!--Line Stats Widget-->
                                <div class="column is-6">
                                    <div class="stat-widget area-stats-widget is-straight">
                                        <div class="widget-head">
                                            <h3 class="dark-inverted">Customers</h3>
                                            <!--Dropdown-->
                                            <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                                <div class="is-trigger" aria-haspopup="true">
                                                    <i data-feather="more-vertical"></i>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-reload"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Reload</span>
                                                                <span>Reload chart</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-users-alt"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Customers</span>
                                                                <span>View customer reports</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-gift-alt-1"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Products</span>
                                                                <span>View product reports</span>
                                                            </div>
                                                        </a>
                                                        <hr class="dropdown-divider">
                                                        <a href="#" class="dropdown-item is-media">
                                                            <div class="icon">
                                                                <i class="lnil lnil-bank"></i>
                                                            </div>
                                                            <div class="meta">
                                                                <span>Finance</span>
                                                                <span>View financial reports</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="area-stats">
                                            <div class="area-stat">
                                                <span>New Customers</span>
                                                <span class="current">249</span>
                                            </div>
                                            <div class="area-stat">
                                                <span>Returning</span>
                                                <span class="dark-inverted">684</span>
                                            </div>
                                        </div>
                                        <div id="area-stats-widget-chart"></div>
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
                                                <span class="dark-inverted is-weight-500">$863.42</span>
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
                                                <span class="dark-inverted is-weight-500">$128.00</span>
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
                                                <span class="dark-inverted is-weight-500">$236.79</span>
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
                                                <span class="dark-inverted is-weight-500">$98.31</span>
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

                <?php $this->load->view('common/footer');?>