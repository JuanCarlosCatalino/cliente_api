<!DOCTYPE html>
<html lang="en">

<head>
     <!-- Title Meta -->
     <meta charset="utf-8" />
     <title>Sistema de restaurantes - Metor</title>
     <meta name="viewport" content="width=device-width, initial-scale=1" />
     <meta name="description" content="A fully responsive premium Bootstrap admin dashboard template for modern web applications." />
     <meta name="author" content="FoxPixel" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <link rel="shortcut icon" href="src/view/assets/images/favicon.ico">

     <link href="src/view/assets/css/vendor.min.css" rel="stylesheet" type="text/css" />
     <link href="src/view/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
     <link href="src/view/assets/css/app.min.css" rel="stylesheet" type="text/css" />
     <script src="src/view/assets/js/config.min.js"></script>
     <script>
        const base_url = '<?php echo BASE_URL; ?>';
        const base_url_server = '<?php echo BASE_URL_SERVER; ?>';
        const session_session = '<?php echo $_SESSION['sesion_id']; ?>';
        const token_token = '<?php echo $_SESSION['sesion_token']; ?>';
    </script>
    <style>
        /* Full page loader */
          #fullpage-loader {
          position: fixed;
          inset: 0; /* top:0; right:0; bottom:0; left:0; */
          background: rgba(255,255,255,0.85);
          display: flex;
          align-items: center;
          justify-content: center;
          z-index: 99999;
          transition: opacity 0.2s ease;
          }

          /* Ocultar por defecto */
          #fullpage-loader.hidden {
          opacity: 0;
          visibility: hidden;
          pointer-events: none;
          }

          /* Spinner sencillo (usa bootstraps spinner markup si ya tienes bootstrap) */
          #fullpage-loader .loader-box {
          text-align: center;
          }
    </style>
</head>

