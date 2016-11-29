<?php


/**
 * Шахматная доска.
 *
 * Существует шахматная доска определенного размера. На эту доску можно добавлять различные
 * фигуры (пешки/ферзи/короли). После добавления фигуры можно перемещать или удалять. В любой
 * момент времени состояние доски можно сохранить в хранилище (или загрузить из него): в файл
 * или в redis.
 */
interface BoardInterface
{
    /**
     * BoardInterface constructor.
     * @param BoardSerializerInterface $serializer
     */
    public function __construct(BoardSerializerInterface $serializer);

    /**
     * Добавление фигуры
     * @param PositionInterface $position
     * @param FigureInterface $figure
     * @return void
     */
    public function addFigure(PositionInterface $position, FigureInterface $figure);

    /**
     * Перемещение фигуры из позиции $fromPosition в позицию $toPosition
     * @param PositionInterface $fromPosition
     * @param PositionInterface $toPosition
     * @return void
     */
    public function moveFigure(PositionInterface $fromPosition, PositionInterface $toPosition);

    /**
     * Удаление фигуры в позиции $position
     * @param PositionInterface $position
     * @return void
     */
    public function removeFigure(PositionInterface $position);

    /**
     * Сохранение в хранилище $strategy
     * @param SavingStrategyInterface $strategy
     * @return void
     */
    public function save(SavingStrategyInterface $strategy);

    /**
     * Загрузка из хранилища $strategy
     * @param SavingStrategyInterface $strategy
     * @return void
     */
    public function load(SavingStrategyInterface $strategy);

    /**
     * Добавление пользователского кода в момент добавления фигуры на доску
     * @param AddFigureCallbackInterface $callback
     * @return void
     */
    public function addFigureAddingCallback(AddFigureCallbackInterface $callback);
}