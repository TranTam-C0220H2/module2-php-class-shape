<?php
include_once 'class/MyRectangle.php';
include_once 'class/Circle.php';
include_once 'class/Cylinder.php';
include_once 'class/Square.php';
include_once 'class/Triangle.php';
$circle = new Circle('hinh tron', 5);
$cylinder = new Cylinder('hinh tru', 3, 4);
$myRectangle = new MyRectangle('hinh chu nhat', 4, 3);
$square = new Square('hinh vuong', 5, 5);
echo $circle->show() . '<br>';
echo 'Chu vi hinh tron la: ' . $circle->calculatePerimeter() . ' ';
echo 'Dien tich hinh tron la: ' . $circle->calculateArea() . '<br>';
echo $cylinder->show() . '<br>';
echo 'Dien tich hinh tru la: ' . $cylinder->calculateArea() . ' ';
echo 'Dien tich hinh tru la: ' . $cylinder->calculateVolume() . '<br>';
echo $myRectangle->show() . '<br>';
echo 'Chu vi hinh chu nhat la: ' . $myRectangle->calculatePerimeter() . ' ';
echo 'Dien tich hinh chu nhat la: ' . $myRectangle->calculateArea() . '<br>';
echo $square->show() . '<br>';
echo 'Chu vi hinh vuong la: ' . $square->calculatePerimeter() . ' ';
echo 'Dien tich hinh vuong la: ' . $square->calculateArea();
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<hr>
<form action="" method="post">
    <h3>Tam giac</h3>
    <label>Canh 1: <input type="text" name="side1"></label>
    <label>Canh 2: <input type="text" name="side2"></label>
    <label>Canh 3: <input type="text" name="side3"></label>
    <label>Mau sac:
        <select name="color">
            <option>xanh</option>
            <option>do</option>
            <option>tim</option>
            <option>vang</option>
        </select>
    </label>
    <input type="submit" value="Thong tin">
</form>
<?php
$side1 = $_POST['side1'];
$side2 = $_POST['side2'];
$side3 = $_POST['side3'];
$color = $_POST['color'];
$triangle = new Triangle('tam giac');
$triangle->setSide1($side1);
$triangle->setSide2($side2);
$triangle->setSide3($side3);
$triangle->setColor($color);
if ($triangle->getArea() > 0) {
    echo $triangle->toString() . ', ';
    echo 'chu vi ' . $triangle->getPerimeter() . ', dien tich ' . $triangle->getArea();
} else {
    echo 'Day khong phai cac canh cua tam giac!';
}
?>
</body>
</html>
