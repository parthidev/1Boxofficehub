        <?php $this->load->view('common/header');?>

        <!-- Content Wrapper -->
        <div id="app-onboarding" class="view-wrapper is-webapp" data-page-title="Welcome" data-naver-offset="214" data-menu-item="#layouts-navbar-menu" data-mobile-item="#home-sidebar-menu-mobile">

            <div class="page-content-wrapper">
      <div class="page-content is-relative">

                    <!-- <div class="list-flex-toolbar">
                        <div class="control has-icon">
                            <input class="input custom-text-filter" placeholder="Search..." data-filter-target=".flex-table-item">
                            <div class="form-icon">
                                <i data-feather="search"></i>
                            </div>
                        </div>

                        <div class="buttons">
                            <button class="button h-button is-primary is-elevated">
                                <span class="icon">
                                  <i aria-hidden="true" class="fas fa-plus"></i>
                              </span>
                                <span>Add User</span>
                            </button>
                        </div>
                    </div> -->

                    <div class="page-content-inner">

                        <div class="flex-list-wrapper">

                        

                           <div class="flex-table is-compact">

                                    <!--Table header-->
                                    <div class="flex-table-header">
                                        <span>Role</span>
                                        <span>Status</span>
                                    </div>
                                    <?php foreach($roles as $role){ //echo "<pre>";print_r($role); ?>
                                    <!--Table item-->
                                    <div class="flex-table-item">
                                        <div class="flex-table-cell is-bold" data-th="Company">
                                            <span class="dark-text"><?php echo $role->admin_role_name;?></span>
                                        </div>
                                        <div class="flex-table-cell" data-th="Status">
                                            <span class="tag is-success is-rounded">
                                                <?php echo ucfirst($role->status);?></span>
                                        </div>
                                    </div>
                                <?php } ?>

                                   

                                </div>

                          
                        </div>

                    </div>

                <?php $this->load->view('common/footer');?>