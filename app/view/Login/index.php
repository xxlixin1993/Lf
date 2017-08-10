<?php include VIEW_DIR . '/Comm/head.php' ?>


<!-- CSS -->
<link href="<?php echo CSS_DIR . '/Comm/font.css'; ?>" rel="stylesheet">
<link href="<?php echo CSS_DIR . '/Comm/supersized.css'; ?>" rel="stylesheet">

<body>
<div class="page-container">
    <h1>Login</h1>
    <form action="" method="post">
        <input type="text" name="username" class="username" placeholder="Username">
        <input type="password" name="password" class="password" placeholder="Password">
        <button type="submit">Sign in</button>
        <div class="error"><span>+</span></div>
    </form>
</div>

</body>


<script type="text/javascript" src="<?php echo JS_DIR . '/Comm/supersized.min.js'; ?>"></script>



<?php include VIEW_DIR . '/Comm/foot.php' ?>