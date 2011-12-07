<?php

class Comunicart_JQuery_Model_Jqzoom_Config_Source_Showeffect
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 'show', 'label'=>Mage::helper('jquery')->__('Show')),
            array('value' => 'fadein', 'label'=>Mage::helper('jquery')->__('Fade in')),
        );
    }

}
