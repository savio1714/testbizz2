 <div class="dashboard-nav">
                <div class="dashboard-nav-inner">
                    <ul>
                        <li class="<?php echo (basename($_SERVER['PHP_SELF'])=='index.php')? 'active':''?>"><a href="./"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
                        <li><a href="../"><i class="sl sl-icon-home"></i> Home Page</a></li>
                        <?php if($_SESSION["user_type_id_value"] =='2'){
                                         echo '<li class="'; echo (basename($_SERVER['PHP_SELF'])=='referral_customer.php')? 'active':''; echo '">';
                                       echo '<a href="referral_customer"><i class="sl sl-icon-user"></i> Referral Customer</a></li>' ;

                                    
                                       
                                    }else if($_SESSION["user_type_id_value"] =='3'){
                                         echo '<li class="'; echo (basename($_SERVER['PHP_SELF'])=='add_customer.php')? 'active':''; echo '">';
                                       echo '<a href="add_customer"><i class="sl sl-icon-user"></i> Add Customer</a></li>' ;

                                       echo '<li class="'; echo (basename($_SERVER['PHP_SELF'])=='view.php')? 'active':''; echo '">';
                                       echo '<a href="view"><i class="sl sl-icon-folder"></i> View Customer List</a></li>' ;
                                       
                                    }else if($_SESSION["user_type_id_value"] =='4'){
                                        echo '<li class="'; echo (basename($_SERVER['PHP_SELF'])=='add_travelagent.php')? 'active':''; echo '">';
                                       echo '<a href="add_travelagent"><i class="sl sl-icon-user"></i> Add Travel Agent</a></li>' ;

                                       echo '<li class="'; echo (basename($_SERVER['PHP_SELF'])=='view_travel_agent.php')? 'active':''; echo '">';
                                       echo '<a href="view_travel_agent"><i class="sl sl-icon-folder"></i> View Travel Agent List</a></li>' ;
                                    }else if($_SESSION["user_type_id_value"] =='5'){
                                        echo '<li class="'; echo (basename($_SERVER['PHP_SELF'])=='add_franchisee.php')? 'active':''; echo '">';
                                       echo '<a href="add_franchisee"><i class="sl sl-icon-user"></i> Add Franchisee</a></li>' ;

                                       echo '<li class="'; echo (basename($_SERVER['PHP_SELF'])=='view_franchisee.php')? 'active':''; echo '">';
                                       echo '<a href="view_franchisee"><i class="sl sl-icon-folder"></i> View Franchisee List</a></li>' ;
                                    }else if($_SESSION["user_type_id_value"] =='6'){
                                        echo '<li class="'; echo (basename($_SERVER['PHP_SELF'])=='add_floor_manager.php')? 'active':''; echo '">';
                                       echo '<a href="add_floor_manager"><i class="sl sl-icon-user"></i> Add Floor Manager</a></li>' ;

                                       echo '<li class="'; echo (basename($_SERVER['PHP_SELF'])=='view_floor_manager.php')? 'active':''; echo '">';
                                       echo '<a href="view_floor_manager"><i class="sl sl-icon-folder"></i> View Floor Manager List</a></li>' ;
                                    }else if($_SESSION["user_type_id_value"] =='7'){
                                        echo '<li class="'; echo (basename($_SERVER['PHP_SELF'])=='add_franchisee_manager.php')? 'active':''; echo '">';
                                       echo '<a href="add_franchisee_manager"><i class="sl sl-icon-user"></i> Add Franchisee Manager</a></li>' ;

                                       echo '<li class="'; echo (basename($_SERVER['PHP_SELF'])=='view_franchisee_manager.php')? 'active':''; echo '">';
                                       echo '<a href="view_franchisee_manager"><i class="sl sl-icon-folder"></i> View Franchisee Manager List</a></li>' ;
                                    }else{

                                    }
                                    ?>

                        
                        <li class="<?php echo (basename($_SERVER['PHP_SELF'])=='dashboard_my_profile.php')? 'active':''?>"><a href="dashboard_my_profile"><i class="sl sl-icon-user"></i> Edit Profile</a></li>
                        <li class="<?php echo (basename($_SERVER['PHP_SELF'])=='mytrips.php')? 'active':''?>"><a href="mytrips"><i class="sl sl-icon-folder"></i>My Trips</a></li>
                        <li class="<?php echo (basename($_SERVER['PHP_SELF'])=='offers.php')? 'active':''?>"><a href="offers"><i class="sl sl-icon-plus"></i>Offers</a></li>
                         <li class="<?php echo (basename($_SERVER['PHP_SELF'])=='orderhistory.php')? 'active':''?>"><a href="orderhistory"><i class="fa fa-history"></i>Order History</a></li>
                         <li class="<?php echo (basename($_SERVER['PHP_SELF'])=='payout.php')? 'active':''?>"><a href="payout"><i class="fa fa-credit-card"></i>Payout</a></li>
                          <li class="<?php echo (basename($_SERVER['PHP_SELF'])=='clubpayout.php')? 'active':''?>"><a href="clubpayout"><i class="fa fa-credit-card"></i>Club Payout</a></li>
                         
                        <!-- <li><a href="dashboard-addtour.html"><i class="sl sl-icon-plus"></i> Add Tour</a></li>
                        <li> 
                            <a><i class="sl sl-icon-layers"></i> Tour Listing</a>
                            <ul>
                                <li><a href="dashboard-list.html">Active <span class="nav-tag green">6</span></a></li>
                                <li><a href="dashboard-list.html">Pending <span class="nav-tag yellow">1</span></a></li>
                                <li><a href="dashboard-list.html">Expired <span class="nav-tag red">2</span></a></li>
                            </ul>   
                        </li>
                        <li><a href="dashboard-booking.html"><i class="sl sl-icon-list"></i> Booking List</a></li>
                        <li><a href="dashboard-history.html"><i class="sl sl-icon-folder"></i> History</a></li>
                        <li><a href="dashboard-reviews.html"><i class="sl sl-icon-star"></i> Reviews</a></li> -->
                        <li><a href="../login" class="mylogout"><i class="sl sl-icon-power"></i> Logout</a></li>
                    </ul>
                </div>
            </div>