<?php

namespace Src\Utils;

use Src\Utils\Validate;


class Phrase
{
    public function title(string $text): string
    {
        $this->validate($text);
        return ucwords($text);
    }

    public function upper(string $text): string
    {
        return strtoupper($text);
    }

    public function lower(string $text): string
    {
        return strtolower($text);
    }

    public function upFirst(string $text): string
    {
        return ucfirst($text);
    }

    private function validate(string $text)
    {
        $validate = new Validate();
        if($validate->string($text) === false) {
            return "Não é um texto";
        }
    }
}
