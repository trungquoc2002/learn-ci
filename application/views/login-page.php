<h3>Form login</h3>
<?php echo form_open(site_url("authenticate"), array(
	"method" => "post",
	"id" => "authenticate_user",

));?>

<input type="text" placeholder="user name/email" name="username_or_email">
<input type="password" placeholder="password" name="user_password">
<input type="submit">
<?php echo form_close();?>
<a href="/ci_example/index.php/signup-page">Signup</a>
