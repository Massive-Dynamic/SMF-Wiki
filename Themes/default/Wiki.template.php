<?php
// Version: 0.1; Wiki

function template_wiki_above()
{
	global $context, $modSettings, $txt, $user_info;

	echo '
	<div class="floatleft wikileft"><div>';

	foreach ($context['wiki_navigation'] as $group)
	{
		echo '
		<h3 class="catbg3 headerpadding"><a href="', $group['url'], '">', $group['title'], '</a></h3>
		<ul>';

		foreach ($group['items'] as $item)
		{
			echo '
			<li><a href="', $item['url'], '">', $item['title'], '</a>';
		}

		echo '
		</ul>';
	}

	echo '
	</div></div>
	<div class="wikiright">';
}

function template_wiki_below()
{
	global $context, $modSettings, $txt, $user_info, $wiki_version;

	echo '
	</div>
	<div id="project_bottom" class="smalltext" style="text-align: center; clear: both;">
		Powered by: SMF Wiki ', $wiki_version, '</a> &copy; <a href="http://www.madjoki.com/" target="_blank">Niko Pahajoki</a> 2008
	</div>';
}

?>