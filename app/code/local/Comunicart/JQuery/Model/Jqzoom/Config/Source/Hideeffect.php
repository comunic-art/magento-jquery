<?php

class Comunicart_JQuery_Model_Jqzoom_Config_Source_Hideeffect
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 'hide', 'label'=>Mage::helper('jquery')->__('Hide')),
            array('value' => 'fadeout', 'label'=>Mage::helper('jquery')->__('Fade out')),
        );
    }

}
