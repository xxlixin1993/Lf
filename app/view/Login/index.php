<?php include VIEW_DIR . '/Comm/head.php' ?>


    <!-- CSS -->
    <link href="<?php echo CSS_DIR . '/Comm/font.css'; ?>" rel="stylesheet">
    <link href="<?php echo CSS_DIR . '/Comm/supersized.css'; ?>" rel="stylesheet">

    <body>
    <div class="page-container">
        <h1>Login</h1>
        <form>
            <input type="text" name="username" class="username" placeholder="Username">
            <input type="password" name="password" class="password" placeholder="Password">
<!--            <button id='login'>Sign in</button>-->
            <div class="button1" id='login'>Sign in</div>
            <div class="error"><span>+</span></div>
            <div class="errorInfo"></div>
        </form>
    </div>

    </body>


    <script type="text/javascript" src="<?php echo JS_DIR . '/Comm/supersized.min.js'; ?>"></script>


<?php include VIEW_DIR . '/Comm/foot.php' ?>