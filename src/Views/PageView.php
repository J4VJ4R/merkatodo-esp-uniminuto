<?php
namespace Grupo10\MerkaTodo\Views;

use Nev\View;

class PageView extends View
{
    protected string $title;

    /**
     * @var string|callable|View
     */
    protected $body;

    protected function render()
    { ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?= $this->title ?></title>
        </head>

        <body>
            <?=self::draw($this->body)?>
        </body>

        </html>
    <?php }
}