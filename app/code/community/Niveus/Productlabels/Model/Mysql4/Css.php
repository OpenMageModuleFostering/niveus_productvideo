<?php

class Niveus_Productlabels_Model_Mysql4_Css extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the productlabels_id refers to the key field in your database table.
        $this->_init('productlabels/css', 'id');
    }
}