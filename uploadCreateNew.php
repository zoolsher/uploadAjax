<?PHP
$hashcode = $_POST['hashcode'];

function isExist($hashcode) {
	$path = dir(getcwd());
	while ($f = read($path)) {
		var_dump($f);
	}
}

$id = UUID::v4();
isExist(0);