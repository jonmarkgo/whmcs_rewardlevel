<?php
function rewardlevel_hook_order() {
  global $smarty;
  $query = mysql_query("SELECT value FROM `tbladdonmodules` WHERE setting = 'rewardlevel_id' AND module = 'rewardlevel';");
  if(mysql_num_rows($query) == 0) {
    return;
  }
  $data = mysql_fetch_assoc($query);
  $pre_js = '<script type="text/javascript" src="https://www.rewardlevel.com/js/rewardlevel-1.0.0.min.js?plugin='.$data["value"].'&action=show&style=topbar"></script>';
  $post_js = '<script type="text/javascript" src="https://www.rewardlevel.com/js/rewardlevel-1.0.0.min.js?plugin='.$data["value"].'&action=post&style=topbar"></script>';
  $smarty->assign('rewardlevel_post_js',$post_js);
  $smarty->assign('rewardlevel_pre_js',$pre_js);
}

add_hook("ClientAreaPage",1,"rewardlevel_hook_order");
?>