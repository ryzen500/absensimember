<?php
error_reporting(0); 
require_once("koneksi.php");
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    error_reporting(0);
    $file=date("Ymd").'_backup_database_'.time().'.sql';
    backup_tables("localhost","root","","karyawansi",$file);
?>
<h1>hello</h1>
<p align="center">Backup database telah berhasil !</p><br />
<p align="center"><a style="cursor:pointer" onclick="location.href='download_backup_data.php?nama_file=<?php echo $file;?>'" title="Download">Download file database</a></p>
<?php
    function backup_tables($host,$user,$pass,$name,$nama_file,$tables ='*')    {
    $link = mysql_connect($host,$user,$pass);
    mysql_select_db($name,$link);
    if($tables == '*'){
        $tables = array();
        $result = mysql_query('SHOW TABLES');
        while($row = mysql_fetch_row($result)){
            $tables[] = $row[0];
        }
    }
    else{
        $tables = is_array($tables) ? $tables : explode(',',$tables);
    }
    foreach($tables as $table){
        $result = mysql_query('SELECT * FROM '.$table);
        $num_fields = mysql_num_fields($result);
        $return.= 'DROP TABLE '.$table.';';
        $row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
        $return.= "\n\n".$row2[1].";\n\n";
            for ($i = 0; $i < $num_fields; $i++) {
                while($row = mysql_fetch_row($result)){
                $return.= 'INSERT INTO '.$table.' VALUES(';
                for($j=0; $j < $num_fields; $j++) {
                    $row[$j] = addslashes($row[$j]);
                    $row[$j] = ereg_replace("\n","\\n",$row[$j]);
                    if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
                    if ($j < ($num_fields-1)) { $return.= ','; }
                }
                $return.= ");\n";
                }
            }
            $return.="\n\n\n";
        }                            
        $nama_file;
        $handle = fopen('./pages/backup-restore/backup/'.$nama_file,'w+');
        fwrite($handle,$return);
            fclose($handle);
    }
?>
</body>
</html>