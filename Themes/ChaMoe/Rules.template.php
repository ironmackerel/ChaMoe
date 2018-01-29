<?php

function template_main()
{
	global $context;

	echo '
	<div class="blockheader">Forum Rules</div><div class="block">';

	echo $context['agreement'];

	echo '</div>';
}

?>