<?php 

$connect = mysqli_connect('mysql.db.mdbgo.com', 'sathvika2505_cmsdb', 'Password@1','sathvika2505_cmsdb');

if (mysqli_connect_errno()){
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

//mysql.db.mdbgo.com
//'mysql.db.mdbgo.com', 'dawidadach_cmsdb', 'Secret.1','dawidadach_cmsdb'


//mysql://sathvika2505_cmsdb:Password$1@mysql.db.mdbgo.com:3306/sathvika2505_cmsdb