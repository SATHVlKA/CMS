<?php 

$connect = mysqli_connect('mysql.db.mdbgo.com', 'sathvika7_cmsdb', 'Ppassword$1','sathvika7_cmsdb');

if (mysqli_connect_errno()){
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

//mysql.db.mdbgo.com
//'mysql.db.mdbgo.com', 'dawidadach_cmsdb', 'Secret.1','dawidadach_cmsdb'