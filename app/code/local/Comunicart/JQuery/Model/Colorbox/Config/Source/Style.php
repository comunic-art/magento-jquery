<?php

class Comunicart_JQuery_Model_Colorbox_Config_Source_Style
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 'style1', 'label'=>Mage::helper('jquery')->__('Style 1')),
            array('value' => 'style2', 'label'=>Mage::helper('jquery')->__('Style 2')),
            array('value' => 'style3', 'label'=>Mage::helper('jquery')->__('Style 3')),
            array('value' => 'style4', 'label'=>Mage::helper('jquery')->__('Style 4')),
            array('value' => 'style5', 'label'=>Mage::helper('jquery')->__('Style 5')),
        );
    }

}
