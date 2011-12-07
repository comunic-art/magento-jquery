<?php

class Comunicart_JQuery_Block_Jqzoom extends Mage_Core_Block_Template {  
	/**
	 * Get settings to pass when invoke jQZoom.
	 */
	public function getJsSettings() {
		$arguments = Mage::getStoreConfig('jquery/jqzoom/arguments');

		if (! empty($arguments)) {
			return $arguments;
		}

		$parameters = array();

		$value = Mage::getStoreConfig('jquery/jqzoom/zoom_type');
		if (! empty($value)) {
			$parameters[] = "zoomType: '$value'";
		}

		$value = Mage::getStoreConfig('jquery/jqzoom/zoom_width');
		if (! empty($value)) {
			$parameters[] = "zoomWidth: $value";
		}

		$value = Mage::getStoreConfig('jquery/jqzoom/zoom_height');
		if (! empty($value)) {
			$parameters[] = "zoomHeight: $value";
		}

		$value = Mage::getStoreConfig('jquery/jqzoom/x_offset');
		if (is_numeric($value)) {
			$parameters[] = "xOffset: $value";
		}

		$value = Mage::getStoreConfig('jquery/jqzoom/y_offset');
		if (is_numeric($value)) {
			$parameters[] = "yOffset: $value";
		}

		$value = Mage::getStoreConfig('jquery/jqzoom/position');
		if (! empty($value)) {
			$parameters[] = "position: '$value'";
		}

		$value = Mage::getStoreConfig('jquery/jqzoom/preload_images');
		if (is_numeric($value)) {
			$parameters[] = "preloadImages: $value";
		}

		$value = Mage::getStoreConfig('jquery/jqzoom/preload_text');
		if (! empty($value)) {
			$parameters[] = "preloadText: '$value'";
		}

		$value = Mage::getStoreConfig('jquery/jqzoom/title');
		if (! empty($value)) {
			$parameters[] = "title: $value";
		}

		$value = Mage::getStoreConfig('jquery/jqzoom/lens');
		if (! empty($value)) {
			$parameters[] = "lens: $value";
		}

		$value = Mage::getStoreConfig('jquery/jqzoom/image_opacity');
		if (is_numeric($value)) {
			$parameters[] = "imageOpacity: $value";
		}

		$value = Mage::getStoreConfig('jquery/jqzoom/show_effect');
		if (! empty($value)) {
			$parameters[] = "showEffect: '$value'";
		}

		$value = Mage::getStoreConfig('jquery/jqzoom/hide_effect');
		if (! empty($value)) {
			$parameters[] = "hideEffect: '$value'";
		}

		$value = Mage::getStoreConfig('jquery/jqzoom/fadein_speed');
		if (! empty($value)) {
			$parameters[] = "fadeinSpeed: '$value'";
		}

		$value = Mage::getStoreConfig('jquery/jqzoom/fadeout_speed');
		if (! empty($value)) {
			$parameters[] = "fadeoutSpeed: '$value'";
		}

		return "{" . implode(", ", $parameters) . "}";
	}
}