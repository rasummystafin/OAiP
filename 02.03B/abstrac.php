<?php
	trait TestTrait
	{
		public function method1()
		{
			return 1;
		}
		
		abstract public function method2();
	}
echo "ошибка намерена заданием если что";
?>
<?php
	class Test
	{
		use TestTrait;
		
		// дематериализуем абстрактный метод:
		
	}
	
	new Test;
?>