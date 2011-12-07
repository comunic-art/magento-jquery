<?php

class Comunicart_JQuery_Model_Jqzoom_Config_Source_Zoomtype
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 'standard', 'label'=>Mage::helper('jquery')->__('Standard')),
            array('value' => 'reverse', 'label'=>Mage::helper('jquery')->__('Reverse')),
            array('value' => 'drag', 'label'=>Mage::helper('jquery')->__('Drag')),
            array('value' => 'innerzoom', 'label'=>Mage::helper('jquery')->__('Inner zoom')),
        );
    }

}
