<?php
# region Router Init
use Phalcon\Mvc\Router\Group;
use Phalcon\Mvc\Router;

$router = new Router(false);
$router->setDI($di);
# endregion

$router->add('/', 'Index::index');
$router->add('/logging', 'Logging::index');
$router->add('/wip','Wip::index');
$router->add('/login','Auth::index');
#$router->add('/players','Player::index');

# region Player Routes
$playerGroup = new Group();
$playerGroup->setPrefix('/players');
$playerGroup->addGet('/list', 'Player::index');
$playerGroup->addGet('/vehicles', 'Player::vehicles');
$playerGroup->addGet('/houses', 'Player::houses');
$playerGroup->addGet('/containers', 'Player::container');
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

