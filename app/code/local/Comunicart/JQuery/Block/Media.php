<?php
 
class Comunicart_JQuery_Block_Media extends Mage_Catalog_Block_Product_View_Media {

	/**
	 * Get Colorbox JS settings.
	 */
	public function getColorboxJsSettings() {
		return $this->getLayout()->getBlock('colorbox')->getJsSettings();
	}
  
	/**
	 * Get jQZoom JS settings.
	 */
	public function getJQZoomJsSettings() {
		return $this->getLayout()->getBlock('jqzoom')->getJsSettings();
	}
}