<body>

     <!-- START Wrapper -->
     <div class="wrapper">

          <div class="main-nav">
               <!-- Sidebar Logo -->
               <div class="logo-box">
                    <a href="inicio" class="logo-dark">
                         <img src="src/view/assets/images/logo-sm.png" class="logo-sm" alt="logo sm">
                         <img src="src/view/assets/images/logo-dark.png" class="logo-lg" alt="logo dark">
                    </a>

                    <a href="inicio" class="logo-light">
                         <img src="src/view/assets/images/logo-sm.png" class="logo-sm" alt="logo sm">
                         <img src="src/view/assets/images/logo-white.png" class="logo-lg" alt="logo light">
                    </a>
               </div>

               <div class="h-100" data-simplebar>

                    <ul class="navbar-nav" id="navbar-nav">

                         <li class="menu-item pt-2">
                              <a class="menu-link" href="inicio">
                                   <span class="nav-icon">
                                        <i class="ri-dashboard-2-line"></i>
                                   </span>
                                   <span class="nav-text"> Dashboard </span>
                                   <span class="badge bg-success badge-pill text-end">9+</span>
                              </a>
                         </li>

                         <li class="menu-item">
                              <a class="menu-link" href="orders">
                                   <span class="nav-icon">
                                        <i class="ri-shopping-cart-line"></i>
                                   </span>
                                   <span class="nav-text"> Órdenes </span>
                              </a>
                         </li>
                         <li class="menu-item">
                              <a class="menu-link" href="adminTokens">
                                   <span class="nav-icon">
                                        <i class="ri-key-line"></i>
                                   </span>
                                   <span class="nav-text"> Tokens API </span>
                              </a>
                         </li>

                         <li class="menu-item">
                              <a class="menu-link menu-arrow" href="#sidebarProduct" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProduct">
                                   <span class="nav-icon">
                                        <i class="ri-shopping-basket-2-line"></i>
                                   </span>
                                   <span class="nav-text"> Productos </span>
                              </a>
                              <div class="collapse" id="sidebarProduct">
                                   <ul class="sub-menu-nav">
                                        <li class="sub-menu-item">
                                             <a class="sub-menu-link" href="product-listing">Listing</a>
                                        </li>
                                        <li class="sub-menu-item">
                                             <a class="sub-menu-link" href="product-add-edit">Add/Edit Product</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="menu-item">
                              <a class="menu-link menu-arrow" href="#sidebarCategories" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCategories">
                                   <span class="nav-icon">
                                        <i class="ri-equalizer-2-line"></i>
                                   </span>
                                   <span class="nav-text"> Categorías </span>
                              </a>
                              <div class="collapse" id="sidebarCategories">
                                   <ul class="sub-menu-nav">
                                        <li class="sub-menu-item">
                                             <a class="sub-menu-link" href="categories-listing">Listado</a>
                                        </li>
                                        <li class="sub-menu-item">
                                             <a class="sub-menu-link" href="categories-add-edit">Agregar/Editar categorías</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="menu-item">
                              <a class="menu-link" href="customers">
                                   <span class="nav-icon">
                                        <i class="ri-group-2-line"></i>
                                   </span>
                                   <span class="nav-text"> Clientes </span>
                              </a>
                         </li>

                         <li class="menu-item">
                              <a class="menu-link" href="menu-cards">
                                   <span class="nav-icon">
                                        <i class="ri-restaurant-line"></i>
                                   </span>
                                   <span class="nav-text"> Tarjetas de menú </span>
                              </a>
                         </li>

                         <li class="menu-item">
                              <a class="menu-link" href="pos">
                                   <span class="nav-icon">
                                        <i class="ri-mac-line"></i>
                                   </span>
                                   <span class="nav-text"> punto de venta </span>
                              </a>
                         </li>

                         <li class="menu-item">
                              <a class="menu-link" href="reports">
                                   <span class="nav-icon">
                                        <i class="ri-bar-chart-box-ai-line"></i>
                                   </span>
                                   <span class="nav-text"> Informes </span>
                              </a>
                         </li>

                         <li class="menu-item">
                              <a class="menu-link" href="offers">
                                   <span class="nav-icon">
                                        <i class="ri-discount-percent-line"></i>
                                   </span>
                                   <span class="nav-text"> Ofertas </span>
                              </a>
                         </li>

                         <li class="menu-item">
                              <a class="menu-link" href="locations">
                                   <span class="nav-icon">
                                        <i class="ri-map-pin-range-line"></i>
                                   </span>
                                   <span class="nav-text"> Ubicaciones </span>
                              </a>
                         </li>

                         <li class="menu-item">
                              <a class="menu-link" href="settings">
                                   <span class="nav-icon">
                                        <i class="ri-store-3-line"></i>
                                   </span>
                                   <span class="nav-text"> Config. de la tienda </span>
                              </a>
                         </li>

                         <li class="menu-item">
                              <a class="menu-link" href="todo">
                                   <span class="nav-icon">
                                        <i class="ri-task-line"></i>
                                   </span>
                                   <span class="nav-text"> Todo </span>
                              </a>
                         </li>


                         <li class="menu-item">
                              <a class="menu-link menu-arrow" href="#sidebarInvoice" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoice">
                                   <span class="nav-icon">
                                        <i class="ri-file-list-3-line"></i>
                                   </span>
                                   <span class="nav-text"> Facturas </span>
                              </a>
                              <div class="collapse" id="sidebarInvoice">
                                   <ul class="sub-menu-nav">
                                        <li class="sub-menu-item">
                                             <a class="sub-menu-link" href="invoices">Invoices</a>
                                        </li>
                                        <li class="sub-menu-item">
                                             <a class="sub-menu-link" href="invoice-details">Invoice Details</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>
                    </ul>
               </div>
          </div>

          <header class="topbar d-flex">
               <!-- Sidebar Logo -->
               <div class="logo-box">
                    <a href="inicio" class="logo-dark">
                         <img src="src/view/assets/images/logo-sm.png" class="logo-sm" alt="logo sm">
                         <img src="src/view/assets/images/logo-dark.png" class="logo-lg" alt="logo dark">
                    </a>

                    <a href="inicio" class="logo-light">
                         <img src="src/view/assets/images/logo-sm.png" class="logo-sm" alt="logo sm">
                         <img src="src/view/assets/images/logo-white.png" class="logo-lg" alt="logo light">
                    </a>
               </div>

               <div class="container">
                    <div class="navbar-header">

                         <!-- Menu Toggle Button (sm-hover) -->
                         <button type="button" class="btn btn-link d-flex button-sm-hover button-toggle-menu" aria-label="Show Full Sidebar">
                              <i class="ri-menu-2-line button-sm-hover-icon text-white"></i>
                         </button>

                         <div class="d-flex align-items-center gap-2">
                              <!-- App Search-->
                              <form class="app-search d-none d-md-block me-auto">
                                   <div class="position-relative">
                                        <input type="search" class="form-control" placeholder="Start typing..." autocomplete="off" value="">
                                        <i class="ri-search-line search-widget-icon"></i>
                                   </div>
                              </form>
                         </div>

                         <div class="d-flex align-items-center gap-2 ms-auto">
                              <!-- Theme Color (Light/Dark) -->
                              <div class="topbar-item">
                                   <button type="button" class="topbar-button" id="light-dark-mode">
                                        <i class="ri-moon-line fs-20 align-middle light-mode"></i>
                                        <i class="ri-sun-line fs-20 align-middle dark-mode"></i>
                                   </button>
                              </div>

                              <!-- Notification -->
                              <div class="dropdown topbar-item">
                                   <button type="button" class="topbar-button" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="topbar-badge border border-2 border-info rounded-pill">18<span class="visually-hidden">unread messages</span></span>
                                   </button>
                                   <div class="dropdown-menu pt-0 dropdown-lg dropdown-menu-end" aria-labelledby="page-header-notifications-dropdown">
                                        <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                             <div class="row align-items-center">
                                                  <div class="col">
                                                       <h6 class="m-0 fs-16 fw-semibold"> Notifications</h6>
                                                  </div>
                                             </div>
                                        </div>
                                        <div data-simplebar style="max-height: 280px;">
                                             <!-- Item -->
                                             <a href="javascript:void(0);" class="dropdown-item py-3 border-bottom text-wrap">
                                                  <p class="mb-0"><span class="fw-medium">Olivia Bennett</span> mentioned you in a comment <span>"This update really improves the user experience! 🚀"</span></p>
                                             </a>
                                             <!-- Item -->
                                             <a href="javascript:void(0);" class="dropdown-item py-3 border-bottom">
                                                  <p class="mb-0 fw-semibold">Daniel Roberts</p>
                                                  <p class="mb-0 text-wrap">
                                                       Just sent over the revised proposal. Let me know your thoughts.
                                                  </p>
                                             </a>

                                        </div>
                                   </div>
                              </div>

                              <!-- User -->
                              <div class="dropdown topbar-item">
                                   <a type="button" class="topbar-button p-0" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="d-flex align-items-center gap-2">
                                             <img class="rounded-circle" width="32" src="src/view/assets/images/users/avatar-2.jpg" alt="user-image">
                                             <span class="d-lg-flex flex-column gap-1 d-none">
                                                  <h5 class="my-0 fs-13 text-uppercase text-reset fw-bold"><?php echo $_SESSION['sesion_usuario_nom']; ?></h5>
                                             </span>
                                        </span>
                                   </a>
                                   <div class="dropdown-menu dropdown-menu-end">

                                        <a class="dropdown-item" href="pages-profile.html">
                                             <i class="bx bx-user-circle fs-18 align-middle me-2"></i><span class="align-middle">My Account</span>
                                        </a>

                                        <a class="dropdown-item" href="pages-pricing.html">
                                             <i class="bx bx-wallet fs-18 align-middle me-2"></i><span class="align-middle">Pricing</span>
                                        </a>
                                        <a class="dropdown-item" href="pages-faqs.html">
                                             <i class="bx bx-help-circle fs-18 align-middle me-2"></i><span class="align-middle">Help</span>
                                        </a>
                                        <a class="dropdown-item" href="pages-gallery.html">
                                             <i class="bx bx-photo-album fs-18 align-middle me-2"></i>
                                             <span class="align-middle">Photos</span>
                                             <span class="align-middle float-end badge badge-soft-danger">New</span>
                                        </a>

                                        <div class="dropdown-divider my-1"></div>

                                        <a class="dropdown-item" href="auth-lock-screen.html">
                                             <i class="bx bx-lock fs-18 align-middle me-2"></i><span class="align-middle">Lock screen</span>
                                        </a>
                                        <a class="dropdown-item" href="" onclick="cerrar_sesion();">
                                             <i class="bx bx-log-out fs-18 align-middle me-2"></i><span class="align-middle">Cerrar Sesion</span>
                                        </a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </header>