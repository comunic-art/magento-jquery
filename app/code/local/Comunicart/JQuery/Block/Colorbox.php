<?php

class Comunicart_JQuery_Block_Colorbox extends Mage_Core_Block_Template {
	/**
	 * Add style CSS file.
	 */
	protected function _prepareLayout() {
		$style = Mage::getStoreConfig('jquery/colorbox/style');
		$this->getLayout()->getBlock('head')->addCss("css/comunicart/jquery/colorbox/$style/colorbox.css");
		return parent::_prepareLayout();
	}

	/**
	 * Get settings to pass when invoke Colorbox.
	 */
	public function getJsSettings() {
		$arguments = Mage::getStoreConfig('jquery/colorbox/arguments');

		if (! empty($arguments)) {
			return $arguments;
		}

		$parameters = array();

		$transition = Mage::getStoreConfig('jquery/colorbox/transition');
		if (! empty($transition)) {
			$parameters[] = "transition: '$transition'";
		}

		$speed = Mage::getStoreConfig('jquery/colorbox/speed');
		if (! empty($speed)) {
			$parameters[] = "speed: $speed";
		}

		$width = Mage::getStoreConfig('jquery/colorbox/width');
		if (! empty($width)) {
			$parameters[] = "width: '$width'";
		}

		$height = Mage::getStoreConfig('jquery/colorbox/height');
		if (! empty($height)) {
			$parameters[] = "height: '$height'";
		}

		$opacity = Mage::getStoreConfig('jquery/colorbox/opacity');
		if (is_numeric($opacity)) {
			$parameters[] = "opacity: $opacity";
		}

		$loop = Mage::getStoreConfig('jquery/colorbox/loop');
		$parameters[] = "loop: $loop";

		$slideshow = Mage::getStoreConfig('jquery/colorbox/slideshow');
		$parameters[] = "slideshow: $slideshow";

		$slideshow_speed = Mage::getStoreConfig('jquery/colorbox/slideshow_speed');

		if (! empty($slideshow_speed)) {
			$parameters[] = "slideshowSpeed: $slideshow_speed";
		}

		$slideshow_auto = Mage::getStoreConfig('jquery/colorbox/slideshow_auto');
		$parameters[] = "slideshowAuto: $slideshow_auto";

		$slideshow_start = Mage::getStoreConfig('jquery/colorbox/slideshow_start');
		if (! empty($slideshow_start)) {
			$parameters[] = "slideshowStart: '$slideshow_start'";
		}
		else {
			$parameters[] = "slideshowStart: '".$this->__('Start slideshow')."'";
		}

		$slideshow_stop = Mage::getStoreConfig('jquery/colorbox/slideshow_stop');
		if (! empty($slideshow_stop)) {
			$parameters[] = "slideshowStop: '$slideshow_stop'";
		}
		else {
			$parameters[] = "slideshowStop: '".$this->__('Stop slideshow')."'";
		}

		$current = Mage::getStoreConfig('jquery/colorbox/current');
		if (! empty($current)) {
			$parameters[] = "current: '$current'";
		}
		else {
			$parameters[] = "current: '".$this->__('Image {current} of {total}')."'";
		}
		
		$previous = Mage::getStoreConfig('jquery/colorbox/previous');
		if (! empty($previous)) {
			$parameters[] = "previous: '$previous'";
		}
		else {
			$parameters[] = "previous: '".$this->__('Previous')."'";
		}
		
		$next = Mage::getStoreConfig('jquery/colorbox/next');
		if (! empty($next)) {
			$parameters[] = "next: '$next'";
		}
		else {
			$parameters[] = "next: '".$this->__('Next')."'";
		}
		
		$close = Mage::getStoreConfig('jquery/colorbox/close');
		if (! empty($close)) {
			$parameters[] = "close: '$close'";
		}
		else {
			$parameters[] = "close: '".$this->__('Close')."'";
		}

		return "{" . implode(", ", $parameters) . "}";
	}
}