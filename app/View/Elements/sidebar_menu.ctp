<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
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
                <a href="/assignment2/homes" id="home"><i class="fa fa-dashboard fa-fw"></i> Home</a>
            </li>
            <li>
                <a href="/assignment2/personinfos" id="profile"><i class="fa fa-bar-chart-o fa-fw"></i> Profile</a>
            </li>
            <li>
                <a href="/assignment2/cardinfos" id="card_info"><i class="fa fa-table fa-fw"></i> Card Infos</a>
            </li>
            <li>
                <a href="/assignment2/cardstatements" id="card_stat"><i class="fa fa-edit fa-fw"></i> Card Statement</a>
            </li>
            <li>
                <a href="/assignment2/cardstatements/transactions" id="transaction"><i class="fa fa-wrench fa-fw"></i> Transactions</a>
            </li>
            <?php if ($is_admin) { ?>
                <li>
                    <a href="/assignment2/rss" id="search_news"><i class="fa fa-sitemap fa-fw"></i> Search News
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>