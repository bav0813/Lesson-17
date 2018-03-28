<?php
    /**
     * Created by PhpStorm.
     * User: andrey
     * Date: 27.03.18
     * Time: 19:01
     */

    class Automotive
    {
        private $model;
        private $price;
        private $description;
        public $is_engine;

        public function __construct($model,$price,$description,$is_engine=true)
        {
            $this->model=$model;
            $this->price=$price;
            $this->description=$description;
            $this->is_engine=$is_engine;
        }

        /**
         * @return mixed
         */
        public function getModel()
        {
            return $this->model;
        }

        /**
         * @param mixed $model
         */
        public function setModel($model)
        {
            $this->model = $model;
        }

        /**
         * @return mixed
         */
        public function getPrice()
        {
            return $this->price;
        }

        /**
         * @param mixed $price
         */
        public function setPrice($price)
        {
            $this->price = $price;
        }

        /**
         * @return mixed
         */
        public function getDescription()
        {
            return $this->description;
        }

        /**
         * @param mixed $description
         */
        public function setDescription($description)
        {
            $this->description = $description;
        }


        public function checkEngine()
        {
            if ($this->is_engine==true)
                $engine_prop='with engine';
            else
                $engine_prop='without engine';


        return $engine_prop;
        }

        public function __toString()
        {


        return $this->model . ' '. $this->price . ' '. $this->description. ' '. $this->checkEngine() .'<br> ';
        }

    }

    class Bike extends Automotive
    {
        public $numberOfWheels;

        public function __construct($model, $price, $description,$numberOfWheels,$is_engine=true)
        {
            parent::__construct($model, $price, $description,$is_engine);

            $this->numberOfWheels=$numberOfWheels;
        }

        public function __toString()
        {
            return $this->getModel() . ' '. $this->getPrice() . ' '. $this->getDescription(). ' '.$this->checkEngine(). ' .Number of wheels ' .$this->numberOfWheels .'<br>';
        }

    }





    $auto=new Automotive('Tesla', 80000,'new generation electric vehicle');
    echo $auto;

    $auto->is_engine=false;  //engine has been lost :)
    echo $auto;

    $bike=new Bike('Kawasaki', 40000, 'sport bike',2);
    echo $bike;

    //got extra wheel and lost the engine
    $bike->numberOfWheels=3;
    $bike->is_engine=false;
    echo $bike;