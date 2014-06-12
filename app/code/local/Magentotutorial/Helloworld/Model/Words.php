<?php

	class Magentotutorial_Helloworld_Model_Words
	{
		public function toOptionArray()
		{
			return array(
				array('value'=>1, 'label'=>Mage::helper('helloworld')->__('Selamat Pagi')),
				array('value'=>2, 'label'=>Mage::helper('helloworld')->__('Selamat Tinggal')),
				array('value'=>3, 'label'=>Mage::helper('helloworld')->__('Iya')),            
				array('value'=>4, 'label'=>Mage::helper('helloworld')->__('Tidak')),                       
			);
		}

	}

?>