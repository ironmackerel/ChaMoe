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
	global $context, $settings, $options, $scripturl, $modSettings, $txt;

	echo '
		<div class="pages">Pages: ', $context['page_index'], '</div><br />';

	echo '
		<div class="block threadlist"><table><tr>
		<th width="10%"></th>
		<th width="50%">Subject</th>
		<th width="10%">Started by</th>
		<th width="10%">Replies</th>
		<th width="10%">Views</th>
		<th width="10%">Last Post</th></tr>';

	foreach ($context['topics'] as $topic)
	{
		echo '
		<tr class="threadrow">
		<td>Icon</td>
		<td>', $topic['first_post']['link'];

		if ($topic['pages']) 
		{
			echo '<div class="thread_pages">Pages: ', $topic['pages'], '</p>';
		}
		
		echo '</td>
		<td>Poster</td>
		<td>', $topic['replies'], '</td>
		<td>690000</td>
		<td>A stupid bunch of bullshit who cares</td>
		</tr>';
	}

	echo '
		</table></div>'; // .threadlist

	echo '
		<div class="pages">Pages: ', $context['page_index'], '</div>';

	// Show breadcrumbs at the bottom too.
	theme_linktree();
}

?>