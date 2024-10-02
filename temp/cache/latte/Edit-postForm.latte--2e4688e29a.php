<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\laragon\www\PrvotniVerzeAdminu\app\UI\Edit\postForm.latte */
final class Template_2e4688e29a extends Latte\Runtime\Template
{
	public const Source = 'C:\\laragon\\www\\PrvotniVerzeAdminu\\app\\UI\\Edit\\postForm.latte';

	public const Blocks = [
		['content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class="form-group">
    <label for="title">Titulek</label>
    ';
		echo LR\Filters::escapeHtmlText($form['title']->getControl()->class('form-control')) /* line 4 */;
		echo '
</div>

<div class="form-group">
    <label for="description">Popisek</label>
    ';
		echo LR\Filters::escapeHtmlText($form['description']->getControl()->class('form-control')) /* line 9 */;
		echo '
</div>

<div class="form-group">
    <label for="content">Obsah:</label>
    ';
		echo LR\Filters::escapeHtmlText($form['content']->getControl()->class('form-control')) /* line 14 */;
		echo '
</div>

<div class="form-group">
    ';
		echo LR\Filters::escapeHtmlText($form['send']->getControl()->class('btn btn-primary')) /* line 18 */;
		echo '
</div>
';
	}
}
