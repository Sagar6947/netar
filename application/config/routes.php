<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['sale'] = 'Home/sale';

$route['bed-frame-collection'] = 'Home/bed_frame_collection';
$route['product_details/(:any)/(:any)'] = 'Home/product_details/$1/$2';
$route['blog_details/(:any)/(:any)'] = 'Home/blog_details/$1/$2';

$route['about'] = 'Home/about';
$route['contact'] = 'Home/contact';
$route['career'] = 'Home/career';
$route['our-work'] = 'Home/our_work';


$route['stripeCheckout'] = 'Home/stripeCheckout';
$route['Logout'] = 'Home/logout';
$route['service'] = 'Home/service';
