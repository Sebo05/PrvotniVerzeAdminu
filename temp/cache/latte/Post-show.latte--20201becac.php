<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\laragon\www\PrvotniVerzeAdminu\app\UI\Post/show.latte */
final class Template_20201becac extends Latte\Runtime\Template
{
	public const Source = 'C:\\laragon\\www\\PrvotniVerzeAdminu\\app\\UI\\Post/show.latte';

	public const Blocks = [
		['head' => 'blockHead', 'content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		$this->renderBlock('head', get_defined_vars()) /* line 1 */;
		$this->renderBlock('content', get_defined_vars()) /* line 6 */;
	}


	/** {block head} on line 1 */
	public function blockHead(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '    <head>
        <title>';
		echo LR\Filters::escapeHtmlText($post->title) /* line 3 */;
		echo '</title>
    </head>
';
	}


	/** {block content} on line 6 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '
<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Edit:edit', [$post->id])) /* line 8 */;
		echo '">Upravit příspěvek</a>
    <p><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 9 */;
		echo '">← zpět na výpis příspěvků</a></p>

    <h1>';
		echo LR\Filters::escapeHtmlText($post->title) /* line 11 */;
		echo '</h1>

    <div>
        ';
		echo $post->content /* line 14 */;
		echo '        
    </div>
';
	}
}
