<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ) {

require_once(dirname(dirname(__DIR__)).'/api/Okay.php');
$okay = new Okay();

	$path = $_SERVER['DOCUMENT_ROOT'] . '/images3';
	if($_FILES["upload_file"]["name"]!='')
	{
    		$data = explode(".",$_FILES["upload_file"]["name"]);
    		$extenshion = $data[1];
    		$allowed_extenshion = array("JPG","jpg","png","gif");
    		if(in_array($extenshion,$allowed_extenshion))
    		{
        		$new_file_name = rand() . '.' . $extenshion;
        		$filename = $path . '/' . $new_file_name; 
        		if(move_uploaded_file($_FILES["upload_file"]["tmp_name"],$filename)){
        			sleep(2);
				$supplierId =  $_POST['supplierId'];

				/*				
				$this->db->query('SELECT id FROM __suppliers WHERE id=?',$supplierId);
				$filename = $this->db->result('filename');
				if(  file_exists($path) $filename){
					unlink()
				}
*/
				
				$query = $okay->db->placehold("UPDATE __suppliers SET filename=? WHERE id=?", $new_file_name,$supplierId);
				if($okay->db->query($query) && file_exists($path)) {
	    				echo $new_file_name;
				}

        		}
        		else{	
            			echo 'error';
        		}
    		}
    		else
    		{
            		echo 'error';	    
    		}
	}

}
