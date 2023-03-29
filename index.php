<?php
class Access
{
    public $name = "faiz";
    protected $age = "26";
    private $dept = "cse";
    public function get_dept()
    {
        return $this->dept;
    }
}
class Childaccess extends Access
{
    public function get_age()
    {
        return $this->age;
    }
}
$access = new Access();
$childaccess = new Childaccess();
echo $access->name;
echo "\n";  
echo $childaccess->get_age();
echo "\n";
echo $access->get_dept();
?>
