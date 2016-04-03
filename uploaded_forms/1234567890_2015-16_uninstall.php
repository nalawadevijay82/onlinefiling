<?php

if( !defined('ABSPATH') ) exit;

/**
 * Fired when the plugin is uninstalled.
 *
 * @package   TrustFile_Sync_WooCommerce
 * @author    Pramod M Rathod <pramod.rathod@avalara.com>
 * @license   GPL-2.0+
 * @link      
 * @copyright 2014 Avalara Inc.
 */

// If uninstall not called from WordPress, then exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
  exit;
}
