<?php
/*
 * step1 定义一个类,创建一个对象
 */
class Site {
    var $url;
    var $title;
    function setUrl($par) {
        $this->url = $par;
    }
    function getUrl() {
        echo $this->url . "<br>";
    }
    function setTitle($par) {
        $this->title = $par;
    }
    function getTitle() {
        echo $this->title . "<br>";
    }
}

// 创建对象
$didi = new Site();
$didi->setUrl("https://www.didiglobal.com");
$didi->setTitle("滴滴出行");
$didi->getUrl();
$didi->getTitle();

echo "-----------------" . "<br>";

/*
 * step2 使用构造函数创建对象,使用析构函数销毁对象
 */
class Dog {
    var $name;
    var $age;
    // 构造函数
    function __construct ($par1, $par2) {
        $this->name = $par1;
        $this->age = $par2;
    }
    // 析构函数 对象所在函数调用完毕时自动执行
    function __destruct() {
        echo "销毁" . $this->name . "<br>";
    }
    function getName() {
        echo $this->name . "<br>";
    }
    function getAge() {
        echo $this->age . "<br>";
    }
}

$wangwangdui = new Dog("小七", 3);
$wangwangdui->getName();
$wangwangdui->getAge();


echo "-----------------" . "<br>";
/*
 * step3 类的继承
 */
class tuDog extends Dog {
    var $color;
    function setColor($par) {
        $this->color = $par;
    }
    function getColor() {
        echo $this->color . "<br>";
    }
    function setName($par) {
        $this->name = $par;
    }
    // 方法重写
    function getName() {
        echo "我的名字叫做:" . $this->name . "<br>";
    }
}

$newDog = new tuDog("小七", 3);
$newDog->getName();
$newDog->setColor("yellow");
$newDog->setName("土狗");
$newDog->getName();
$newDog->getAge();
$newDog->getColor();

echo "-----------------" . "<br>";
/*
 * step4 访问控制
 * PHP 对属性或方法的访问控制，是通过在前面添加关键字 public（公有），protected（受保护）或 private（私有）来实现的。
 * public（公有）：公有的类成员可以在任何地方被访问。
 * protected（受保护）：受保护的类成员则可以被其自身以及其子类和父类访问。
 * private（私有）：私有的类成员则只能被其定义所在的类访问。
 */
class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public . "<br>";
        echo $this->protected . "<br>";
        echo $this->private . "<br>";
    }
}

$obj = new MyClass();
echo $obj->public . "<br>"; // 这行能被正常执行
// echo $obj->protected; // 这行会产生一个致命错误
// echo $obj->private; // 这行也会产生一个致命错误
$obj->printHello(); // 输出 Public、Protected 和 Private

class MyClass2 extends MyClass
{
    // 可以对 public 和 protected 进行重定义，但 private 而不能
    protected $protected = 'Protected2';

    function printHello()
    {
        echo $this->public . "<br>";
        echo $this->protected . "<br>";
        //    echo $this->private . "<br>";
    }
}

$obj2 = new MyClass2();
echo $obj2->public . "<br>"; // 这行能被正常执行
// echo $obj2->private; // 未定义 private
// echo $obj2->protected; // 这行会产生一个致命错误
$obj2->printHello(); // 输出 Public、Protected2 和 Undefined
echo "-----------------" . "<br>";
/*
 * step5 接口
 * 使用接口（interface），可以指定某个类必须实现哪些方法，但不需要定义这些方法的具体内容。
 * 接口是通过 interface 关键字来定义的，就像定义一个标准的类一样，但其中定义所有的方法都是空的。
 * 接口中定义的所有方法都必须是公有，这是接口的特性。
 * 要实现一个接口，使用 implements 操作符。类中必须实现接口中定义的所有方法，否则会报一个致命错误。
 * 类可以实现多个接口，用逗号来分隔多个接口的名称。
 */
// 声明一个iTemplate接口
interface iTemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
}

// 实现接口
class Template implements iTemplate
{
    private $vars = array();

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }

    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }

        return $template;
    }
}

// 实例化 Template 类并应用
$template = new Template();
$template->setVariable('title', 'Example Template');
$template->setVariable('content', 'This is the content of the template.');
$template->setVariable('footer', '© 2024 didiglobal Company');

$htmlTemplate = '<html>
<head><title>{title}</title></head>
<body>
<h1>{title}</h1>
<p>{content}</p>
<footer>{footer}</footer>
</body>
</html>';

echo $template->getHtml($htmlTemplate);


