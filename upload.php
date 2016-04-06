<?PHP
$res = new stdClass();
$filename = $_POST['filename'];
if(file_exists($filename)){
    $fd = fopen($filename,'a+');
    $temp = $_FILES['file']['tmp_name'];
    fwrite($fd,file_get_contents($temp));
    fclose($fd);
    $res->size = filesize($filename);
    $res->filename = $filename;
}
echo json_encode($res);