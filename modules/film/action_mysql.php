<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Fri, 18 Apr 2014 13:05:55 GMT
 */

if ( ! defined( 'NV_MAINFILE' ) ) die( 'Stop!!!' );

$sql_drop_module = array();
$sql_drop_module[] = "DROP TABLE IF EXISTS `".$db_config['prefix']."_".$lang."_".$module_data."_film`";


$sql_create_module = $sql_drop_module;
$sql_create_module[] = "CREATE TABLE `".$db_config['prefix']."_".$lang."_".$module_data."_film` (
 id mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
 title varchar(255) NOT NULL,
 add_time int(11) NOT NULL DEFAULT '0',
 PRIMARY KEY (id)
) ENGINE=MyISAM;";

?>