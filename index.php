$access_token = "EAALgDafhut0BAODomwkuRZAvK4K2rRxqKcGehop1EMZAEwD3AZBgQ0VB8TkyrXEoS8ZAmKWtOV1c32MWhDCoBoAGkGj589X7jBtp7Aqs13xYe9nwK79UYZBJqZCdUtss6cS47QJWLmZAeYSIDOz75pZBwMR8DhBRckodPYszpZAbB8wZDZD";
$verify_token = "john_loehr_says_yes";
$hub_verify_token = null;
 
if(isset($_REQUEST['hub_challenge'])) {
    $challenge = $_REQUEST['hub_challenge'];
    $hub_verify_token = $_REQUEST['hub_verify_token'];
}
 
 
if ($hub_verify_token === $verify_token) {
    echo $challenge;
}
