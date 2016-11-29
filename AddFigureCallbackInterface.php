<?php


/**
 * Пользовательский код, вызываемый в момент, когда на доску добавляется фигура.
 *
 * Фигура определенного типа/фигура любого типа (например, выводить текстовое сообщение
 * при добавлении пешки / при добавлении любой фигуры).
 */
interface AddFigureCallbackInterface
{
    /**
     * Вызывается при добавлении фигуры
     * @param PositionInterface $position
     * @param FigureInterface $figure
     * @return void
     */
    public function execute(PositionInterface $position, FigureInterface $figure);
}