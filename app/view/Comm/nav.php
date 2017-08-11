<!-- 导航栏 -->
<link href="<?php echo CSS_DIR . '/Comm/nav.css'; ?>" rel="stylesheet">
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><span class="nav-logo">LF&nbspProject</span></a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li class=<?php if(isset($indexActive)) { echo "active";}?>><a href="/"><span class="nav-index">首页</span></a></li>
                <li class=<?php if(isset($findActive)) { echo "active";}?>><a href="#"><span class="nav-index">发现</span></a></li>
                <li class=<?php if(isset($aboutActive)) { echo "active";}?>><a href="/aboutMe"><span class="nav-index">关于</span></a></li>
                <!--                <li class="dropdown">-->
                <!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
                <!--                        Java-->
                <!--                        <b class="caret"></b>-->
                <!--                    </a>-->
                <!--                    <ul class="dropdown-menu">-->
                <!--                        <li><a href="#">jmeter</a></li>-->
                <!--                        <li><a href="#">EJB</a></li>-->
                <!--                        <li><a href="#">Jasper Report</a></li>-->
                <!--                        <li class="divider"></li>-->
                <!--                        <li><a href="#">分离的链接</a></li>-->
                <!--                        <li class="divider"></li>-->
                <!--                        <li><a href="#">另一个分离的链接</a></li>-->
                <!--                    </ul>-->
                <!--                </li>-->
            </ul>
        </div>
    </div>
</nav>
