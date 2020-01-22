<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <br>
        <li class="nav-item"><a href="<?php echo $base_host; ?>cloud/super-dash.system"><i class="la la-home"></i>
            <span class="menu-title">Dashboard</span></a>
        </li>
                <?php
                    if($UserRole=='super-admin'){
                      ?>
                         <li class=" navigation-header">
                          <span data-i18n="nav.category.layouts">COOPERATIVE TOOLS</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
                        </li>

                        <li class=" nav-item"><a href="#"><i class="la la-navicon"></i><span class="menu-title" data-i18n="nav.navbars.main">New Cooperative</span></a>
                          <ul class="menu-content">
                            <li>
                                <a class="menu-item" href="<?php echo $base_host; ?>cloud/new-coop.system" data-i18n="nav.navbars.nav_light">Register New</a>
                            </li>
                          </ul>
                        </li>

                        <li class=" nav-item"><a href="#"><i class="la la-navicon"></i><span class="menu-title" data-i18n="nav.navbars.main">Cooperative</span></a>
                          <ul class="menu-content">
                            <li>
                                <a class="menu-item" href="<?php echo $base_host; ?>cloud/coop-mvc.system" data-i18n="nav.navbars.nav_light">Manage Cooperative</a>
                            </li>
                            <li>
                                <a class="menu-item" href="<?php echo $base_host; ?>cloud/coop-vc.system" data-i18n="nav.navbars.nav_light">View Cooperatives</a>
                            </li>
                          </ul>
                        </li>

                         <li class=" nav-item"><a href="#"><i class="la la-user"></i><span class="menu-title" data-i18n="nav.navbars.main">Cooperative Users</span></a>
                          <ul class="menu-content">
                            <li>
                                <a class="menu-item" href="<?php echo $base_host; ?>cloud/new-coop-user.system" data-i18n="nav.navbars.nav_light">Add New User</a>
                            </li>
                            <li>
                                <a class="menu-item" href="<?php echo $base_host; ?>cloud/coop-users-acl.system" data-i18n="nav.navbars.nav_light">Manage Users</a>
                            </li>
                            <li>
                                <a class="menu-item" href="<?php echo $base_host; ?>cloud/coop-users.system" data-i18n="nav.navbars.nav_light">View Users</a>
                            </li>
                          </ul>
                        </li>

                        <li class=" nav-item"><a href="#"><i class="la la-user"></i><span class="menu-title" data-i18n="nav.navbars.main">Cooperative Members</span></a>
                          <ul class="menu-content">
                            <li>
                                <a class="menu-item" href="<?php echo $base_host; ?>cloud/new-member.system" data-i18n="nav.navbars.nav_light">Add Member</a>
                            </li>
                            <li>
                                <a class="menu-item" href="<?php echo $base_host; ?>cloud/coop-member-acl.system" data-i18n="nav.navbars.nav_light">Manage Members</a>
                            </li>
                            <li>
                                <a class="menu-item" href="<?php echo $base_host; ?>cloud/coop-members.system" data-i18n="nav.navbars.nav_light">View Members</a>
                            </li>
                          </ul>
                        </li>

                        <li class=" navigation-header">
                              <span data-i18n="nav.category.general">REPORTING TOOLS</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                              data-placement="right" data-original-title="General"></i>
                            </li>
                             <li class=" nav-item"><a href="#"><i class="la la-copy"></i><span class="menu-title" data-i18n="nav.navbars.main">Reports</span></a>
                              <ul class="menu-content">
                                <li>
                                    <a class="menu-item" href="<?php echo $base_host; ?>cloud/direct-reports.system" data-i18n="nav.navbars.nav_light">View Reports</a>
                                </li>
                              </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-copy"></i><span class="menu-title" data-i18n="nav.navbars.main">Analytics Reports</span></a>
                              <ul class="menu-content">
                                <li>
                                    <a class="menu-item" href="<?php echo $base_host; ?>cloud/analytical-reports.system" data-i18n="nav.navbars.nav_light">View Reports</a>
                                </li>
                              </ul>
                            </li>
                        
                        <li class=" navigation-header">
                              <span data-i18n="nav.category.general">COMMUNICATION TOOLS</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                              data-placement="right" data-original-title="General"></i>
                            </li>
                             <li class=" nav-item"><a href="#"><i class="la la-comments"></i><span class="menu-title" data-i18n="nav.navbars.main">Live Chat</span></a>
                              <ul class="menu-content">
                                <li>
                                    <a class="menu-item" href="<?php echo $base_host; ?>cloud/compose.system" data-i18n="nav.navbars.nav_light">My Messages</a>
                                </li>
                                <li>
                                    <a class="menu-item" href="<?php echo $base_host; ?>cloud/chat-sent.system" data-i18n="nav.navbars.nav_light">Sent Messages</a>
                                </li>
                                <li>
                                    <a class="menu-item" href="<?php echo $base_host; ?>cloud/chat-trash.system" data-i18n="nav.navbars.nav_light">Trash</a>
                                </li>
                              </ul>
                            </li>
                        <li class=" navigation-header">
                              <span data-i18n="nav.category.general">SYSTEM ACTIVITY</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                              data-placement="right" data-original-title="General"></i>
                            </li>
                             <li class=" nav-item"><a href="#"><i class="la la-copy"></i><span class="menu-title" data-i18n="nav.navbars.main">User Logs</span></a>
                              <ul class="menu-content">
                                <li>
                                    <a class="menu-item" href="<?php echo $base_host; ?>cloud/acl-logs.system" data-i18n="nav.navbars.nav_light">View Logs</a>
                                </li>
                                <li>
                                    <a class="menu-item" href="<?php echo $base_host; ?>cloud/control-acls.system" data-i18n="nav.navbars.nav_light">Manage Logs</a>
                                </li>
                              </ul>
                            </li>
                        <li class=" navigation-header">
                              <span data-i18n="nav.category.general">SETTINGS</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                              data-placement="right" data-original-title="General"></i>
                            </li>
                             <li class=" nav-item"><a href="#"><i class="la la-lock"></i><span class="menu-title" data-i18n="nav.navbars.main">Account Security</span></a>
                              <ul class="menu-content">
                                <li>
                                    <a class="menu-item" href="<?php echo $base_host; ?>cloud/security.system" data-i18n="nav.navbars.nav_light">Change Password</a>
                                </li>
                              </ul>
                            </li>
                      <?php
                    }else if($UserRole=='admin'){
                      ?>

                      <li class=" navigation-header">
                          <span data-i18n="nav.category.layouts">COOPERATIVE TOOLS</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
                        </li>

                         <li class=" nav-item"><a href="#"><i class="la la-user"></i><span class="menu-title" data-i18n="nav.navbars.main">Cooperative Users</span></a>
                          <ul class="menu-content">
                            <li>
                                <a class="menu-item" href="<?php echo $base_host; ?>cloud/new-coop-user.system" data-i18n="nav.navbars.nav_light">Add New User</a>
                            </li>
                            <li>
                                <a class="menu-item" href="<?php echo $base_host; ?>cloud/coop-users-acl.system" data-i18n="nav.navbars.nav_light">Manage Users</a>
                            </li>
                            <li>
                                <a class="menu-item" href="<?php echo $base_host; ?>cloud/coop-users.system" data-i18n="nav.navbars.nav_light">View Users</a>
                            </li>
                          </ul>
                        </li>

                        <li class=" nav-item"><a href="#"><i class="la la-user"></i><span class="menu-title" data-i18n="nav.navbars.main">Cooperative Members</span></a>
                          <ul class="menu-content">
                            <li>
                                <a class="menu-item" href="<?php echo $base_host; ?>cloud/new-member.system" data-i18n="nav.navbars.nav_light">Add Member</a>
                            </li>
                            <li>
                                <a class="menu-item" href="<?php echo $base_host; ?>cloud/coop-member-acl.system" data-i18n="nav.navbars.nav_light">Manage Members</a>
                            </li>
                            <li>
                                <a class="menu-item" href="<?php echo $base_host; ?>cloud/coop-members.system" data-i18n="nav.navbars.nav_light">View Members</a>
                            </li>
                          </ul>
                        </li>

                        <li class=" navigation-header">
                              <span data-i18n="nav.category.general">REPORTING TOOLS</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                              data-placement="right" data-original-title="General"></i>
                            </li>
                             <li class=" nav-item"><a href="#"><i class="la la-copy"></i><span class="menu-title" data-i18n="nav.navbars.main">Reports</span></a>
                              <ul class="menu-content">
                                <li>
                                    <a class="menu-item" href="<?php echo $base_host; ?>cloud/admin-direct-reports.system" data-i18n="nav.navbars.nav_light">View Reports</a>
                                </li>
                              </ul>
                            </li>
                            <li class=" nav-item"><a href="#"><i class="la la-copy"></i><span class="menu-title" data-i18n="nav.navbars.main">Analytics Reports</span></a>
                              <ul class="menu-content">
                                <li>
                                    <a class="menu-item" href="<?php echo $base_host; ?>cloud/admin-analytical-reports.system" data-i18n="nav.navbars.nav_light">View Reports</a>
                                </li>
                              </ul>
                            </li>
                        
                        <li class=" navigation-header">
                              <span data-i18n="nav.category.general">COMMUNICATION TOOLS</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                              data-placement="right" data-original-title="General"></i>
                            </li>
                             <li class=" nav-item"><a href="#"><i class="la la-comments"></i><span class="menu-title" data-i18n="nav.navbars.main">Live Chat</span></a>
                              <ul class="menu-content">
                                <li>
                                    <a class="menu-item" href="<?php echo $base_host; ?>cloud/compose.system" data-i18n="nav.navbars.nav_light">My Messages</a>
                                </li>
                                <li>
                                    <a class="menu-item" href="<?php echo $base_host; ?>cloud/chat-sent.system" data-i18n="nav.navbars.nav_light">Sent Messages</a>
                                </li>
                                <li>
                                    <a class="menu-item" href="<?php echo $base_host; ?>cloud/chat-trash.system" data-i18n="nav.navbars.nav_light">Trash</a>
                                </li>
                              </ul>
                            </li>
                        <li class=" navigation-header">
                              <span data-i18n="nav.category.general">SYSTEM ACTIVITY</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                              data-placement="right" data-original-title="General"></i>
                            </li>
                             <li class=" nav-item"><a href="#"><i class="la la-copy"></i><span class="menu-title" data-i18n="nav.navbars.main">User Logs</span></a>
                              <ul class="menu-content">
                                <li>
                                    <a class="menu-item" href="<?php echo $base_host; ?>cloud/admin-acl-logs.system" data-i18n="nav.navbars.nav_light">View Logs</a>
                                </li>
                                <li>
                                    <a class="menu-item" href="<?php echo $base_host; ?>cloud/admin-control-acls.system" data-i18n="nav.navbars.nav_light">Manage Logs</a>
                                </li>
                              </ul>
                            </li>
                        <li class=" navigation-header">
                              <span data-i18n="nav.category.general">SETTINGS</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                              data-placement="right" data-original-title="General"></i>
                            </li>
                             <li class=" nav-item"><a href="#"><i class="la la-lock"></i><span class="menu-title" data-i18n="nav.navbars.main">Account Security</span></a>
                              <ul class="menu-content">
                                <li>
                                    <a class="menu-item" href="<?php echo $base_host; ?>cloud/admin-security.system" data-i18n="nav.navbars.nav_light">Change Password</a>
                                </li>
                              </ul>
                            </li>

                      <?php
                    }else if($UserRole=='data-entrant-user'){
                      ?>

                        <li class=" nav-item"><a href="#"><i class="la la-user"></i><span class="menu-title" data-i18n="nav.navbars.main">Cooperative Members</span></a>
                          <ul class="menu-content">
                            <li>
                                <a class="menu-item" href="<?php echo $base_host; ?>cloud/new-member.system" data-i18n="nav.navbars.nav_light">Add Member</a>
                            </li>
                            <li>
                                <a class="menu-item" href="<?php echo $base_host; ?>cloud/coop-members.system" data-i18n="nav.navbars.nav_light">View Members</a>
                            </li>
                          </ul>
                        </li>

                        <li class=" navigation-header">
                              <span data-i18n="nav.category.general">SETTINGS</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                              data-placement="right" data-original-title="General"></i>
                            </li>
                             <li class=" nav-item"><a href="#"><i class="la la-lock"></i><span class="menu-title" data-i18n="nav.navbars.main">Account Security</span></a>
                              <ul class="menu-content">
                                <li>
                                    <a class="menu-item" href="<?php echo $base_host; ?>cloud/security.system" data-i18n="nav.navbars.nav_light">Change Password</a>
                                </li>
                              </ul>
                            </li>

                      <?php
                    }else if($UserRole=='data-entrant'){
                        ?>

                        <li class=" navigation-header">
                          <span data-i18n="nav.category.layouts">COOPERATIVE TOOLS</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
                        </li>

                          <li class=" nav-item"><a href="#"><i class="la la-navicon"></i><span class="menu-title" data-i18n="nav.navbars.main">New Cooperative</span></a>
                          <ul class="menu-content">
                            <li>
                                <a class="menu-item" href="<?php echo $base_host; ?>cloud/new-coop.system" data-i18n="nav.navbars.nav_light">Register New</a>
                            </li>
                          </ul>
                        </li>
                        <li class=" nav-item"><a href="#"><i class="la la-navicon"></i><span class="menu-title" data-i18n="nav.navbars.main">Cooperative</span></a>
                          <ul class="menu-content">
                            <li>
                                <a class="menu-item" href="<?php echo $base_host; ?>cloud/coop-vc.system" data-i18n="nav.navbars.nav_light">View Cooperatives</a>
                            </li>
                          </ul>
                        </li>

                        <li class=" nav-item"><a href="#"><i class="la la-user"></i><span class="menu-title" data-i18n="nav.navbars.main">Cooperative Members</span></a>
                          <ul class="menu-content">
                            <li>
                                <a class="menu-item" href="<?php echo $base_host; ?>cloud/new-member.system" data-i18n="nav.navbars.nav_light">Add Member</a>
                            </li>

                            <li>
                                <a class="menu-item" href="<?php echo $base_host; ?>cloud/coop-members.system" data-i18n="nav.navbars.nav_light">View Members</a>
                            </li>
                          </ul>
                        </li>
                        
                        <li class=" navigation-header">
                              <span data-i18n="nav.category.general">SETTINGS</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                              data-placement="right" data-original-title="General"></i>
                            </li>
                             <li class=" nav-item"><a href="#"><i class="la la-lock"></i><span class="menu-title" data-i18n="nav.navbars.main">Account Security</span></a>
                              <ul class="menu-content">
                                <li>
                                    <a class="menu-item" href="<?php echo $base_host; ?>cloud/security.system" data-i18n="nav.navbars.nav_light">Change Password</a>
                                </li>
                              </ul>
                            </li>

                        <?php
                    }
                ?>
        </ul>
    </div>
  </div>