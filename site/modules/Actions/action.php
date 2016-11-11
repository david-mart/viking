<?php
	if($input->urlSegment1 == "")
		include('./actions/index.php');
	else
		if(!include('./actions/'.$input->urlSegment1.'.php')) throw new Wire404Exception();

?>