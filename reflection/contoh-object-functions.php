<?php
include_once "Twitter.php";

$twNagita	= new Twitter("Nagita", "Pria sejati datang menemui orang tua gadis pujannya bukan mengajak si gadis ke tempat sepi");

echo "Class dari \$twNagita adalah : " .get_class($twNagita) . "<br>";
echo "Methods dari \$twnagita adalah : <br>"; 
print_r(get_class_methods($twNagita));
echo "<br>";
echo "Parent class dari \$twnagita :" .get_parent_class($twNagita)."<br>";

?>