<?php

if (!defined("WHMCS"))
	die("This file cannot be accessed directly");

function rewardlevel_config() {
    $configarray = array(
    "name" => "RewardLevel Integration",
    "version" => "1.0",
    "author" => "Jonathan Gottfried",
    "language" => "english",
    "fields" => array(
        "rewardlevel_id" => array ("FriendlyName" => "Reward Level Plugin ID", "Type" => "text", "Size" => "5", "Description" => "Textbox"),
    ));
    return $configarray;
}

function rewardlevel_output($vars) {
  echo "<p>".$LANG['rl_plugin_id']." ".$vars['rewardlevel_id']."</p>";
}

?>