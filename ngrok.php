<?php

exec("./ngrok http 1337");
echo exec("curl -s localhost:4040/api/tunnels | jq -r .tunnels\[0\].public_url");

?>
