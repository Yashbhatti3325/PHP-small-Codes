<!-- <!-- <?php
    $a = 2;
    $b = 5;
    $c = "hello";
    echo $a + $b;
    echo "<br>";
    echo $a - $b;
    echo "<br>";
    echo $a * $b;
    echo "<br>";
    echo $a / $b;
    echo "<br>";
    echo $a % $b;
    echo "<br>";
    echo $a ** $b;
    echo "<br>";
    echo $c.="world";
    echo "<br>";
    echo $c;
?> -->


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<?php
$a = 50;
$b = ($a >= 50) ? "You have pass the Exam" : "you fail";
echo "$b";
?> -->


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<!-- 
<?php
    $a=array("hello "," this ","is ","hacker .");
    echo count($a);
    echo"
    <br>";
    print_r($a);
?> -->


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<!-- <?php
    $a = array("A"=>10,"B"=>10,"C"=>20,"D"=>20);
    echo array_search("10",$a);
    echo array_search("20",$a,true);
?> -->


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<!-- <?php
    $a=array("Yash"=>30,"jay"=>40,"raj"=>50);
    echo $a["Yash"];
?> -->


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<!-- <?php
    $cars=array(
        array("volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
    );
    for($i=0;$i<4;$i++)
    {
        echo"<br>";
        for($j=0;$j<3;$j++)
        {
            echo $cars[$i][$j]." ";
        }
    }
?> -->


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<!-- <?php
    $a=20;
    function add()
    {
        $x=30;
        $ans= $x ;
        echo "$ans";
        echo "$x";
    }
    add();
?> -->


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<!-- <?php
    function addi($a,$b)
    {
        $sum=$a+$b;
        return $sum;
    }
    $result=addi(20,30);
    echo "Ans is =".$result;
?> -->


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<!-- <?php
    function addition($a,$b=10)
    {
        $sum=$a+$b;
        return $sum;
    }
    $result=addition(10);
    echo "$result";
?> -->


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<!-- <?php
    function swap(&$a,&$b)
    {
        $temp=$a;
        $a=$b;
        $b=$temp;
    }
    $a=20;
    $b=30;
    echo "Befor swaping <br>";
    echo "a = ".$a."<br>";
    echo "b = ".$b."<br>";
    swap($a,$b);
    echo "After swaping <br>";
    echo "a = ".$a."<br>";
    echo "b = ".$b."<br>";
?> -->


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<!-- <?php
    $str="    hello world";
    echo $str."<br>";
    echo ltrim($str);
?> -->


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<!-- <?php
  define("Hello","world",false);
  echo Hello." hii ";
  $a="hello";
  echo $a.="hii <br>";
  echo $a;
?> -->


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<!-- <?php
    $a="pink";
    switch($a)
    {
        case "red":
            echo "you'r favorate coler is red";
            break;
        case "green":
            echo "you'r favorate coler is green";
            break;
            case "blue":
                echo "you'r favorate coler is blue";
                break;
                case "black":
                    echo "you'r favorate coler is black";
                break;
                case "yellow":
                    echo "you'r favorate coler is yellow";
                break;
                case "pink":
                    echo "you'r favorate coler is pink";
                break;
                case "orange":
                    echo "you'r favorate coler is orange";
                break;
                default:
        echo "you aree not present";
    }
?> -->


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<!-- <?php
$a = 0;
    while($a<=100)
    {
        if($a>5)
            break;
        echo $a." " . __LINE__ ." ";
        $a=$a+1;
    }
?> -->


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<!-- <?php
    for($a=0;$a<=50;$a++)
    {
        if($a%2==0)
        {
            continue;
        }
        echo " $a <br>";
    }
?> -->


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<!-- <?php
    $a = array(10,20,30,40,50);
    foreach ($a as $ex)
    {
        $ex = $ex / 5;
        echo $ex . "<br>";
    }
?> -->


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<!-- <?php
    function sum($a,$b=90)
    {
        $ans= $a+$b;
        return $ans;
    }
    $ris=sum(10);
    echo $ris;
?> -->


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<!-- <?php
    $a = array("10","20","30","50");
    print_r( $a);
    echo"<br>";
    array_push($a,"40","60");
    print_r($a);
    echo "<br>";
    array_pop($a);
    print_r($a);
?> -->


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<!-- <?php
echo time();
?> -->


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<!-- <?php
    $a=array("10","209","350","140","50");
    for($row = 0;$row < count($a);$row++)
    {
        for($col = 0;$col < count($a);$col++)
        {
            if($a[$col]>$a[$row])
            {
                $temp=$a[$row];
                $a[$row]=$a[$col];
                $a[$col]=$temp;
            }
        }
    }
    foreach($a as $y)
    {
        echo $y . " ";
    }
?> -->


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<!-- <?php
    $a=10;
    function mytest()
    {
        echo "variable a is :";
        //rand(2,5);
        echo rand(2,45);
    }
    mytest();
?>-->


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<?php
    $fileo=fopen("HELLO.TXT","w");
    echo fwrite( $fileo,"my name is hacker!!!");
    fclose($fileo);
?>
