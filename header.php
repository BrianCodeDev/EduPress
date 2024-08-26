<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<nav class="navbar navbar-expand-lg">
  <div class="container">
	<img src="http://EduOnline/wp-content/uploads/2024/08/cropped-education.png" alt="logo" width="40px" height="40px">
    <a class="navbar-brand" href="#">EduOnline</a>
    <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa-solid fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Courses</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#">Resources</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#">Support</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#">My Account</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
	  <div class="searchInputWrapper">
    <input class="searchInput" type="text" placeholder=' Search...'>
    <i class="searchInputIcon fa fa-search"></i>
    </input>
  </div>
  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-regular fa-circle-user" style="color: #FF782D; font-size: 30px;"></i>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">My Profile</a></li>
            <li><a class="dropdown-item" href="#">Account Settings</a></li>
            <li><a class="dropdown-item" href="#">My Courses</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
        </li>
      </form>
    </div>
  </div>
</nav>
