<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active"  href="<?= urlOf('index')?>"><i class="zmdi zmdi-home m-r-5"></i>Oreo</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= urlOf('pages/admin')?>"><i class="zmdi zmdi-account m-r-5"></i>Admin</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane stretchRight active" id="dashboard">
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN</li>
                    <li><a  href="<?= urlOf('pages/property')?>" class="menu-toggle"><i class="zmdi zmdi-city"></i><span>Property</span></a></li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="fa-solid fa-building"></i><span>Types</span></a>
                        <ul class="ml-menu">
                            <li><a href="apartment.html">Apartment</a></li>
                            <li><a href="office.html">Office</a></li>
                            <li><a href="shop.html">Shop</a></li>                        
                            <li><a href="villa.html">Villa</a></li>
                        </ul>
                    </li>
                    <li><a  href="<?= urlOf('pages/branch')?>" class="menu-toggle"><i class="zmdi zmdi-city"></i><span>Branch</span></a></li>
                    <li><a  href="<?= urlOf('pages/agent')?>" class="menu-toggle"><i class="zmdi zmdi-accounts-outline"></i><span>Agents</span></a></li>
                    <li><a  href="<?= urlOf('pages/city')?>"  class="menu-toggle"><i class="fa-solid fa-city"></i><span>City</span></a></li>
                    <li><a  href="<?= urlOf('pages/state')?>" class="menu-toggle"><i class="zmdi zmdi-city"></i><span>State</span></a></li>
                    <li><a  href="<?= urlOf('pages/appointment')?>" class="menu-toggle"><i class="zmdi zmdi-city"></i><span>Appointment</span></a></li>
                    <li><a  href="<?= urlOf('pages/propertyowner')?>" class="menu-toggle"><i class="zmdi zmdi-city"></i><span>Property Owner</span></a></li>
                    <li><a  href="<?= urlOf('pages/role')?>" class="menu-toggle"><i class="zmdi zmdi-city"></i><span>Roles</span></a></li>
                    <li><a  href="<?= urlOf('pages/contact')?>" class="menu-toggle"><i class="zmdi zmdi-case-check"></i><span>Contact</span></a></li>
                    <li><a  href="<?= urlOf('pages/feedback')?>" class="menu-toggle"><i class="zmdi zmdi-city"></i><span>Feedback</span></a></li>
                </ul>
            </div>
        </div>
        
    </div>    
</aside>