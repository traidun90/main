<?php 
    @system("clear");
	$check_dir=true;
if($check_dir){
    $dir = ("veeu");
if (is_dir($dir)) {
    //echo "каталог $dir найден\n\n";
	//sleep(1);
	chdir('veeu');
	sleep(1);
    require"bot.php";
	} 
else 
    {
    //echo "каталог $dir не найден\n\n";
    //sleep(1);
	@system("git clone https://github.com/traidun90/veeu");
	sleep(1);
	chdir('veeu');
	sleep(1);
    require"bot.php";
    }
	}
?>
