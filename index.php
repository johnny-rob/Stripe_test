<?php
/*
echo 'Hello world, <br />it\'s a lovely day<br />';


$name = 'Jonathan';
$age = 35;

echo 'My name is '.$name.' and I am '.$age.' years old<br />';
echo "My name is $name and I am $age years old";
*/

/*
$password = 'Alex';

if ($password=='Alex') {
  echo 'this is the correct password';
}
else {
  echo 'This is the wrong password!';
}
*/

//=========if else=============
/*$age = 16;

if ($age>=21) {
  echo 'You can drink!';
} elseif ($age>=18){
  echo 'You can drink in the UK but not US';
} else {
  echo 'You cannot drink yet!';
}
*/

//============Math=============
/*$num1 = 10;
$num2 = 2;

$result = ($num1 + $num2) / 2;

echo $result;

$num3 = 1;
$num3 --;

echo $num3;
*/

//=========Comparision Operators========
/*$name = "Alex";
$age = 21;
$status = false;

if ($name != "Alex") {
  echo 'OK.';
} else {
  echo 'Not OK!';
}

if ($age > 21) {
  $status = true;
}

if ($status == true) {
  echo 'You\'re allowed.';
} else if ($status==false){
  echo 'You\'re not allowed';
}
*/

/*Logical Operators
|| - OR Operators
&& - AND Operators
! - NOT Operators
*/
// $num = 500;
//
// if($num>=1 && $num<=100){
//   echo 'Number is fine';
// } else {
//   echo 'Number is not between 1 and 100, inclusive';
// }


//=============Switch Operator============
// $num = 'nine';
//
// switch ($num) {
//   case 'ten';
//     $num = 10;
//   break;
//
//   case 'nine';
//     $num = 9;
//   break;
//
//   case 'eight';
//     $num = 8;
//   break;
//
//   default;
//     echo 'This number is not found';
// }
//
// echo $num;

//switch with names

// $name = 'JP';
//
// switch ($name) {
//   case 'Alex':
//   case 'Billy':
//   case 'Tom':
//     echo 'Hello there!';
//   break;
//
//   default:
//     echo 'Go away.';
//   break;
// }

//=============ARRAYS=============
//array ['Item1 =set equal to> a value,repeat']
//$names = array('Josh'=>21,'Billy'=>40,'Sam'=>16);
//another way to list is:
//$names['Jonathan']=35;
//show what is in the array:
//print_r ($names);
//because you assigned a value to the name, this will print the value of Josh.
//echo $names['Josh'];
//to print just the name, remove the assigned value and input: echo $names[number of value to produce beginning with 0]

//Multi-dimensional ARRAYS
/*$names = array(
  'Josh'=>array('Age'=>21, 'Hair'=>'Blond', 'Food'=>array('Pizza','Pasta')),
  'Billy'=>40,
  'Sam'=>16);

echo $names['Josh']['Food'][0];*/

//=========WHILE LOOP=============
/*$num = 100;

while ($num>=0){
  echo $num.'<br>';
  $num--;
}*/

//===========DO WHILE LOOP=============
/*$num = 1;

do {
  echo $num.'<br>';
  $num++;
} while ($num<=10)*/

//FOR LOOP
/*for($num=1;$num<=10;$num++){
  echo 'This is the number '.$num.'<br>';
}*/

//===========FOREACH===============
/*$num=1;
$names = array('Alex','Billy','Dale');

foreach ($names as $value){
  echo 'Name ' .$num. ' is '.$value.'<br>';
  $num++;
}
//OR you can do the following
$names = array('Alex'=>21,'Billy'=>14,'Dale'=>84);

foreach ($names as $key =>$age) {
  echo $key. ' is '.$age.'<br>';
  $num++;
}
*/

//==========FUNCTIONS================
/*function name($name,$age){
  echo 'My name is '.$name. ' and I am '.$age.' years old.<br>';
}

name('Alex', 21);

function add($num1, $num2){
  $result = $num1 + $num2;
  return $result;
}

echo add(10,15);*/

/*$returnvalue = name('JP'); //putting $returnvalue drops the name into the variable $returnvalue so it must be called again to display
echo $returnvalue;*/

