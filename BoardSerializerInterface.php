<?php


/**
 * Сериализатор доски в строку
 */
interface BoardSerializerInterface
{
    /**
     * Сериализация доски
     * @param BoardInterface $board
     * @return string
     */
    public function serializeBoard(BoardInterface $board);

    /**
     * Десериализация доски из строки
     * @param $serializedString
     * @return BoardInterface
     */
    public function deserializeBoard($serializedString);
}