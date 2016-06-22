<?
require_once './autoload.php';

define('IN_APP', true);

$request = explode('/', substr($_SERVER['REQUEST_URI'], 1));
if (empty($request[0])) $request[0] = 'index';

$templateData = array();

require('./client/modules/' . $request[0] . '/index.php');

$template = new Template('./vendor/pug-php/', './client/modules/');
$template->render('index', $templateData);
?>