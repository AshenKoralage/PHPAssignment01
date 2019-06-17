<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ashen Koralage
 * Date: 6/17/2019
 * Time: 10:25 AM
 */
?>

<?php
$cid = $_POST['cid'];
$name = $_POST['name'];
$tel = $_POST['tel'];
$salary = $_POST['sal'];

class Customer
{
    private $cid;
    private $name;
    private $tel;
    private $salary;


    /**
     * Customer constructor.
     * @param $cid
     * @param $name
     * @param $tel
     * @param $salary
     */
    public function __construct($cid, $name, $tel, $salary)
    {
        $this->cid = $cid;
        $this->name = $name;
        $this->tel = $tel;
        $this->salary = $salary;
    }

    /**
     * @return mixed
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * @param mixed $cid
     */
    public function setCid($cid)
    {
        $this->cid = $cid;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }


}

$customer = new Customer($cid, $name, $tel, $salary);
Customer_ID: echo $customer->getCid(); echo"<br>";
Customer_Name:echo $customer->getName();echo"<br>";
Telephone_Number:echo $customer->getTel();echo"<br>";
Salary:echo $customer->getSalary();
?>