<?
include_once "inc/connect.php";

$writer = "";
if(isset($_POST['writer'])) $writer = $_POST['writer'];

$content = "";
if(isset($_POST['content'])) $content = $_POST['content'];

$email = "";
if(isset($_POST['email'])) $email = $_POST['email'];

$wdate = date("Y-m-d H:i:s");

// insert/update/select/delete
/* $title = "테스트 입니다.";
$content = "잘 작성 되나요 :)";
$writer = "정우재";
$email = "Wooz@jungwj.com";
$wdate = "2018-11-16 11:18:33"; */

$sql = " insert into guestbook set ";
$sql.= " content = '".$content."', ";
$sql.= " writer = '".$writer."', ";
$sql.= " email = '".$email."', ";
$sql.= " wdate = '".$wdate."' ";
mysqli_query($connect, $sql); 
?>
<script>
    location.href = "gbook.php"
</script>
