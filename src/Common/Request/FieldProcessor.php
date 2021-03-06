<?php # -*- coding: utf-8 -*-

namespace Inpsyde\WPRESTStarter\Common\Request;

use WP_REST_Request;

/**
 * Interface for all field processor implementations.
 *
 * @package Inpsyde\WPRESTStarter\Common\Request
 * @since   2.0.0
 */
interface FieldProcessor {

	/**
	 * Returns the given object with added data of all registered readable fields.
	 *
	 * @since 2.0.0
	 *
	 * @param array           $object      Object data in array form.
	 * @param WP_REST_Request $request     Request object.
	 * @param string          $object_type Optional. Object type. Defaults to empty string.
	 *
	 * @return array Object with added data of all registered readable fields.
	 */
	public function add_fields_to_object( $object, WP_REST_Request $request, $object_type = '' );

	/**
	 * Updates all registered updatable fields of the given object.
	 *
	 * @since 2.0.0
	 *
	 * @param array           $object      Object data in array form.
	 * @param WP_REST_Request $request     Request object.
	 * @param string          $object_type Optional. Object type. Defaults to empty string.
	 *
	 * @return int Number of fields updated.
	 */
	public function update_fields_for_object( $object, WP_REST_Request $request, $object_type = '' );
}
