<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\laragon\www\PrvotniVerzeAdminu\app\UI\Edit/edit.latte */
final class Template_bf46036a9c extends Latte\Runtime\Template
{
	public const Source = 'C:\\laragon\\www\\PrvotniVerzeAdminu\\app\\UI\\Edit/edit.latte';

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

		echo '<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 2 */;
		echo '">← zpět na výpis příspěvků</a>
<h1>Nová stránka</h1>

';
		$ʟ_tmp = $this->global->uiControl->getComponent('postForm');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 5 */;

		echo '
<script src="https://cdn.tiny.cloud/1/a5f68f006xrsc59n8gx8lp96ygl8nk5ygwdlu4wcckv7kgtg/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: \'textarea[name="content"]\',
        menubar: true,
        plugins: \'link image code lists advlist textcolor table\',
        toolbar: \'undo redo | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | code\',
        style_formats: [
            {title: \'Heading 1\', block: \'h1\'},
            {title: \'Heading 2\', block: \'h2\'},
            {title: \'Heading 3\', block: \'h3\'},
            {title: \'Paragraph\', block: \'p\'},
            {title: \'Blockquote\', block: \'blockquote\'}
        ],
        fontsize_formats: \'8pt 10pt 12pt 14pt 18pt 24pt 36pt\',
        font_formats: \'Arial=arial,helvetica,sans-serif; Courier New=courier new,courier; Times New Roman=times new roman,times;\',
        content_css: [
            \'//www.tiny.cloud/css/codepen.min.css\'
        ],
        setup: function (editor) {
            editor.on(\'change\', function () {
                editor.save();
            });
        }
    });
</script>
';
	}
}