//======FUNCTIONS WITH UNDEFINED PARAMETERS===============
/*function add(){
  $total = 0;
  foreach(func_get_args() as $arg){
    $total += $arg; //Shorter way of saying: $total = $total + $arg;
    }
  return $total.'<br>';
}
echo add(12,15,2,5,3,532,643,53);//this function is useful for returning an undefined number of fields in a database; for eaxmple
//it would look like: echo user_data('firstname', 'lastname', 'address')

function append($initial) {
  $result = (func_get_arg(0));//displays the first value defined in append
  foreach (func_get_args() as $key=>$value){
    if($key >= 1){
      $result .=' '.$value;//for all other vales in value it appends with a space in front of, after $resuult
    }
  }
  return $result;
}
echo append('Jonathan','William','Pinney');*/

//=======FORMATTING NUMBERS===========
/*
$num = 25123.2140;

echo 'I have &dollar;', number_format($num,2);//adds formatting for large numbers(var, # of decimals to display)*/

//=======$_GET============
/*?>//note, you have to have the following HTML text OUTSIDE of the php area
<form action="index.php" method="GET">
  Name:<br><input type="text" name="name"><br>
  Age:<br><input type="text" name="age" size="5"><br><br>
  <input type = "submit" value="Submit">
</form>

<?php
$name = $_GET['name'];
$age = $_GET['age'];

if (isset($name) && isset($age)){
 if(!empty($name) && !empty($age)){
  echo 'My name is '.$name.' and I am '.$age.' years old';
  } else {
    echo 'Nothing entered';
  }
}*/

//==========POST==========
/*?> <!--Have to close out PHP again for the HTML to run properly-->
<form action="index.php" method="POST">
  Please enter your password:<br>
  <input type="password" name="password"><br>
  <input type="submit" value="Submit">
</form>

<?php
$password='password';

if (isset($_POST['password'])&& !empty($_POST['password'])) {
  $password_post = $_POST['password'];//passing it through
  if($password_post==$password){
    echo 'correct';
  } else {
    echo 'incorrect';
  }
}*/
//===========ARRAY'S PART I & II============

/*$GLOBALS['level'] = array(//adding the Global makes it a global array, now it's a 3 dimensional array
  1 => array(
    'name' => 'level 1',
    'desc' => 'this is the first level',
  ),
  2 => array(
    'name' => 'level 2',
    'desc' => 'You\'ve made it to level 2'
  ),
  3 => array(
    'name' => 'level 3',
    'desc' => 'the last level'
  )
);
$level[4] = array( //this adds another level outside of the original format
  'name' => 'level 4',
  'desc' => 'Another level'
);

function level_data ($level, $data) {
  if(array_key_exists($level, $GLOBALS['level'])===true){
    return $GLOBALS['level'][$level][$data];
  } else {
    return false;
  }
}

echo level_data(1, 'desc'); //returns identified part of the Array by running the above function.

echo '<pre>', print_r($GLOBALS, true), '</pre>'; //shows greater detail of the POST and GET involved in Array's
//echo '<pre>', print_r($GLOBALS['level'],true), '</pre>';  //allows you to see structure of array returned in page*/

//============COOKIES nom..nom..nom...===============d

/*$exp = time()+86400;//number of seconds in a day
$exp_unset = time()-86400; //unsetting a Cookie

//setcookie("name", "Alex",$exp);
//setcookie("age",35,$exp);

//setcookie('name','',$exp_unset); //unsetting the cookie

//echo $_COOKIE["name"]." is ". $_COOKIE["age"];
//print_r($_COOKIE);//displays the arrage of the cookie settings

if (isset($_COOKIE['name'])){
  echo 'Cookie is set';
} else {
  echo 'Cookie is not set';
}
*/

//=======RADIO BUTTONS=========
/*?><!--move the following HTML out of the PHP brackets-->
<form action="process.php" method="POST">
  <p>
    <input type="radio" name="language" value="PHP"/> PHP <br/>
    <input type="radio" name="language" value="C"/> C <br/>
    <input type="radio" name="language" value="Basic"/> Basic
  </p>
  <p><input type="submit" value="Submit" /></p>


</form>
<?php*/

//===CHECK BOXES======
/*?><!--again, HTML outside of PHP containers-->
<form action="process.php" method="POST" value="true">
  <p><input type="checkbox" name="agree" />I agree with the terms and conditions</p>
  <p><input type="submit" value="register"></p>
</form>

<?php*/

//==================Connecting to MYSQL server through MYSQLi==============
/*$db = new mysqli('localhost','root','root','Website');//connecting to the database (destination, username, password, database)

//echo '<pre>', print_r($db), '</pre>';

if ($db->connect_errno > 0){
  die('Problem connecting to the database. ' .$db->connect_error);
}

//echo 'Everything has worked.';

$sql = "UPDATE articles SET title = 'Another article' WHERE id = 7";//makes a change in the table to id 7

if (!$db->query($sql)){
  die($db->error);
}*/

