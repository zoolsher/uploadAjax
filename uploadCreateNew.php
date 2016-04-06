<?PHP
$res = new stdClass();
$path = dir(getcwd());
$isExist = false;

$filename = $_POST['MD5'].'.'.$_POST['ext'];
while($data = $path->read()){
    if($data == $filename){
        $isExist = true;
        break;
    }
}
$res->isExist = $isExist;
if($isExist){
    $res->size = filesize($filename);
}else{
    $fd = fopen($filename,'x');
    if(!$fd){
        $res->createState = false;
    }else{
        $res->createState = true;
    }
}
echo json_encode($res);