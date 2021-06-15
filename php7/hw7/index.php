<?php

// класс объекта корзины

Class CartItem {

    public $id; // идентификатор товара
    public $price=0; // цена товара
    public $qty=1; // кол-во товара для добавления в корзину
    public $subtotal = 0; // сумма за товар с учетом его кол-ва

    /* благодаря конструктору, можно не только по отдельности задавать свойства объекта,
    но и так: new CartItem(345601,500,2) */
    public function __construct($id=NULL,$price=0,$qty=1) {
        if(isset($id)) {
            $this->id=$id;
            $this->price=$price;
            $this->qty=!$qty?1:$qty;
            $this->subtotal();
        }
    }

    function subtotal() {
        $this->subtotal = $this->price*$this->qty;

        return $this->subtotal;
    }
}

// класс корзины покупок, хранящейся в сессии
Class Cart {

    protected $items=array();

    // добавляем товар в корзину. Если в ней уже есть товар с таким же id, просто меняем его количество
    function add(CartItem $cartItem) {
        if(isset($this->items[$cartItem->id])) {
            $cartItem->qty += $this->items[$cartItem->id]->qty;
        }
        $this->edit($cartItem);
    }

    // редактируем товар в корзине, либо добавляем новый (кол-во не суммируется, для суммирования используется метод add(CartItem $cartItem))
    function edit(CartItem $cartItem) {
        $cartItem->subtotal();
        $this->items[$cartItem->id] = $cartItem;
    }

    function delete($id) {
        unset($this->items[$id]);
    }

    function emptyCart() {
        $this->items=array();
    }

    // считаем, сколько всего товаров в корзине
    function qty() {
        $qty = 0;
        foreach($this->get() as $cartItem) $qty += $cartItem->qty;
        return $qty;
    }

    function total() {
        $total = 0;
        foreach($this->get() as $cartItem) $total += $cartItem->subtotal;
        return $total;
    }

    // возвращаем либо один товар по идентификатору, либо все
    function get($id=NULL) {
        if(isset($id)) return $this->items[$id];
        else return $this->items;
    }
}


?>