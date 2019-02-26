<?php
/**
 * Plugin main file starting point
 *
 * @since             1.0.0
 * @package           My_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       My test plugin
 * Plugin URI:
 * Description:       Test plugin for integration testing purposes
 * Version:           1.0.0
 * Author:            Denis Žoljom
 * Author URI:        https://madebydenis.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       my-plugin
 * Requires PHP:      7.2
 */

namespace My_Plugin\Admin_Widgets;

class Dashboard_Widget {
  /**
   * Register the widget.
   */
  public function register() {
    add_action( 'wp_dashboard_setup', [ $this, 'add_dashboard_widgets' ] );
  }

  public function add_dashboard_widgets() {
    \wp_add_dashboard_widget(
      $this->get_widget_id(),
      $this->get_widget_name(),
      [ $this, 'widget_callback' ],
      [ $this, 'widget_control_callback' ],
      $this->get_widget_callback_args()
    );
  }

  public function widget_callback() {
    echo '<div>content</div>';
  }

  public function widget_control_callback( $atts ) {
    return null;
  }

  protected function get_widget_id() {
    return 'widget_name';
  }

  protected function get_widget_name() {
    return 'Widget name';
  }

  protected function get_widget_callback_args()  {
    return [];
  }
}

(new Dashboard_Widget)->register();