/*$sql = "SELECT title, description, created, id FROM articles ORDER BY created DESC LIMIT 3";

if (!$result = $db->query($sql)){
  die($db->error);
}*/

// ==============Dealing with displaying entry's on the table=================
/*$db = new mysqli('localhost','root','root','Website');//connecting to the database (destination, username, password, database)
if ($db->connect_errno > 0){
  die('Problem connecting to the database. ' .$db->connect_error);
}
$results = array();
//$result = $result->fetch_object();//fetches the object once
//echo '<pre>',print_r($result),'</pre>';
//echo  $result->title;//retrieves a specific result*/

//================Looping through results=======================
/*$db = new mysqli('localhost','root','root','Website');//connecting to the database (destination, username, password, database)
if ($db->connect_errno > 0){
  die('Problem connecting to the database. ' .$db->connect_error);
}
while ($row = $result->fetch_object()){
  //echo $row->title, '<br>', $row->description, '<br><br>';//replace this with $results ARRAY above
  $results[] = $row;
}

//View or output below
$db = new mysqli('localhost','root','root','Website');//connecting to the database (destination, username, password, database)
if ($db->connect_errno > 0){
  die('Problem connecting to the database. ' .$db->connect_error);
}

if (count($results)){
  //print_r($results);
  //echo 'Output';
  foreach ($results as $result){//doing this separates the logic (above) from the display here
    echo $result->title, '<br>';
  }
} else {
  echo 'No results';
}*/

//====================Getting a count of results==================
/*$db = new mysqli('localhost','root','root','Website');//connecting to the database (destination, username, password, database)
if ($db->connect_errno > 0){
  die('Problem connecting to the database. ' .$db->connect_error);
}
$sql = "SELECT * FROM articles"; //can limit results with LIMIT

if (!$result = $db->query($sql)){
  die($db->error);
}
//echo '<pre>', print_r($result),'</pre>';
if ($num_rows = $result->num_rows){
  echo "There are ".$num_rows." results";
} else {
  echo "There are no results";
}*/

//========================Variables in Queries=====================
/*$db = new mysqli('localhost','root','root','Website');//connecting to the database (destination, username, password, database)

if ($db->connect_errno > 0){
  die('Problem connecting to the database. ' .$db->connect_error);
}

$limit = (isset($_GET['limit'])) ? (int)$_GET['limit']:10;

$sql = "SELECT title, description, created, id FROM articles ORDER BY created DESC LIMIT {$limit}";

echo $sql, '<br>';

if(!$result = $db->query($sql)) {//get used to having this in anytime you are pulling data from a table in sql
  die($db->error);
}

while($row = $result->fetch_object()) {
  echo $row->title, '<br>', $row->description, '<br><br>';
}*/

//=============MYSQL INJECTIONS===================
/*$db = new mysqli('localhost','root','root','Website_3');//connecting to the database (destination, username, password, database)

if ($db->connect_errno > 0){
  die('Problem connecting to the database. ' .$db->connect_error);
}

$username = $db->real_escape_string($_GET['username']);//adding this real_escape_string prevents from SQL injection
$password = $db->real_escape_string($_GET['password']);

$sql = "SELECT COUNT(*) AS count FROM users WHERE username = '{$username}' AND password = '{$password}'";

if(!$result = $db->query($sql)){
  die('Problem with your string');
}

if($result->fetch_object()->count){
  echo "You are in";
} else {
  echo "Incorrect details";
}*/

//==================PREPARED STATEMENTS (PREVENTING MYSQL INJECTIONS)========================
/*$db = new mysqli('localhost','root','root','Website_3');//connecting to the database (destination, username, password, database)

if ($db->connect_errno > 0){
  die('Problem connecting to the database. ' .$db->connect_error);
}

$username = "ashley";//bindging value
$password = "shed";
$bio = "Hello there, I'm Ashley.";

$statement = $db->prepare("INSERT INTO users (username, password, bio)
  VALUES (?,?,?)");//what binding values are being bound to

IF($statement){
  $statement->bind_param('sss', $username, $password, $bio);//binding values together. 'S' identifies the placement of what is being bound in the above string
  $statement->execute();

  echo "Record Inserted";
}*/

//====================DATABASE WRAPPER==========================
require_once('class/DB.php');

DB::instance()->query("SELECT * FROM users"->result)//this is the 'static method' of accessing your database
//see file in folder: wrapper
?>
