    <?php
class Shape{
        public $ancho;
        public $alto;

        public function __construct($ancho,$alto)
        {
            $this->ancho = $ancho;
            $this->alto = $alto;
        }
        public function area() {
            echo "El resultado del área es:" .($this->ancho * $this->alto);
          }
        }
class triangle extends Shape{

        public function __construct($ancho, $alto) {
            $this->ancho = $ancho;
            $this->alto = $alto;
      } 
        public function area() {
            echo "El resultado del área es:" .($this->ancho * $this->alto);
      }
    }

class rectangle extends Shape{

        public function area() {
            echo "El resultado del área es:" .($this->ancho * $this->alto);
      }
    }

    $shape = new Shape(10,20);
    $triangle = new Triangle (20,20);
    $rectangle = new Rectangle (10,10);
    echo $triangle->area();
    echo $rectangle->area();


    ?>