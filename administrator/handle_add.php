<?php
           $dbhost = "localhost";
           $dbuser = "root";
           $dbpassword = "";
           $dbname = "krishi_unnayon";
		   
           $conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
			$conn -> set_charset("utf8");
            if(isset($_POST['save'])){
                 $cropName = $_POST['crop-name'];
                 $cropDescription = $_POST['crop-description'];
                 $cropDescription = substr($cropDescription,3, (strlen($cropDescription)) - 7);
                 $cropType = $_POST['crop-type'];
                 $f_name = $_POST['fartilizer_name'];

                 $f_use_per_hector = $_POST['f_use_per_hector'];




                 $f_name_json = json_encode($f_name);

                 $f_use_per_hector_json = json_encode($f_use_per_hector);




         /*

                 echo "Crop Name : ". " " . $cropName;
                 echo "Crop Description : ". " ". $cropDescription;
                 echo "Crop Type: ". " " . $cropType;

                 echo '<pre>'; print_r($f_name_json); echo '</pre>';

                 echo '<pre>'; print_r($f_use_per_hector_json); echo '</pre>';

        */


            /*
                $fertilizer_use = '';

                foreach ($f_name as $key => $value) {
                  // code...
                  $fertilizer_use .= $value . " : ". $f_use_per_bigha[$key] . "" . $f_use_per_hector[$key] . "" . $f_use_per_shotangsho[$key] . " , ";
                }
            */

              //  echo $fertilizer_use;



                $save = "INSERT INTO crops(name,description,crop_type,fertilizer,quantity) VALUES('".$cropName."','".$cropDescription."','".$cropType."','".$f_name_json."','".$f_use_per_hector_json."')";
                $query = mysqli_query($conn, $save);





            }

?>


<script type="text/javascript">location.href = '/krishi/administrator/';</script>
