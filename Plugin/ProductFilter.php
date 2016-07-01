<?php
namespace GSS\ProductFilter\Plugin;

class ProductFilter{
	public function afterGetName(\Magento\Catalog\Model\Product $subject, $result) {
	        return '[' . $result . ']';
    }

    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result) {
       	return $result*0;
    }
    
}
