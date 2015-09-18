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
 * The Template for displaying all single posts
 */

$context = Timber::get_context();
$post = Timber::query_post();

$context[ 'post' ] = $post;
$context[ 'wp_title' ] .= ' - ' . $post->title();

Timber::render( [ 'single-' . $post->ID . '.html.twig', 'single-' . $post->post_type . '.html.twig', 'single.html.twig' ], $context );