<?php

namespace App\Contracts;

interface ContractCart
{
    /**
     * Очистить корзину
     *
     * @return mixed
     */
    public function clear();

    /**
     * Получить стоимость заказа
     *
     * @return mixed
     */
    public function total();

    /**
     * Получить позиции заказа
     *
     * @return mixed
     */
    public function items();

    /**
     * Добавить позицию в заказ
     *
     * @return mixed
     */
    public function addItem();

    /**
     * Удалить позицию из заказа
     *
     * @return mixed
     */
    public function deleteItem();
}
