<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'FrontEnd';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


/*============= FrontEnd Route List ===================*/
/*============= FrontEnd Route List ===================*/
/*============= FrontEnd Route List ===================*/
/*============= FrontEnd Route List ===================*/

$route['index'] = 'FrontEnd/index';
$route['category/products/(:any)'] = 'FrontEnd/category_products/$1';
$route['brand/products/(:any)'] = 'FrontEnd/brand_products/$1';
$route['singel/product/(:any)'] = 'FrontEnd/singel_product/$1';
$route['pop_up/product/(:any)'] = 'FrontEnd/popUp_singel_product/$1';
$route['contact_us'] = 'FrontEnd/contacts_us_page';
$route['cart'] = 'FrontEnd/cart_page';
$route['checkout'] = 'FrontEnd/checkout_page';
$route['order'] = 'FrontEnd/submit_order';

$route['cart/add'] = 'Cart/add_cart';
$route['cart/remove'] = 'Cart/remove_cart';
$route['cart/update'] = 'Cart/update_cart';
$route['cart/info'] = 'Cart/cart_info';

$route['message-of-md'] = 'FrontEnd/md_message_show';
$route['news-and-event/(:any)'] = 'FrontEnd/read_news_event/$1';





/*========== Admin Route List =============*/
/*========== Admin Route List =============*/
/*========== Admin Route List =============*/ 
/*------Admin Login ------*/
$route['admin/login'] = 'Admin/index';
$route['admin/login/check'] = 'Admin/login_data_check';
$route['admin/logout'] = 'Admin/logout';

/*---------- Admin Dashboard ----------*/
$route['dashboard'] = 'Dashboard/index'; 


/*------- Gallary Image ----------*/
$route['gallery_page'] = 'Gallary/gallery_page_view';
$route['gallary_image_store'] = 'Gallary/gallary_image_store';
$route['gallery_image_delete/(:any)'] = 'Gallary/gallery_image_delete/$1';



/* --------- Slider Route ----------*/
$route['sliders'] = 'Slider/slider_page';
$route['slider/store'] = 'Slider/slider_image_store';
$route['slider/delete/(:any)'] = 'Slider/slider_image_delete/$1';


/*------- Logo Route -------------*/




/*----------- Service and Price route----------*/
$route['service_page'] = 'Service/service_price_page';



/*------- News and Event Route -----------*/
$route['event_page'] = 'Event/event_page_view';
$route['event/create'] = 'Event/event_insert_page';
$route['event/store'] = 'Event/news_and_event_store';
$route['event/edit/(:any)'] = 'Event/news_and_event_edit/$1';
$route['event/update/(:any)'] = 'Event/news_and_event_update/$1';
$route['event/delete/(:any)'] = 'Event/news_and_event_delete/$1';



/*--------- Other Bussnies----------*/



/*------- Member List Route ---------*/
$route['member_list'] = 'Page/member_list_page';



/*--------- printing Materials----------*/



/* --------- Template Route ----------*/
$route['about_insert_page'] = 'Page/about_us_page';
$route['about_us/update'] = 'Page/about_us_update';
$route['contact_us_page'] = 'Page/contact_us_page';
$route['contact_us/update'] = 'Page/contact_us_update';


/*----------- New Admin Route----------*/
$route['admin_page'] = 'Sub_admin/admin_page';
$route['admin/create'] = 'Sub_admin/create_admin_page';
$route['admin/store'] = 'Sub_admin/store_admin';
$route['admin/edit/(:any)'] = 'Sub_admin/edit_admin_page/$1';
$route['admin/update/(:any)'] = 'Sub_admin/update_admin/$1';
$route['admin/delete/(:any)'] = 'Sub_admin/delete_admin/$1';
$route['password/check'] = 'Sub_admin/old_password_check';


/*---------- News Event ------------------*/

