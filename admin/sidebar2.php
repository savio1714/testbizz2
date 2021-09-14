 <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">
                    <ul>
                        <li><img src="../images/placeholder.jpg" alt="">
                        </li>
                        <li>
                            <h5><?php echo  $_SESSION["username"]; ?> <span> </span></h5>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="../" class="<?php echo (basename($_SERVER['PHP_SELF'])=='index.php')? 'menu-active':''?>"><i class="fa fa-bar-chart" aria-hidden="true"></i>Dashboard</a>
                        </li>
                         <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i>Employee</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='regional_manager.php')? 'menu-active':''?>" href="../employee/regional_manager">Regional Manager</a>
                                    </li>
                                    <li><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='franchisee_manager.php')? 'menu-active':''?>" href="../employee/franchisee_manager">Franchisee Manager</a>
                                    </li>
                                    <li><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='floor_manager.php')? 'menu-active':''?>" href="../employee/floor_manager">Floor Manager</a>
                                    </li>
                                    
                                     
                                    
                                </ul>
                            </div>
                        </li>
                        <li><a href="../franchisee/franchisee" class="<?php echo (basename($_SERVER['PHP_SELF'])=='franchisee.php')? 'menu-active':''?>"><i class="fa fa-user" aria-hidden="true"></i> Franchisee</a>
                        </li>
                        <li><a href="../travel_agent/travel_agent" class="<?php echo (basename($_SERVER['PHP_SELF'])=='travel_agent.php')? 'menu-active':''?>"><i class="fa fa-user" aria-hidden="true"></i>Travel Agent</a>
                        </li>
                        
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i>Customer</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='b2c.php')? 'menu-active':''?>" href="../customer/b2c">B2C</a>
                                    </li>
                                    <li><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='travel_agent_customer.php')? 'menu-active':''?>" href="../customer/travel_agent_customer">Travel Agent Customer</a>
                                    </li>
                                    <!-- <li><a href="../customer/b2c_test.php">B2C test</a>
                                    </li> -->
                                    
                                </ul>
                            </div>
                        </li>
                        <li><a href="../category/manage_categories" class="<?php echo (basename($_SERVER['PHP_SELF'])=='manage_categories.php')? 'menu-active':''?>"><i class="fa fa-list-alt" aria-hidden="true"></i>Category</a>
                        </li>
                      
                        <li><a href="../packages/all_packages" class="<?php echo (basename($_SERVER['PHP_SELF'])=='all_packages.php')? 'menu-active':''?>"><i class="fa fa-plane" aria-hidden="true"></i>Packages</a>
                        </li>
                         <li><a href="../order_history/orderhistory.php" class="<?php echo (basename($_SERVER['PHP_SELF'])=='orderhistory.php')? 'menu-active':''?>"><i class="fa fa-history" aria-hidden="true"></i>Order History</a>
                        </li>
                        <li><a href="../payout/payout.php" class="<?php echo (basename($_SERVER['PHP_SELF'])=='payout.php')? 'menu-active':''?>"><i class="fa fa-credit-card" aria-hidden="true"></i>Payout</a>
                        </li>
                           <li><a href="../payout/clubpayout.php" class="<?php echo (basename($_SERVER['PHP_SELF'])=='clubpayout.php')? 'menu-active':''?>"><i class="fa fa-credit-card" aria-hidden="true"></i>Club Payout</a>
                        </li>
                        
                        <li><a href="../logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                        </li>
                     
                    </ul>
                </div>
            </div>