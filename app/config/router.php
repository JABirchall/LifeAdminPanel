<?php
# region Router Init
use Phalcon\Mvc\Router\Group;
use Phalcon\Mvc\Router;

$router = new Router(false);
$router->setDI($di);
# endregion

$router->add('/', 'Index::index');
$router->add('/wip','Wip::index');
$router->add('/login','Auth::login');
$router->add('/steamlogin','Auth::dologin');
$router->add('/logout','Auth::logout');
#$router->add('/players','Player::index');

# region Player Routes
$playerGroup = new Group();
$playerGroup->setPrefix('/players');
$playerGroup->addGet('/list/{page}:{0,5}', 'Player::index');
$playerGroup->addGet('/vehicles/{page}:{0,5}', 'Player::vehicles');
$playerGroup->addGet('/houses/{page}:{0,5}', 'Player::houses');
$playerGroup->addGet('/containers/{page}:{0,5}', 'Player::container');
$playerGroup->addGet('/edit/{id:[0-9]+}(-(.*))?', 'Player::edit');
$playerGroup->addPost('/edit/{id:[0-9]+}(-(.*))?', 'Player::doEdit');
$router->mount($playerGroup);
# endregion

# region Admin Routes
$adminGroup = new Group();
$adminGroup->setPrefix('/admin');
$adminGroup->addGet('(\/)?', 'Admin::index');
$adminGroup->addGet('/logs', 'Admin::viewlog');
$adminGroup->addGet('/clogs', 'Admin::complogs');
$router->mount($adminGroup);
# endregion

$router->notFound('Error::notFound');


return $router;


