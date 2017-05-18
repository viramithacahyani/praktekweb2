<?php 

require_once 'View.php';
/**
* 
*/
class TugasUI extends View
{
	
	public function tampilTugas()
	{
		include_once 'pages/kontentugas2.php';
		$this->end();
	}
}



 ?>