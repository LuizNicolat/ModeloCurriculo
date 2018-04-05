<?php
/** O nome do banco de dados*/
define('DB_NAME', 'sql10230473');
/** Usuário do banco de dados MySQL */
define('DB_USER', 'sql10230473');
/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'L7p73ZjLyh');
/** nome do host do MySQL */
define('DB_HOST', 'sql10.freemysqlhosting.net');
/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
	define('BASEURL', '/modelocurriculo/');

/** caminho do arquivo de banco de dados **/
if ( !defined('DBAPI') )
	define('DBAPI', ABSPATH . 'inc/database.php');

// define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
// define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
// define('TITULO_SITE','CRUD');
?>
