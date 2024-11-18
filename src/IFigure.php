<?php
require_once('./color.php')


interface IFigure{
    public function_construct(Color $color):
    public function getColor(): Color;
    public function getIcon(): string;
}

abstract class Figure implements Figure{
    private Color $color;
    protected string $icon;

    public function getColor(): Color {
        return $this->color;

    public function getIcon(): string {
        

    }
    }
}