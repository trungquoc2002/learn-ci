<h3>Form register</h3>
<?php echo form_open(site_url("signup-page"), array(
	"method" => "post",
	"id" => "authenticate_user",

));?>

<input type="text" placeholder="user name" name="username">
<input type="email" placeholder="email" name="email">
<input type="password" placeholder="password" name="password">
<input type="submit">
<?php echo form_close();?>
