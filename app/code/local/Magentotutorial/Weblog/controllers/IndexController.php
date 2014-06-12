<?php

 class Magentotutorial_Weblog_IndexController extends Mage_Core_Controller_Front_Action 
 {
  //  public function testModelAction() {
 //       echo 'Setup!';
 //   }
 //} 
 
 // public function testModelAction() {
 //       $blogpost = Mage::getModel('weblog/blogpost');
 //       echo get_class($blogpost);
 //   } 
//}

	 public function testModelAction() 
	 {
		$params = $this->getRequest()->getParams();
		$blogpost = Mage::getModel('weblog/blogpost');
		echo("Loading the blogpost with an ID of " .$params['id']." ");
		$blogpost->load($params['id']);
		$data = $blogpost->getData();
		var_dump($data);
	} 

	public function createNewPostAction() 
	{
		$blogpost = Mage::getModel('weblog/blogpost');
		$blogpost->setTitle('Tes Doang!');
		$blogpost->setPost('Kan udah di bilang Tes Doang!');
		$blogpost->save();
		echo 'post with ID ' . $blogpost->getId() . ' created';
	} 
	
	public function editFirstPostAction() 
	{
		$blogpost = Mage::getModel('weblog/blogpost');
		$blogpost->load(1);
		$blogpost->setTitle("Ganti GanTi!");
		$blogpost->setPost('Nyobaik doang Keganti Ga!');
		$blogpost->save();
		echo 'post edited';
	}

	public function deleteFirstPostAction() 
	{
		$blogpost = Mage::getModel('weblog/blogpost');
		$blogpost->load(1);
		$blogpost->delete();
		echo 'post removed';
	} 	

	public function showAllBlogPostsAction() 
	{
		$posts = Mage::getModel('weblog/blogpost')->getCollection();
		foreach($posts as $blogpost)
			{
				echo '<h3>'.$blogpost->getTitle().'</h3>';
				echo nl2br($blogpost->getPost());
			}
	}

}
?>