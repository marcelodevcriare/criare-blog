<?php

namespace Criarenet\Blog\Alert\Components;

class TextComponent extends AbstractComponent
{
    protected $text;

    public function create($text)
    {
        $this->text = $text;
    }

    public function render()
    {
        return "<p>{$this->text}</p>";
    }
}
