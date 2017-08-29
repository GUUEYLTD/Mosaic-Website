<?php
	class resourcebundle_create{
		private $_uri = array();

		public function add($uri)
		{
			$this->_uri[] = $uri;
		}

		public function submit()
		{
			echo $uriGetParam = isset($_GET['uri']) ? $_GET['uri'] : '/';

			foreach($this->_uri as $key => $value)
			{
				if(preg_match("#^$value$#", $uriGetParam))
				{
					echo 'match!';
				}
			}
		}
	}
 ?>
