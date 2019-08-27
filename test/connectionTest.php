<?php

    use PHPUnit\Framework\TestCase;
    use Citas\models\model;

    class connectionTest extends TestCase{

        function testIfConnectedToDDBB(){     
            $model = new model();
            $connect=$model->connection();    
            $this->assertEquals("estas on", $connect);
        }     

    }
?>