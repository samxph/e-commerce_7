<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes(true);

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Frontpage::index');
$routes->get('frontpage/searchplatform/(:segment)', 'Frontpage::searchplatform/$1');
$routes->get('frontpage/searchgenre/(:segment)/(:segment)', 'Frontpage::searchgenre/$1/$2');
$routes->get('search/title', 'Frontpage::searchtitle');
$routes->get('frontpage', 'Frontpage::index');
$routes->get('tuoteryhma', 'Tuoteryhma::index');
$routes->get('shoppingcart', 'Shoppingcart::index');
$routes->get('allproducts', 'Allproducts::index');
$routes->get('shoppingcart/add(:segment)', 'Shoppingcart::add/$1');
$routes->get('empty', 'Ostokori::empty');
$routes->get('Contact', 'Contact::index');
$routes->get('Contactsent', 'Contact::send');
$routes->get('Faq', 'FAQ::index');
$routes->get('About', 'About::index');
$routes->get('checkout', 'Order::index');
$routes->get('review', 'Review::index');
$routes->get('sendreview', 'Review::sendreview');
$routes->get('addproduct', 'Addproduct::index');

/* This login route is for ADMIN view accessed via /login */
$routes->get('login', 'Login::index');


/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
