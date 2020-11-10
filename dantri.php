<?php
  require("app/Helpers/simple_html_dom.php");

  $html = file_get_html("https://dantri.com.vn/xa-hoi/giao-thong.htm");

  $news = $html->find("[class='news-item news-item--stream news-item--left2right']");
  //$div = $html->find("[class='dt-thumbnail dt-thumbnail--3x2']");

  foreach ($news as $new) {
      $a = $new->find("a", 0);
      $c = $new->find("a div", 0);
      $title = $a->attr["title"];
      $href = $a->href;
      $links = "https://dantri.com.vn".$href;

      //Get Images
      $b = $c->find("img", 0);
      $img= $b->src;
      $u = 'public/getnews/'.basename($img);
      file_put_contents($u, file_get_contents($img));
      $tenFile = basename($img);
      echo "<hr/>";

      $desc= $new->find("div.news-item__content a", 0);
      $time= $new->find("div.news-item__content div span", 0);
      echo "<hr/>";

      //hàm dùng để định dạng kiểu chữ có dấu dành cho các văn bản tiếng việt
      //$title = htmlentities($title, ENT_QUOTES, "UTF-8");
      //$desc = htmlentities($desc, ENT_QUOTES, "UTF-8");

      //hàm strval() dùng để hiển text (string) bên trong các thẻ html
      $title = strval($title);
      $desc = strval($desc);
      $time = strval($time);

      //Insert database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "giaothongcsdl1";

      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      // UTF8 Format
      mysqli_set_charset($conn, 'UTF8');
      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      $sql = "INSERT INTO news (id, name, description, contents, topics_id, date, picture, hot, views)
          VALUES (null, '$title', '$desc', '$links', null, '$time', '$tenFile', null, null)";

      if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

      mysqli_close($conn);
  }
