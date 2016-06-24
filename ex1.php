<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
     <title>연습모음</title>
     <style type="text/css">
     ul {
        background-color: #F9F249;
    }
    #div1 {
        background-color: #F9F249;
        padding: 10px;
    }
</style>
</head>
<body>
    <div id="div1">

  <ul id="list">
      <li>empty</li>
      <li>empty</li>
      <li>empty</li>
  </ul>
  </div>
  <input id="execute_btn" type="button" value="execute" />
  <script type="text/javascript">
   $('#execute_btn').click(function(){
      $('#list li').text('coding everybody');
    });
  </script>
<hr><hr/>
  <?php
  //데이터처리를 위한 myqyl monitor호출명령어  C:\Bitnami\wampstack-5.6.22-0\mysql\bin  mysql -hlocalhost -uroot -p
  $conn = mysqli_connect("localhost", "root", aaa5048);
  mysqli_select_db($conn, "everyenglish");
  $result = mysqli_query($conn, "SELECT * FROM ex2");
  $row = mysqli_fetch_assoc($result);
  $v=$row['description']."<br/>";

  echo $v;
  $a= " ".$v;
  $k = " "; //문장의 빈칸을 이용하여 쪼개라 explode("",$a)형태로 마찬가지 반대는 implode
  $b = split($k,$a);
  for($i=1;$i< sizeof($b);$i++){
  echo $i." ".$b[$i]."<br/>";}
  ?>
</body>
</html>
