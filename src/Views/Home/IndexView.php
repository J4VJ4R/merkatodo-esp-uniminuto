<?php
namespace Grupo10\MerkaTodo\Views\Home;

use Grupo10\MerkaTodo\Views\PageView;
use Nev\View;

class IndexView extends View
{
    protected function render()
    {
        echo PageView::show([
            'title' => 'Home Page',
            'body' => function () { ?>
                <h1>Home</h1>
                <p>Welcome!</p>
            <?php }
        ]);
    }
}