<?php

namespace App\UI\Post;

use Nette\Application\UI\Form;
use Nette;

final class PostPresenter extends Nette\Application\UI\Presenter{
    public function __construct(
        private Nette\Database\Explorer $database,
    ){
    }
    public function renderShow(int $id): void
    {
        $post = $this->database
            ->table('posts')
            ->get($id);
        if (!$post) {
            $this->error('Stránka nebyla nalezena');
        }

        $this->template->post = $post;
    }

}



