<!-- 
    The value of a constant can not change. A constant is declared as follows:
 -->
<?php
 define('web', 'google.com');
echo web;
echo '<h1>'.web.'</h1>';
?>

<!-- 
    Now lets to see what are the predefined constant:
 -->

<?php
echo PHP_OS;
echo PHP_VERSION;
echo PHP_EXTENSION_DIR;
echo __LINE__;
echo __FILE__;
function holaMundo(){
    echo __FUNCTION__;
};
holaMundo();
?>