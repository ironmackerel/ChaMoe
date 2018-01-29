<?php
/**
 * Simple Machines Forum (SMF)
 *
 * @package SMF
 * @author Simple Machines
 * @copyright 2011 Simple Machines
 * @license http://www.simplemachines.org/about/smf/license.php BSD
 *
 * @version 2.0
 */

function template_main()
{
	global $context, $settings, $options, $txt, $scripturl, $modSettings;

	foreach ($context['categories'] as $category)
	{
		echo '
		<div class="blockheader">', $category["name"], '</div>';

		echo '
		<div class="block">';
		foreach ($category['boards'] as $board)
		{
			echo '
			<div class="board">';

			echo '
			<div class="board-icon">';

			echo '
			<img src="', $settings['images_url'], '/', $context['theme_variant_url'], 'on', $board['new'] ? '' : '2', '.png" alt="', $txt['new_posts'], '" title="', $txt['new_posts'], '" />';

			echo '
			</div>';

			echo '
			<div class="board-text">';

			echo '
			<p>', $board["link"], '</p>';

			echo '
			<p>', $board["description"], '</p>';

			echo '
			</div>'; // .board-text

			echo '
			<div class="board-stats">';

			echo '
			<p>', comma_format($board['posts']), ' posts<br />', comma_format($board['topics']), ' threads</p>';

			echo '
			</div>'; // .board-stats

			echo '
			<div class="board-last-post">';

			echo '
			<p>Last post by ', $board['last_post']['member']['link'], '<br />in ', $board['last_post']['link'], '<br />', $board['last_post']['time'], '</p>';

			echo '
			</div>'; // .board-last-post

			echo '
			</div>'; // .board
		}
		echo '
		</div>';
	}

	template_info_center();
}

function template_info_center()
{
	global $context, $settings, $options, $txt, $scripturl, $modSettings;

}
?>