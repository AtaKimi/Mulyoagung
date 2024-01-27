<?php

namespace App\Traits;

trait HtmlFactoryHelper
{
    public function createParagraph()
    {
        return '<p>' . fake()->paragraph() . '</p>';
    }

    public function createHeadingOne()
    {
        return '<h1>' . fake()->sentence() . '</h1>';
    }

    public function createRandomImage()
    {
        return '<img src="https://picsum.photos/600/300"/>';
    }

    public function createContent()
    {
        $content = '';

        $content = $content . $this->createHeadingOne();
        for ($i = 0; $i < fake()->numberBetween(3, 7); $i++) {
            $content = $content . $this->createParagraph();
            if (fake()->boolean(20)) {
                $content = $content . $this->createRandomImage();
            }
        }
        return $content;
    }
}
