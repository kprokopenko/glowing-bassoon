<?php


/**
 * Позиция на доске
 */
interface PositionInterface
{
    /**
     * позиция по горизонтали, буквенная
     * @return string
     */
    public function getFile();

    /**
     * Позиция по вертикали, цифровая
     * @return integer
     */
    public function getRank();
}