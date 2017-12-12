<?php
require ('sql_connect.php');
if (isset($_POST['action']))
{
        $name=mysql_escape_string($_POST['name']);
        $reg=mysql_escape_string($_POST['reg']);
        $pass=mysql_escape_string($_POST['pass']);
        $ph=mysql_escape_string($_POST['ph']);
        $te=mysql_escape_string($_POST['tech']);
        $man=mysql_escape_string($_POST['mang']);
        $des=mysql_escape_string($_POST['design']);
if($te=='on')
        $te='Yes';
if($man=='on')
        $man='Yes';
if($des=='on')
        $des='Yes';


        $query1="INSERT INTO `registrations` (`Name`, `Registrationno`,`Password`,`Phno`,`Tech`,`Management`,`Design`) VALUES ('$name', '$reg','$pass','$ph','$te','$man','$des')";
if (mysql_query($query1)or die(mysql_error())) 
echo ("<SCRIPT LANGUAGE='JavaScript'>
        
window.location.href='success.html'        
        </SCRIPT>");
else 
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('ERROR 404')
        window.location.href='index.html'
        </SCRIPT>");


}
else{
}
?>
       
