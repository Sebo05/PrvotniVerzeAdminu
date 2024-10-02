<?php
namespace App\UI\Edit;

use Nette;
use Nette\Application\UI\Form;

final class EditPresenter extends Nette\Application\UI\Presenter
{
    public function __construct(
        private Nette\Database\Explorer $database,    
    ){
    }
    public function createComponentPostForm(): Form
        {
            $form = new Form;
            $form->addText('title', 'Titulek')->setRequired();
            $form->addText('description', 'Popisek')->setRequired();
            $form->addTextArea('content', 'Obsah:')->setRequired();

            $form->addSubmit('send', 'Uložit a publikovat');
            $form->onSuccess[] = [$this, 'postFormSucceeded'];
            return $form;
        }

        public function postFormSucceeded(Form $form, \stdClass $values): void
    {
        $postId = $this->getParameter('postId');

        if ($postId) {
            $post = $this->database->table('posts')->get($postId);
            $post->update([
                'title' => $values->title,
                'content' => $values->content,
                'description' => $values->description,
            ]);
        } else {
            $post = $this->database->table('posts')->insert([
                'title' => $values->title,
                'content' => $values->content,
                'description' => $values->description,
            ]);
        }

        $this->flashMessage("Příspěvek byl úspěšně publikován.", 'success');
        $this->redirect('Post:show', $post->id);
    }


        public function renderEdit(int $postId): void
        {
            $post = $this->database->table('posts')->get($postId);

            if (!$post) {
                $this->error('Post not found');
            }

            $this->getComponent('postForm')->setDefaults($post->toArray());
        }
}