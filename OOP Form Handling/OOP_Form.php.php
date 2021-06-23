<?php
class myData{
    public $name;
    public $age;
    public $sex;

    public function setData($x, $y, $z)
    {
        $this->name = $x;
        $this->age = $y;
        $this->sex= $z;
    }

}

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php

    if($_POST['submit'])
    {
        $mName=$_POST['myname'];
        $mAge=$_POST['myage'];
        $mSex=$_POST['mysex'];

        //creating object now
        $data= new myData();

        $data->setData($mName,$mAge,$mSex);

        echo "Hello ".$data->name.". Your are ".$data->age." years old. You are a ";
        if($data->sex==1)
        {
            echo "Male.";
        }
        else
        {
            echo "Female.";
        }

    }

?>

    <form name="" method="post">
        Name: <input type="text" name="myname" required 
placeholder="i.e. Mr. Suchi"/><br/>
        Age: <input type="text" name="myage" required 
placeholder="i.e. 22" /><br/>
        You are: <input type="radio" name="mysex" value="1" /> 
Male <input type="radio" name="mysex" value="2" />Female<br/>

        <input type="submit" name="submit" value="Show My Data"/>

    </form>

</body>
</html>