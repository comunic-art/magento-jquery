<?php

class Comunicart_JQuery_Model_Jqzoom_Config_Source_Position
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 'right', 'label'=>Mage::helper('jquery')->__('Right')),
            array('value' => 'left', 'label'=>Mage::helper('jquery')->__('Left')),
            array('value' => 'top', 'label'=>Mage::helper('jquery')->__('Top')),
            array('value' => 'bottom', 'label'=>Mage::helper('jquery')->__('Bottom')),
        );
    }

}
