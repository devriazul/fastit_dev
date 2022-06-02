<?php 


//reconect
function Reconect($url){
	echo "<script> location.replace('".$url."')</script>";
}


function TimeReconect($url,$time){

      echo"<script>
         setTimeout(function(){
            window.location.href = '".$url."';
         },'".$time."');
      </script>";
}



// Account status
function Account_status($status){

	if ($status==1) {		
		$Account_status = "<span class='text-success' >Active</span>";
	}else{
		$Account_status = "<span class='text-danger' >Deactive</span>";
	}

	return $Account_status;
}

?>