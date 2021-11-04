<?php

    abstract class karyawan{
        public $no;
        public $nama;
        public $ttl;
        public $gender;
        public $level;
        public $status;
        public $gaji;
	}
    
    class fulltime extends karyawan{
    public $status='fulltime';
    function __construct($no,$nama,$ttl,$gender,$level){
		$this->no=$no;
        $this->nama=$nama;
        $this->ttl=$ttl;
        $this->gender=$gender;
        $this->level=$level;
         
        if($this->level=='Junior'){
            $this->gaji=2000000;
        }
        else if($this->level=='Amateur'){
            $this->gaji=3500000;
        }
        else if($this->level='Senior'){
            $this->gaji=5000000;
        }
    }
}
	
	class parttime extends karyawan{
    public $status='parttime';
    function __construct($no,$nama,$ttl,$gender,$level){
		$this->no=$no;
        $this->nama=$nama;
        $this->ttl=$ttl;
        $this->gender=$gender;
        $this->level=$level;

        if($this->level=='Junior'){
            $this->gaji=2000000*0.5;
        }
        else if($this->level=='Amateur'){
            $this->gaji=3500000*0.5;
        }
        else if($this->level=='Senior'){
            $this->gaji=5000000*0.5;
        }
    }

}

		$karyawan=array();
        $karyawan[0] = new fulltime(1, 'Roms', 'Tangerang, 27 Juli 2001', 'Laki-laki', 'Amateur');
        $karyawan[1] = new parttime(2, 'Lian', 'Binjai, 19 Juni 2000', 'Laki-laki', 'Junior');
        $karyawan[2] = new fulltime(3, 'Lia Savira', 'Balikpapan, 16 April 2002', 'Perempuan', 'Senior');
        $karyawan[3] = new parttime(4, 'Dwi', 'Balikpapan, 16 Juli 2002', 'Perempuan', 'Senior');

    
?>

<!DOCTYPE html>
<html lang="en", style="Background-color: #ECD7D7";>
<head>
	<meta charset="UTF-8">
	<tittle>Praktikum 4</tittle>
	<link rel="stylesheet" type="text/css" href="custom.css"\>
</head>

<body>
<h1> Daftar Karyawan </h1>
<h2> Ini Tabel </h2>
    <table class="tabel" border='6' bordercolor= '#34495E';>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tempat Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Status</th>
				<th>Level</th>
                <th>Gaji Karyawan</th>
            </tr>

            <?php for ($i=0; $i < 4; $i++) { ?>
            
            <tr>
                <td> <?php echo $karyawan[$i]->no; ?> </td>
                <td> <?php echo $karyawan[$i]->nama; ?> </td>
                <td> <?php echo $karyawan[$i]->ttl; ?> </td>
                <td> <?php echo $karyawan[$i]->gender; ?> </td>
				<td> <?php echo $karyawan[$i]->status; ?> </td>
                <td> <?php echo $karyawan[$i]->level; ?> </td>
                <td> <?php echo $karyawan[$i]->gaji; ?> </td>                   
            </tr> 
            <?php } ?>
    
</body>
</html>