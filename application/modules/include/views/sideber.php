<div class="page-container row-fluid">
		<!-- BEGIN SIDEBAR -->
        <?php
			$url = $_SERVER['REQUEST_URI'];
		?>
		<div class="page-sidebar nav-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->        
			<ul class="page-sidebar-menu">
				<li>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone"></div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li>
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search">
						<div class="input-box">
							<a href="javascript:;" class="remove"></a>
							<input type="text" placeholder="Search..." />
							<input type="button" class="submit" value=" " />
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
                
                <!--start menu for admin-->
                <!--start menu for admin-->
                <!--start menu for admin-->
        <?php
			if($users_type == 1){
		?>
				<li <?php if (strpos($url, "dashboard") !== false){ echo 'class="active"'; } ?>>
                    <a href="<?php echo base_url('dashboard'); ?>">
                        <i class="icon-home"></i> 
                        <span class="title">Dashboard</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li <?php if (strpos($url, "service_type") !== false){ echo 'class="active"'; } ?>>
                    <a href="javascript:;">
                        <i class="icon-cogs"></i> 
                        <span class="title">Service </span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li >
                            <a href="<?php echo base_url('service-type/service_type'); ?>">
                                Create Service Type
                            </a>
                        </li>
                        <li >
                            <a href="<?php echo base_url('service-type/service_type/viewServiceType'); ?>">
                                View Service Type
                            </a>
                        </li>
                    </ul>
                </li>
                <li <?php if (strpos($url, "flight_type") !== false){ echo 'class="active"'; } ?>>
                    <a href="javascript:;">
                        <i class="icon-cogs"></i> 
                        <span class="title">Flight </span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li >
                            <a href="<?php echo base_url('flight-type/flight_type'); ?>">
                                Create Flight Type
                            </a>
                        </li>
                        <li >
                            <a href="<?php echo base_url('flight-type/flight_type/viewFlightType'); ?>">
                                View Flight Type
                            </a>
                        </li>
                        <li >
                            <a href="<?php echo base_url('trip-type/trip_type'); ?>">
                                Create Trip Type
                            </a>
                        </li>
                        <li >
                            <a href="<?php echo base_url('trip-type/trip_type/viewTripType'); ?>">
                                View Trip Type
                            </a>
                        </li>
                        <li >
                            <a href="<?php echo base_url('flight-class/flight_class'); ?>">
                                Create Flight Class
                            </a>
                        </li>
                        <li >
                            <a href="<?php echo base_url('flight-class/flight_class/viewFlightClass'); ?>">
                                View Flight Class
                            </a>
                        </li>
                        <li >
                            <a href="<?php echo base_url('flight-service/flight_service'); ?>">
                                Create Flight Service
                            </a>
                        </li>
                        <li >
                            <a href="<?php echo base_url('flight-service/flight_service/viewFlightService'); ?>">
                                View Flight Service
                            </a>
                        </li>
                        <li >
                            <a href="<?php echo base_url('airports/airport'); ?>">
                                Create Airports
                            </a>
                        </li>
                        <li >
                            <a href="<?php echo base_url('airports/airport/viewAirports'); ?>">
                                View Airports
                            </a>
                        </li>
                    </ul>
                </li>
                <li <?php if (strpos($url, "settings") !== false){ echo 'class="active"'; } ?>>
                    <a href="javascript:;">
                        <i class="icon-cogs"></i> 
                        <span class="title">Location </span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li >
                            <a href="<?php echo base_url('country/country'); ?>">
                                Add Country
                            </a>
                        </li>
                        <li >
                            <a href="<?php echo base_url('country/country/viewCountry'); ?>">
                                View Country
                            </a>
                        </li>
                        <li >
                            <a href="<?php echo base_url('state/state'); ?>">
                                Add State
                            </a>
                        </li>
                        <li >
                            <a href="<?php echo base_url('state/state/viewState'); ?>">
                                View State
                            </a>
                        </li>
                        <li >
                            <a href="<?php echo base_url('location/location'); ?>">
                                Add Location
                            </a>
                        </li>
                        <li >
                            <a href="<?php echo base_url('location/location/viewLocation'); ?>">
                                View Location
                            </a>
                        </li>
                    </ul>
                </li>
                <li <?php if (strpos($url, "settings") !== false){ echo 'class="active"'; } ?>>
                    <a href="javascript:;">
                        <i class="icon-cogs"></i> 
                        <span class="title">Settings </span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li >
                            <a href="<?php echo base_url('admin-settings/settings/masterPasswordChange'); ?>">
                                Master password
                            </a>
                        </li>
                        <li >
                            <a href="<?php echo base_url('admin-settings/settings/superAdminPasswordChange'); ?>">
                                Password change
                            </a>
                        </li>
                    </ul>
                </li>
                <li <?php if (strpos($url, "page") !== false){ echo 'class="active"'; } ?>>
                    <a href="javascript:;">
                        <i class="icon-cogs"></i> 
                        <span class="title">Content Management </span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li >
                            <a href="<?php echo base_url('page'); ?>">
                                Page Management
                            </a>
                        </li>
                    </ul>
                </li>
                
                
                
        <?php
			}
		?>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->