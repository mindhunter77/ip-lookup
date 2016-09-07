<?php

function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
       $ip = $remote;
    }

    return $ip;
}

$user_ip = getUserIP();

function get_app_by_id($id)
{
  $app_info = array();

  switch ($id){
    case 1:
     $app_info = array("app_name" => "ip_lookup", "app_version" => "1.0");
     break;


  }

 return $app_info;

}

$possible_url = array("get_app_list", "get_app", "get_ip");

$value = "An error has occurred";

if (isset($_GET["action"]) && in_array($_GET["action"], $possible_url))
{
  switch ($_GET["action"])
    {
      case "get_app_list":
        $value = get_app_list();
        break;
      case "get_app":
        if (isset($_GET["id"]))
          $value = get_app_by_id($_GET["id"]);
        else
          $value = "Missing argument";
        break;

      case "get_ip":
	    $value = $user_ip;
	    break;
    }
}

exit(json_encode($value));
?>