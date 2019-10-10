<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;
use App\Model\ArticleManager;


class HomepagePresenter extends Nette\Application\UI\Presenter
{
    /** @var ArticleManager */
    public $articleManager;

    public function injectDb(ArticleManager $articleManager)
    {

        $this->articleManager = $articleManager;
    }

    public function renderDefault(): void
    {
        $this->template->posts = $this->articleManager->getPublicArticles()->limit(5);
    }
}
