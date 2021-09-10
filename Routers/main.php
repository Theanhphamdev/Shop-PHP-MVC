<?php
require_once BASE_Ctl . '/HomeController.php';
require_once BASE_Ctl . '/ProductController.php';
require_once BASE_Ctl . '/CartController.php';
require_once BASE_Ctl . '/CategoryController.php';
require_once BASE_Ctl . '/EmployeeController.php';
require_once BASE_Ctl . '/OrderController.php';
require_once BASE_Ctl . '/UserController.php';
require_once BASE_Ctl . '/FrontendController.php';
require_once BASE_Ctl . '/CustomerController.php';
require_once BASE_Ctl . '/CommentController.php';
$page = empty($_GET['page']) ? '' : $_GET['page'];

//home Controllers
if ($page === '') {
    $controller = new HomeController();
    $controller->homeMain();
}
if ($page === 'admin') {
    $controller = new HomeController();
    $controller->homeAdmin();
}
if ($page === 'contact') {
    $controller = new HomeController();
    $controller->contact();
}
if ($page === 'sendmail') {
    $controller = new HomeController();
    $controller->sendmail();
}

if ($page === 'profile-Admin') {
    $controller = new HomeController();
    $controller->profileAdmin();
}
//home Controllers
//Product Controller
if ($page === 'shop') {
    $controller = new ProductController();
    $controller->listShop();
}
if ($page === 'list-product'){
    $controller = new ProductController();
    $controller->listProduct();
}
if ($page === 'create-product'){
    $controller = new ProductController();
    $controller->createProduct();
}
if ($page === 'insert-product'){
    $controller = new ProductController();
    $controller->insertProduct();
}
if ($page === 'delete-product'){
    $controller = new ProductController();
    $controller->deleteProduct();
}
if ($page === 'update-product'){
    $controller = new ProductController();
    $controller->updateProduct();
}
if ($page === 'detail-product'){
    $controller = new ProductController();
    $controller->detailProduct();
}
if ($page === 'single-product'){
    $controller = new ProductController();
    $controller->singleProduct();
}
//Cart Controller close
if ($page === 'cart') {
    $controller = new CartController();
    $controller->viewCart();
}
if ($page === 'delete-cart') {
    $controller = new CartController();
    $controller->deleteCart();
}
if ($page === 'delete-all-cart') {
    $controller = new CartController();
    $controller->deleteCart();
}

if ($page === 'add-cart') {
    $controller = new CartController();
    $controller->AddCart();
}
//product Cate
if ($page === 'create-category') {
    $controller = new CategoryController();
    $controller->createCate();
}
if ($page === 'insert-category') {
    $controller = new CategoryController();
    $controller->insertCate();
}
if ($page === 'list-category') {
    $controller = new CategoryController();
    $controller->listCate();
}
if ($page === 'delete-category') {
    $controller = new CategoryController();
    $controller->deleteCate();
}
if ($page === 'detail-category') {
    $controller = new CategoryController();
    $controller->detailCate();
}
if ($page === 'update-category') {
    $controller = new CategoryController();
    $controller->updateCate();
}
//product cate close

//Employee Controller
if ($page === 'list-employee') {
    $controller = new EmployeeController();
    $controller->listEmployee();
}
if ($page === 'detail-employee') {
    $controller = new EmployeeController();
    $controller->detailEmployee();
}
if ($page === 'update-employee') {
    $controller = new EmployeeController();
    $controller->updateEmployee();
}
if ($page === 'delete-employee') {
    $controller = new EmployeeController();
    $controller->deleteEmployee();
}
if ($page === 'create-employee') {
    $controller = new EmployeeController();
    $controller->createEmployee();
}
if ($page === 'add-employee') {
    $controller = new EmployeeController();
    $controller->addEmployee();
}
//Employee Controller



//user controller
if ($page === 'login') {
    $controller = new UserController();
    $controller->logform();
}
if ($page === 'login-data') {
    $controller = new UserController();
    $controller->login();
}
if ($page === 'logout') {
    $controller = new UserController();
    $controller->logout();
}
if ($page === 'insertUser') {
    $controller = new UserController();
    $controller->insertUser();
}
if ($page === 'forgot') {
    $controller = new UserController();
    $controller->forgotform();
}
//user controller
//customer
if ($page === 'login-customer') {
    $controller = new CustomerController();
    $controller->loginCustomer();
}
if ($page === 'loginData-customer') {
    $controller = new CustomerController();
    $controller->loginData();
}
if ($page === 'logout-customer') {
    $controller = new CustomerController();
    $controller->logoutCustomer();
}
if ($page === 'register-customer') {
    $controller = new CustomerController();
    $controller->registerCustomer();
}

if ($page === 'insert-customer') {
    $controller = new CustomerController();
    $controller->insertCustomer();
}

if ($page === 'forgot-customer') {
    $controller = new CustomerController();
    $controller->registerCustomer();
}

if ($page === 'information-customer') {
    checkLoginCustomer();
    $controller = new CustomerController();
    $controller->informationCustomer();
}
if ($page === 'up-information-customer') {
    $controller = new CustomerController();
    $controller->upInformationCustomer();
}
if ($page === 'information-line') {
    $controller = new CustomerController();
    $controller->informationLine();
}
if ($page === 'checkout_product') {
    $controller = new CustomerController();
    $controller->checkoutProduct();
}

//customer
//order Controller
if ($page === 'list-order') {
    $controller = new OrderController();
    $controller->listOrder();
}
if ($page === 'detail-order') {
    $controller = new OrderController();
    $controller->detailOrder();
}
if ($page === 'update-order') {
    $controller = new OrderController();
    $controller->updateOrder();
}
if ($page === 'information-receiving') {
    $controller = new OrderController();
    $controller->receiving();
}
//order Controller

//menu show
if ($page === 'list-menu') {
    $controller = new FrontendController();
    $controller->listMenu();
}
if ($page === 'create-menu') {
    $controller = new FrontendController();
    $controller->createMenu();
}
if ($page === 'detail-menu') {
    $controller = new FrontendController();
    $controller->detailMenu();
}
if ($page === 'insert-menu') {
    $controller = new FrontendController();
    $controller->insertMenu();
}
if ($page === 'update-menu') {
    $controller = new FrontendController();
    $controller->updateMenu();
}
if ($page === 'delete-menu') {
    $controller = new FrontendController();
    $controller->deleteMenu();
}

//menu show

//slide show
if ($page === 'list-slider') {
    $controller = new FrontendController();
    $controller->listSlide();
}
if ($page === 'create-slider') {
    $controller = new FrontendController();
    $controller->createSlide();
}
if ($page === 'detail-slider') {
    $controller = new FrontendController();
    $controller->detailSlide();
}
if ($page === 'insert-slider') {
    $controller = new FrontendController();
    $controller->insertSlide();
}
if ($page === 'update-slider') {
    $controller = new FrontendController();
    $controller->updateSlide();
}
if ($page === 'delete-slider') {
    $controller = new FrontendController();
    $controller->deleteSlide();
}

//slide show

//comment
if ($page === 'insert-comment') {
    $controller = new CommentController();
    $controller->insertComment();
}
//comment