<div class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#" class="nav-left-9"><i class="fa fa-th-list fa-fw"></i> Menu<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <?php echo anchor("menus/", ' List', array('class' => 'theTooltip glyphicon glyphicon-list', 'title' => 'View List', "data-toggle"=>"tooltip", "data-placement"=>"top")); ?>
                    </li>
                    <li>
                        <?php echo anchor("menus/create", ' Create', array('class' => 'theTooltip glyphicon glyphicon-plus-sign', 'title' => 'Create', "data-toggle"=>"tooltip", "data-placement"=>"top")); ?>
                    </li>
                    <li>
                        <?php echo anchor("menus/remove", ' Remove', array('class' => 'theTooltip glyphicon glyphicon-remove', 'title' => 'Remove', "data-toggle"=>"tooltip", "data-placement"=>"top")); ?>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#" class="nav-left-9"><i class="fa fa-users fa-fw"></i> Users<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <?php echo anchor("users/", ' List', array('class' => 'theTooltip glyphicon glyphicon-list', 'title' => 'View List', "data-toggle"=>"tooltip", "data-placement"=>"top")); ?>
                    </li>
                    <li>
                        <?php echo anchor("users/create", ' Create', array('class' => 'theTooltip glyphicon glyphicon-plus-sign', 'title' => 'Create', "data-toggle"=>"tooltip", "data-placement"=>"top")); ?>
                    </li>
                    <li>
                        <?php echo anchor("users/remove", ' Remove', array('class' => 'theTooltip glyphicon glyphicon-remove', 'title' => 'Remove', "data-toggle"=>"tooltip", "data-placement"=>"top")); ?>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="tables.html"><i class="fa fa-table fa-fw"></i> Advertisment</a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Create</a>
                    </li>
                    <li>
                        <a href="#">Update</a>
                    </li>
                    <li>
                        <a href="#">Remove</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Songs</a>
            </li>
            <li>
                <a href="#" class="nav-left-9"><i class="fa fa-wrench fa-fw"></i> Categories<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <?php echo anchor("categories/", ' List', array('class' => 'theTooltip glyphicon glyphicon-list', 'title' => 'View List', "data-toggle"=>"tooltip", "data-placement"=>"top")); ?>
                    </li>
                    <li>
                        <?php echo anchor("categories/create", ' Create', array('class' => 'theTooltip glyphicon glyphicon-plus-sign', 'title' => 'Create', "data-toggle"=>"tooltip", "data-placement"=>"top")); ?>
                    </li>
                    <li>
                        <?php echo anchor("categories/remove", ' Remove', array('class' => 'theTooltip glyphicon glyphicon-remove', 'title' => 'Remove', "data-toggle"=>"tooltip", "data-placement"=>"top")); ?>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Videos<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Create</a>
                    </li>
                    <li>
                        <a href="#">Update</a>
                    </li>
                    <li>
                        <a href="#">Remove <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                        </ul>
                        <!-- /.nav-third-level -->
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="blank.html">Blank Page</a>
                    </li>
                    <li>
                        <a href="login.html">Login Page</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
        <!-- /#side-menu -->
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->