<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\laragon\www\PrvotniVerzeAdminu\app\UI\Home/default.latte */
final class Template_97c3bcd6db extends Latte\Runtime\Template
{
	public const Source = 'C:\\laragon\\www\\PrvotniVerzeAdminu\\app\\UI\\Home/default.latte';

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


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['post' => '10'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<head>
	<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 3 */;
		echo '/css/style.css">
</head>

	<h1>Admin prvni verze jen pridani webu</h1>
	<div>
		<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Edit:create')) /* line 8 */;
		echo '">Napsat nový příspěvek</a>
	</div>
';
		foreach ($posts as $post) /* line 10 */ {
			echo '		<div>
			<div>
				<p><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Post:show', [$post->id])) /* line 13 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($post->title) /* line 13 */;
			echo '</a></p>
			</div>
			<div>
				';
			echo ($this->filters->truncate)($post->description, 250) /* line 16 */;
			echo '
			</div>
		</div>
';

		}
	}
}
