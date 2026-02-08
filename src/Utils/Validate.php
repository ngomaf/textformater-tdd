<?php

namespace Src\Utils;

class Validate
{
    public function string(string $data): bool
    {
        $data = trim($data);
        if (is_numeric($data)) {
            return false;
        }
        return true;
    }

    public function array(array $data): bool
    {
        if(!is_array($data)) return false;

        if(empty(array_filter($data))) return false;
        
        return true;
    }
}
