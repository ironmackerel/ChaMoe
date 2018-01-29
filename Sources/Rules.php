<?php

if (!defined('SMF'))
	die('Hacking attempt...');

// Who's online, and what are they doing?
function Rules()
{
	global $context, $boarddir;

	loadTemplate('Rules');

	// Setup the linktree and page title (do it down here because the language files are now loaded..)
	$context['page_title'] = "Rules";
	$context['linktree'][] = array(
		'url' => $scripturl . '?action=rules',
		'name' => "Rules"
	);

	// Have we got a localized one?
	if (file_exists($boarddir . '/agreement.txt'))
		$context['agreement'] = parse_bbc(file_get_contents($boarddir . '/agreement.txt'), true, 'agreement');
	else
		echo "Oh no!";
}

?>