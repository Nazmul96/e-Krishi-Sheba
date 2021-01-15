<?php 
		$jat;
		$type;
		$jomi_area;
		$uria ;
		$tsp  ;
		$mop  ;
		$zipsam ;
		$dosta  ;







if(isset($_POST['jat'])) {
if(isset($_POST['type']))
	{
	$jat= $_POST['jat'];
	echo $jat;echo" ";
	
	$type = $_POST['type'];
	echo $type; echo" ";
	$jomi_area=$_POST['jomi'];
	echo $jomi_area; echo" ";
	$number=$jomi_area;
	if ($jat==1)
	{
		//br3
		switch ($type) {
        case '1':
			//bigha

	$uria =  $number*35 ; 
	$tsp =  $number*12 ;
	$mop =  $number*20 ; 
	$zipsam =  $number*15 ;
	$dosta =  (float)$number*1.5 ; 
	header("location: hi.php");
		
            break;
        case '2':
           //shotangsho
	
		$uria = (float)$number*(float)(35/33) ;
		$tsp = (float) $number*(float)(12/33) ;
		$mop =  (float)$number*(float)(20/33) ;
		$zipsam =  (float)$number*15/33 ;
		$dosta =  (float)$select* (float)(1.55/33) ;
            
		
			break;
			case '3':
			//hector
   
	$uria = (float) $number*35*(float)7.47 ; 
	$tsp =  (float)$number*12*(float)7.47 ;
	$mop = (float) $number*20*(float)7.47 ; 
	$zipsam =  (float)$number*15*(float)7.47 ;
	$dosta =  (float)$number*1.5*(float)7.47 ; 
            break;
        default:
          echo 'Plese select an option';
            break;
						}
		
	}
	
	else if ($jat==2)
	{
		//br16
	}
	else if ($jat==3)
	{
		//br28
	}
	
	
   
    
}

}





?>
