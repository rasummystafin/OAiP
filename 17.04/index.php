<?php
	namespace Admin;
	
	class Page
	{
		
	}
?>
<?php
	namespace Users;
	
	class Page
	{
		
	}
?>


<?php
	$adminPage = new \Admin\Page;
	$usersPage = new \Users\Page;
?>





<?php
	namespace Admin\Data;
	
	class Page
	{
		
	}
?>
<?php
	namespace Admin\View;
	
	class Page
	{
		
	}
?>

<?php
	$adminDataPage = new \Admin\Data\Page;
	$adminViewPage = new \Admin\View\Page;
?>







<?php
	namespace Admin;
	class Controller
	{}
	
    namespace Admin;
	class Page extends Controller
	{}
?>




<?php
	namespace \Core\Admin;
	
	class Data
	{
		public function __construct($num)
		{
			
		}
	}
?>
<?php
	namespace Users;
	
	class Page
	{
		public function __construct()
		{
			$data1 = new \Core\Admin\Data('1');
			$data2 = new \Core\Admin\Data('2');
		}
	}
?>
<?php
	namespace Users;
	use \Core\Admin\Data;
	
	class Page extends Controller
	{
		public function __construct()
		{
			$data1 = new Data('1');
			$data2 = new Data('2');
		}
	}
?>


<?php
	namespace Core\Admin;
	use Path\Router;
	class Controller extends Router
	{}
?>