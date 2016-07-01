<?php
namespace GSS\ProductFilter\Plugin;

class ProductFilter{
	public function afterGetName(\Magento\Catalog\Model\Product $subject, $result) {
			file_put_contents(dirname(__FILE__)."/nameLog.log", print_r($result, true),FILE_APPEND );
			file_put_contents(dirname(__FILE__)."/nameLog.log", print_r("\n", true),FILE_APPEND );
			file_put_contents(dirname(__FILE__)."/nameLog.log", print_r("\n", true),FILE_APPEND );
	        return '[' . $result . ']';
    }

    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result) {
    	file_put_contents(dirname(__FILE__)."/priceLog.log", print_r($result, true),FILE_APPEND );
		file_put_contents(dirname(__FILE__)."/priceLog.log", print_r("\n", true),FILE_APPEND );
	        // return '|' . $result . '|';
    	return $result*0;
    }
    
}
