<?php 
if(isset($_POST['login_me']))
{
	if($_POST['mood']=='good')
	echo 'I am good';
	else
	echo 'I am SAD';


}
else
{
	echo 'who are you';
}