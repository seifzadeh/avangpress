<?php

/**
 * Class Avangpress_Request
 *
 * @since 3.0
 * @ignore
 * @access private
 */
class Avangpress_Request {

	/**
	 * @var Avangpress_Array_Bag
	 */
	public $params;

	/**
	 * @var Avangpress_Array_Bag
	 */
	public $get;

	/**
	 * @var Avangpress_Array_Bag
	 */
	public $post;

	/**
	 * @var Avangpress_Array_Bag
	 */
	public $server;


	/**
	 * Create a new instance from `$_GET`, `$_POST` and `$_SERVER` superglobals.
	 *
	 * @return Avangpress_Request
	 */
	public static function create_from_globals() {
		$get_data = is_array( $_GET ) ? $_GET : array();
		$get_data = avangpress_sanitize_deep( $get_data );
		$get_data = stripslashes_deep( $get_data );

		$post_data = is_array( $_POST ) ? $_POST : array();
		$post_data = avangpress_sanitize_deep( $post_data );
		$post_data = stripslashes_deep( $post_data );

		$server_data = is_array( $_SERVER ) ? $_SERVER : array();
		$server_data = avangpress_sanitize_deep( $server_data );
		return new self( $get_data, $post_data, $server_data );
	}

	/**
	 * Constructor
	 *
	 * @param array $get
	 * @param array $post
	 * @param array $server
	 */
	public function __construct( $get = array(), $post = array(), $server = array() ) {
		$this->get = new Avangpress_Array_Bag( $get );
		$this->post = new Avangpress_Array_Bag( $post );
		$this->params = new Avangpress_Array_Bag( array_merge( $post, $get ) );
		$this->server = new Avangpress_Array_Bag( $server );
	}

	/**
	 * @return bool
	 */
	public function is_ajax() {
		return defined( 'DOING_AJAX' ) && DOING_AJAX;
	}

	/**
	 * @return string
	 */
	public function get_method() {
		return $this->server->get( 'REQUEST_METHOD' );
	}

	/**
	 * @param $method
	 *
	 * @return bool
	 */
	public function is_method( $method ) {
		return $this->get_method() === $method;
	}

	/**
	 * @return string
	 */
	public function get_url() {
		return $this->server->get( 'REQUEST_URI' );
	}

	/**
	 * @return string
	 */
	public function get_referer() {
		return $this->server->get( 'HTTP_REFERER', '' );
	}

	/**
	 * Get the IP address of the visitor. Takes proxies into account.
	 *
	 * @return string
	 */
	public function get_client_ip() {
		$headers = ( function_exists( 'apache_request_headers' ) ) ? apache_request_headers() : $this->server->all();

		if ( array_key_exists( 'X-Forwarded-For', $headers ) && filter_var( $headers['X-Forwarded-For'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 ) ) {
			return $headers['X-Forwarded-For'];
		}

		if ( array_key_exists( 'HTTP_X_FORWARDED_FOR', $headers ) && filter_var( $headers['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 ) ) {
			return $headers['HTTP_X_FORWARDED_FOR'];
		}

		return $this->server->get( 'REMOTE_ADDR', '' );
	}

}