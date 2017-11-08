<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />

<?php
foreach ($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />

<?php endforeach;?>
<?php foreach ($js_files as $file): ?>

    <script src="<?php echo $file; ?>"></script>
<?php endforeach;?>

<style type='text/css'>
body
{
    font-family: Arial;
    font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
    text-decoration: underline;
}
</style>
</head>
<body>
<!-- Beginning header -->
    <div>
    <h1>Welcome To Simple Data Capture</h1>

        <a href='<?php echo site_url('welcome/opinion') ?>'>Survey Opinions</a> | <a href='<?php echo site_url('welcome/subject') ?>'>Subjects</a> |  <a href='<?php echo site_url('welcome/agent') ?>'>Agents</a> |  <a href='<?php echo site_url('auth') ?>'>Users</a> |  <a href='<?php echo site_url('auth/logout') ?>'>Logout</a>


    </div>
<!-- End of header-->
    <div style='height:20px;'></div>
    <div>
<?php echo $output; ?>

    </div><br>
<!-- Beginning footer -->
<div>PHP DATA CAPTURE OPEN SOURCE</div>
<!-- End of Footer -->
</body>
</html>