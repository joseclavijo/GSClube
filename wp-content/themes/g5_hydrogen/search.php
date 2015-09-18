<?php
/**
 * @package   Gantry 5 Theme
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2015 RocketTheme, LLC
 * @license   GNU/GPLv2 and later
 *
 * http://www.gnu.org/licenses/gpl-2.0.html
 */

defined( 'ABSPATH' ) or die;

/*
 * Search results page
 */

$context = Timber::get_context();

$context[ 'title' ] = __( 'Search results for:', 'g5_hydrogen' ) . ' ' . get_search_query();
$context[ 'posts' ] = Timber::get_posts();

$templates = [ 'search.html.twig', 'archive.html.twig', 'index.html.twig' ];

Timber::render( $templates, $context );