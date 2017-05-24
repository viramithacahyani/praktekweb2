<?php 
include 'View.php';

/**
* 
*/
class TugasUI extends View
{
    public function tampilkanBerita()
    {
        include_once 'Model/Berita.php';

        $brt = new Berita();

        $isi_berita = $brt->ambilBerita();

        include_once 'pages/kontentugas2.php';

        $this->end();

	}
}



 ?>