<?php
namespace GSS\ProductFilter\Plugin;

class ProductFilter{

	public function afterGetName(\Magento\Catalog\Model\Product $subject, $result) {
	        return '[' . $result . ']';
    }

    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result) {
       	return 3;
    }

    public function afterIsSaleable(\Magento\Catalog\Model\Product $subject, $result) {
       	return 0;
    }

    public function afterIsAvailable(\Magento\Catalog\Model\Product $subject, $result) {
       	return 0;
    }   
    
}
