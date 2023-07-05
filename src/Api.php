<?php

declare(string_types=1);

namespace Joanne\LibTd1;

class Api {
    public function getRandomNumber(): int {
        return rand(0, 100);
    }
}