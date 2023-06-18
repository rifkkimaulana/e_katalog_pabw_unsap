<div id="templatemo_bottom">
  <span class="bf bft"></span>
  <span class="bf bfb"></span>

  <div class="col col_3">
    <?php
    include 'koneksi.php';

    $query = "SELECT * FROM tb_social";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
      echo "<div class='col col_3'>";
      echo "<h4>Social</h4>";
      echo "<ul class='nobullet social'>";

      while ($row = mysqli_fetch_assoc($result)) {
        $link = $row['link'];
        $namaSosmed = $row['nama_sosmed'];

        echo "<li><a href='$link' class='$namaSosmed'>$namaSosmed</a></li>";
      }

      echo "</ul>";
      echo "</div>";
    } else {
      echo "Data tidak ditemukan.";
    }

    mysqli_close($koneksi);
    ?>
  </div>

  <div class="col col_3">
    <?php
    include 'koneksi.php';

    $query = "SELECT * FROM tb_twitter";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $aboutTitle = $row['judul'];
      $aboutContent = $row['isi'];
      echo "<div id='tb_about'>";
      echo "<h4>" . $aboutTitle . "</h4>";
      echo $aboutContent;
      echo "</div>";
    } else {
      echo "Data tidak ditemukan.";
    }

    mysqli_close($koneksi);
    ?>
  </div>

  <?php
  include 'koneksi.php';

  $query = "SELECT * FROM tb_about";
  $result = mysqli_query($koneksi, $query);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $aboutTitle = $row['judul'];
    $aboutContent = $row['isi'];
    echo "<div id='tb_about'>";
    echo "<h4>" . $aboutTitle . "</h4>";
    echo $aboutContent;
    echo "</div>";
  } else {
    echo "Data tidak ditemukan.";
  }

  mysqli_close($koneksi);
  ?>

  <div class="clear"></div>
</div>
<div id="templatemo_footer">
  Copyright © 2023 rifkkimaulana | a22100111
</div>