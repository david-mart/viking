<?php
$name = $input->post->name;

if(true) {

	// Email has sent successfully, echo a success page.

	echo "<fieldset>";
	echo "<div id='success_page'>";
	echo "<h4 class='highlight'>Thank you <strong>$name</strong>, your message has been submitted to us.</h4>";
	echo "</div>";
	echo "</fieldset>";

} else {

	echo 'ERROR!';

}
?>