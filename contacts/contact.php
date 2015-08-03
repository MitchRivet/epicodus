<?php
class Contact
{
    public $name;
    public $phone;
    public $address;
    public $image_path;
}

$hendrix = new Contact();
$hendrix->name = "Jimi Hendrix";
$hendrix->phone = "51234324";
$hendrix->address = "123 fake street";
$hendrix->image_path = "hendrix.jpg";

$elvis = new Contact();
$elvis->name = "Elvis Presley";
$elvis->phone = "123412341234";
$elvis->address = "123 blah drive";

$address_book = array($hendrix, $elvis);

?>
<!DOCTYPE html>
<html>

<head>
  <title>Address Book</title>
</head>

<body>
    <div class="container">
        <h1>Address Book</h1>
        <ul>
            <?php
              foreach ($address_book as $contact) {
                echo "<li>";
                echo $contact->name;
                echo "<ul>";
                echo "<li> $contact->phone </li>";
                echo "<li> $contact->address </li>";
                echo "<li><img size='width=500px, length=500px' src='$contact->image_path'></li>";
                echo "</ul>";
                echo "</li>";
                }
              ?>
            </ul>
          </div>
</body>
</html>
