
<?php
//加载对应页面的js
$js = JS_DIR . '/' . \core\LInstance::getStringInstance('controller') .
    '/' . \core\LInstance::getStringInstance('action') . '.js';

if (file_exists(BASEDIR . $js)) {
    echo "<script type=\"text/javascript\" src=\"$js\"></script>";
}
//加载对应页面的css
$css = CSS_DIR . '/' . \core\LInstance::getStringInstance('controller') .
    '/' . \core\LInstance::getStringInstance('action') . '.css';

if (file_exists(BASEDIR . $css)) {
    echo "<link href=\"$css\" rel=\"stylesheet\">";
}
?>
