<?php

class Comunicart_JQuery_Model_Colorbox_Config_Source_Transition
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 'elastic', 'label'=>Mage::helper('jquery')->__('Elastic')),
            array('value' => 'fade', 'label'=>Mage::helper('jquery')->__('Fade')),
            array('value' => 'none', 'label'=>Mage::helper('jquery')->__('None')),
        );
    }

}
