<?php 
namespace console\controllers;
 use Yii;
 use yii\console\Controller;
class RbacController extends Controller
{
	
	public function actionInit()
	{
		$auth=Yii::$app->authManager;
	//them permission(  quyen)
		// $createBook=$auth->createPermission('create-book');
		// $createBook->description='Create a book';
		// $auth->add($createBook);

		// $indexCategory=$auth->createPermission('index-category');
		// $indexCategory->description='index a category';
		//$auth->add($indexCategory);

		// $updateBook=$auth->createPermission('update-book');
		// $updateBook->description='update a book';
		// $auth->add($updateBook);

		// $viewBook=$auth->createPermission('view-book');
		// $viewBook->description='view a book';
		// $auth->add($viewBook);

		// $deleteBook=$auth->createPermission('delete-book');
		// $deleteBook->description='delete a book';
		// $auth->add($deleteBook);

	// them nhom quyen

		// $categoryManager=$auth->createRole('manager-category');	
		// $auth->add($categoryManager);

		$admin=$auth->createRole('admin');
		// $bookManager=$auth->createRole('manager-book');
		$categoryManager=$auth->createRole('manager-category');

		// $auth->add($admin);
	//gan quyen

		// $createBook=$auth->createPermission('create-book');

		// $indexBook=$auth->createPermission('index-book');

		// $updateBook=$auth->createPermission('update-book');

		// $viewBook=$auth->createPermission('view-book');

		// $deleteBook=$auth->createPermission('delete-book');

		// $bookManager=$auth->createRole('manager-book');


		// $auth->addChild($categoryManager, $indexCategory);
		// $auth->addChild($admin, $bookManager);
			// $auth->addChild($admin, $categoryManager);

		// $auth->addChild($bookManager, $updateBook);

		// $auth->addChild($bookManager, $viewBook);

		// $auth->addChild($bookManager, $deleteBook);

	// gan nguoi dung
			// $auth->assign($bookManager, 2);
			$auth->assign($admin, 1);
	}
}
 ?>