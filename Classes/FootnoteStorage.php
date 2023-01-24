<?php

namespace HDNET\FormFootnote;

use TYPO3\CMS\Core\SingletonInterface;

class FootnoteStorage implements SingletonInterface
{
    protected static array $footnotes = [];

    public static function add(string $note): int
    {
        if (!in_array($note, self::$footnotes)) {
            self::$footnotes[] = $note;
        }
        return self::getNumber($note);
    }

    public static function getNumber(string $note): ?int
    {
        $result = array_search($note, self::$footnotes);
        return is_int($result) ? $result + 1 : null;
    }

    public static function getAllNotes(): array
    {
        if (empty(self::$footnotes)) {
            return [];
        }
        $numbers = range(1, count(self::$footnotes));
        return array_combine($numbers, self::$footnotes);
    }

    public static function reset(): void
    {
        self::$footnotes = [];
    }
}
