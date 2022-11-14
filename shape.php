    <?php
class Shape{
        public $base;
        public $altura;

        public function __construct($base,$altura)
        {
            $this->base = $base;
            $this->altura = $altura;
        }
        }
class Triangle extends Shape{

        public function __construct($base, $altura) {
            $this->base = $base;
            $this->altura = $altura;
      } 
        public function area() {
            echo "El resultado del área es:" .(($this->base * $this->altura)/2);
      }
    }

class Rectangle extends Shape{

        public function area() {
            echo "El resultado del área es:" .($this->base * $this->altura);
      }
    }

    $shape = new Shape(10,20);
    $triangle = new Triangle (10,2);
    $rectangle = new Rectangle (30,10);
    echo $triangle->area();
    echo $rectangle->area();


    ?>