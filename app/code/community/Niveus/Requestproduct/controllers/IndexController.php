<?php
/**
* @copyright Niveus Solutoins.
*/ 
class Niveus_Requestproduct_IndexController extends Mage_Core_Controller_Front_Action
{
	/**
	 * index method for the controller
	 */
	public function indexAction()
	{
		$this->loadLayout(array('default'));
		$this->renderLayout();
	}

	/**
	 * This method save the requested new product
	 * into the database 
	 */ 
	public function saveRequestedProductAction(){
		
			$name =  $this->getRequest()->getParam("yourname");
			$email =  $this->getRequest()->getParam("youremail");
			$productname= $this->getRequest()->getParam("productname");
			$brand= $this->getRequest()->getParam("brand");
			$seenproduct= $this->getRequest()->getParam("seenproduct");
			$aboutproduct= $this->getRequest()->getParam("aboutproduct");
						
			try {
				$model = Mage::getModel('niveus_requestproduct/requestnewproduct');
	                
				$model->setData(
				    array(  'name' => $name,
				            'email' => $email,
				            'productname' => $productname,
				            'brand' => $brand,
				            'seenproduct' => $seenproduct,
				            'aboutproduct' => $aboutproduct
				            ))->save(); 
	           Mage::getSingleton('core/session')->addSuccess('Proudct Requested Successfully.');			            
	           $this->_redirect('requestproduct');
           } catch (Exception $e) {
	    		throw $e;
		   }			            
	}
}
?>
