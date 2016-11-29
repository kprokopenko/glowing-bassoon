<?php


/**
 * Стратегия сохранения в хранилище
 */
interface SavingStrategyInterface
{
    /**
     * Сохранение строки $string в хранилище
     * @param string $string
     * @return void
     */
    public function saveString($string);

    /**
     * Получение строки из хранилища
     * @return string
     */
    public function loadString();
}