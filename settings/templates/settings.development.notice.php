<?php if (OC_Util::getEditionString() === ''): ?>
	<p>
		<?php print_unescaped(str_replace(
			[
				'{communityopen}',
				'{githubopen}',
				'{licenseopen}',
				'{linkclose}',
			],
			[
				'<a href="https://nextcloud.com/contribute" target="_blank" rel="noreferrer">',
				'<a href="https://github.com/nextcloud" target="_blank" rel="noreferrer">',
				'<a href="https://www.gnu.org/licenses/agpl-3.0.html" target="_blank" rel="noreferrer">',
				'</a>',
			],
			$l->t('Developed by the {communityopen}Nextcloud community{linkclose}, the {githubopen}source code{linkclose} is licensed under the {licenseopen}AGPL{linkclose}.')
		)); ?>
	</p>

	<p class="social-button">
		<?php print_unescaped(str_replace(
			[
				'{googleimage}',
				'{facebookimage}',
				'{twitterimage}',
				'{rssimage}',
				'{mailimage}',
				'{googleopen}',
				'{facebookopen}',
				'{twitteropen}',
				'{rssopen}',
				'{newsletteropen}',	
				'{linkclose}',
				'{googletext}',
				'{facebooktext}',
				'{twittertext}',
				'{rsstext}',
				'{mailtext}',
			],
			[
				image_path('core', 'googleplus.svg'),
				image_path('core', 'facebook.svg'),
				image_path('core', 'twitter.svg'),
				image_path('core', 'rss.svg'),
				image_path('core', 'mail.svg'),
				'<a target="_blank" rel="noreferrer noopener" href="https://plus.google.com/b/104036748063781940910/104036748063781940910/about">',
				'<a target="_blank" rel="noreferrer noopener" href="https://www.facebook.com/Nextcloud-1032807203462807/">',
				'<a target="_blank" rel="noreferrer noopener" href="https://twitter.com/nextclouders">',
				'<a target="_blank" rel="noreferrer noopener" href="https://nextcloud.com/blogfeed">',
				'<a target="_blank" rel="noreferrer noopener" href="https://newsletter.nextcloud.com/?p=subscribe&amp;id=1">',
				'</a>',
				$l->t('Follow us on Google Plus!'),
				$l->t('Like our facebook page!'),
				$l->t('Subscribe to our twitter channel!'),
				$l->t('Subscribe to our news feed!'),
				$l->t('Subscribe to our newsletter!'),

			],
'{googleopen}<img width="50" src="{googleimage}" title="{googletext}" alt="{googletext}">{linkclose}
{facebookopen}<img width="50" src="{facebookimage}" title="{facebooktext}" alt="{facebooktext}">{linkclose}
{twitteropen}<img width="50" src="{twitterimage}" title="{twittertext}" alt="{twittertext}">{linkclose}
{rssopen}<img class="img-circle" width="50" src="{rssimage}" title="{rsstext}" alt="{rsstext}">{linkclose}
{newsletteropen}<img width="50" src="{mailimage}" title="{mailtext}" alt="{mailtext}">{linkclose}'
		)); ?>
	</p>

<?php endif; ?>
