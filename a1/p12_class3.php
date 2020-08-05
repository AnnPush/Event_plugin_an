/*Создайте подкласс, производный от представленного в этой главе класса Entree. Этот под-
класс должен принимать объекты типа Ingredient вместо символьной строки с наимено-
ваниями ингредиентов для их обозначения. Введите в этот подкласс метод, возвращающий
общую стоимость блюда.
*/
<?php

class PricedEntree extends Entree
{
   public function ___construct($name, $ingredients) 
   {
       parent::__construct($name, $ingredients);
       foreach ($this->ingredients as $ingredient)
	   {
          if (! $ingredient instanceof Ingredient)
		  {
              throw new Exception('Elements of $ingredients must be Ingredient objects');
          }
       }

   public function getCost()
   {
      $cost = 0;
      foreach ($this->ingredients as $ingredient)
      {
         $cost += $ingredient->getCost();
      }
      return $cost;
   }
}

?>
