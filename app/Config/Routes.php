<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/sign_up', 'OuterController\Register::index');
$routes->post('/insertdata', 'OuterController\Register::insertdata');
$routes->get('/activate/(:any)', 'OuterController\Register::activate/$1');

$routes->get('/forgot_password', 'OuterController\Forgotpass::index');
$routes->post('/verify', 'OuterController\Forgotpass::verify');
$routes->get('/resetpassword/(:any)', 'OuterController\Forgotpass::resetpassword/$1');
$routes->get('/changepassword/(:any)', 'OuterController\Forgotpass::changepassword/$1');
$routes->post('/changepassdone', 'OuterController\Forgotpass::changepassdone');


$routes->get('/', 'OuterController\Login::index');
$routes->post('/login', 'OuterController\Login::login');




$routes->get('/logout', 'Dashboard::logout');
$routes->get('/dashboard', 'Dashboard::dashboard/');
$routes->post('/generateColumns', 'Dashboard::generateColumns/');
$routes->get('/undo', 'Dashboard::undo/');
$routes->get('/undoLastRow', 'Dashboard::undoLastRow/');


$routes->get('/getList/(:any)', 'Container::getList/$1');
$routes->get('/getContent/(:any)', 'Container::getContent/$1');
$routes->get('/getpage/(:any)', 'Container::getpage/$1');


$routes->get('/navbar/(:any)', 'Components\NavbarCtrl::displayNavbar/$1');
$routes->get('/table/(:any)', 'Components\TableCtrl::displayTable/$1');
$routes->get('/accordion/(:any)', 'Components\AccordionCtrl::displayAccordion/$1'); 
$routes->get('/card/(:any)', 'Components\CardCtrl::displayCard/$1');
$routes->get('/carousel/(:any)', 'Components\CarouselCtrl::displayCarousel/$1');
$routes->get('/form/(:any)', 'Components\FormCtrl::displayForm/$1');
$routes->get('/alerts/(:any)', 'Components\ALertCtrl::displayAlert/$1');
$routes->get('/typography/(:any)', 'Components\TypographyCtrl::displayTypography/$1');
$routes->get('/badgebuttons/(:any)', 'Components\BadgeButtonCtrl::displayBadgeBtn/$1');
$routes->get('/navtab/(:any)', 'Components\NavTabCtrl::displayNavTab/$1');
$routes->get('/modaloffcanvas/(:any)', 'Components\ModalOffcanvasCtrl::display/$1');
$routes->get('/scrollspy/(:any)', 'Components\ScrollspyCtrl::display/$1');

$routes->post('/uploadimage', 'Userprofile::uploadimage');
$routes->post('/changeusername', 'Userprofile::changeusername');
$routes->post('/changepassword', 'Userprofile::changepassword');
$routes->post('/savetemplate', 'Userprofile::savetemplate');
