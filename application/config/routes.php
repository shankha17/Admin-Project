<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

//$route['default_controller'] = 'Welcome';
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



//----module:-bush------//
$route['notification']                                  = 'notification/notification/index/';
$route['notification/update/(:num)']                    = 'notification/notification/form/';
$route['notification/insert']                           = 'notification/notification/form/0';
$route['notification/delete/(:num)']                    = 'notification/notification/delete/';
$route['notification/save']                                  = 'notification/notification/save/';

/*$route['admin']                                  = 'admin/admin/index/';
$route['admin/notification']                     = 'admin/admin/index1/';
$route['admin/update/(:num)']                    = 'admin/admin/form/';
$route['admin/insert']                           = 'admin/admin/form/0';
$route['admin/delete/(:num)']                    = 'admin/admin/delete/';
$route['admin/save']                                  = 'admin/admin/save/';*/

/*$route['login']                                  = 'login/login/index/';
$route['home']                                    = 'login/home/index/'; */

##########################################################################################
$route['admin/login/index']					= 'adminlogin/adminlogin/index/';
$route['admin/login/logout']				= 'adminlogin/adminlogin/logout/';
$route['admin']								= 'login/login/index/';
#############################################################################################
$route['cms-admin/banner/delete/(:any)']	= 'cms_banner/cms_banner/delete';
$route['cms-admin/banner/edit/(:any)']		= 'cms_banner/cms_banner/edit';
$route['cms-admin/banner/addnew']			= 'cms_banner/cms_banner/addnew/';
$route['cms-admin/banner/index']			= 'cms_banner/cms_banner/index/';

#############################################################################################
$route['cms-admin/catagory/delete/(:any)']	= 'cms_catagory/cms_catagory/delete';
$route['cms-admin/catagory/edit/(:any)']	= 'cms_catagory/cms_catagory/edit';
$route['cms-admin/catagory/addnew']			= 'cms_catagory/cms_catagory/addnew/';
$route['cms-admin/catagory/index']			= 'cms_catagory/cms_catagory/index/';
#############################################################################################
$route['cms-admin/subcatagory/delete/(:any)']	= 'cms_subcatagory/cms_subcatagory/delete';
$route['cms-admin/subcatagory/edit/(:any)']		= 'cms_subcatagory/cms_subcatagory/edit';
$route['cms-admin/subcatagory/addnew']			= 'cms_subcatagory/cms_subcatagory/addnew/';
$route['cms-admin/subcatagory/index']			= 'cms_subcatagory/cms_subcatagory/index/';
##############################################################################################
$route['cms-admin/product/index']				= 'cms_product/cms_product/index/';
$route['cms-admin/product/delete/(:any)']		= 'cms_product/cms_product/delete';
$route['cms-admin/product/addnew/(:any)/(:any)']= 'cms_product/cms_product/entry/';
$route['cms-admin/product/edit/(:any)/(:any)']	= 'cms_product/cms_product/entry/';
###############################################################################################
$route['cms-admin/attribute/addnew']			= 'cms_attribute/cms_attribute/addnew/';
$route['cms-admin/attribute/index']				= 'cms_attribute/cms_attribute/index/';
$route['cms-admin/attribute/delete/(:any)']		= 'cms_attribute/cms_attribute/delete';
$route['cms-admin/attribute/edit/(:any)']		= 'cms_attribute/cms_attribute/edit';
$route['cms-admin/attribute/attribute_delete/(:any)/(:any)']	= 'cms_attribute/cms_attribute/attribute_delete';
$route['cms-admin/attribute/add_attribute/(:any)']	= 'cms_attribute/cms_attribute/add_attribute';
###############################################################################################
$route['cms-admin/attribute_master/addnew']		= 'cms_attribute_master/cms_attribute_master/addnew/';
$route['cms-admin/attribute_master/index']		= 'cms_attribute_master/cms_attribute_master/index/';
$route['cms-admin/attribute_master/delete/(:any)']= 'cms_attribute_master/cms_attribute_master/delete';
$route['cms-admin/attribute_master/edit/(:any)']= 'cms_attribute_master/cms_attribute_master/edit';
###############################################################################################
$route['cms-admin/content/delete/(:any)']	= 'cms_content/cms_content/delete';
$route['cms-admin/content/edit/(:any)']		= 'cms_content/cms_content/edit';
$route['cms-admin/content/addnew']			= 'cms_content/cms_content/addnew/';
$route['cms-admin/content/index']			= 'cms_content/cms_content/index/content';
$route['cms-admin/aboutus/index']			= 'cms_content/cms_content/index/aboutus';
$route['cms-admin/blog/index']				= 'cms_content/cms_content/index/blog';
##################################################################################################
$route['cms-admin/offer/index']             = 'cms_offer/cms_offer/index';
$route['cms-admin/offer/edit/(:any)']       = 'cms_offer/cms_offer/edit/';
$route['cms-admin/offer/addnew']            = 'cms_offer/cms_offer/addnew/';
$route['cms-admin/offer/delete/(:any)']     = 'cms_offer/cms_offer/delete/';
##################################################################################################
$route['product/list/(:any)/(:any)']		= 'product/product/index';
$route['content/(:any)']					= 'content/content/index';
$route['cart/']						= 'cart/cart/index/';
$route['aboutus/']						= 'aboutus/aboutus/index/';
$route['blog/']							= 'blog/blog/index/';
$route['home/']							= 'home/home/index/';
$route['contact/']							= 'contact/contact/index/';
//$route['joinus/']							= 'joinus/index/';
//$route['franchise/']						= 'franchise/index/';

