<?php


/**
 * Фигура (пешки/ферзи/короли)
 */
interface FigureInterface
{
    /**
     * Можно ли переместить фигуру из позиции $from в позицию $to
     * @param PositionInterface $from
     * @param PositionInterface $to
     * @return boolean
     */
    public function canMove(PositionInterface $from, PositionInterface $to);

    /**
     * Краткий текстовый идентификатор фигуры.
     * @return string
     */
    public function getTextId();
}