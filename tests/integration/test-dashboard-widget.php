<?php
/**
 * Class widget tests
 *
 * @package My_Plugin\Tests\Integration
 */

use My_Plugin\Admin_Widgets\Dashboard_Widget;

/**
 * Class that tests the dashboard widget.
 */
class Dashboard_Widget_Integration_Test extends WP_UnitTestCase {
  /**
   * Test suite setUp method
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Test suite tearDown method
   */
  public function tearDown() {
    parent::tearDown();
  }

  /**
   * Test dashboard widget
   */
  public function test_dashboard_widget() {
    set_current_screen( 'index.php' );

    $dashboard_widget = new Dashboard_Widget();

    $dashboard_widget->register();

    ob_start();
    $dashboard_widget->widget_callback();
    $content = ob_get_clean();

    $control_callback = $dashboard_widget->widget_control_callback( [] );

    $this->assertEquals( '<div>content</div>', $content );
    $this->assertNull( $control_callback );

    $this->assertEquals( 10, has_action( 'wp_dashboard_setup', [ $dashboard_widget, 'add_dashboard_widgets' ] ) );

  }

}
