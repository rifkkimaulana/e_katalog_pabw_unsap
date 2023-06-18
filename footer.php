<div id="templatemo_bottom">
  <span class="bf bft"></span>
  <span class="bf bfb"></span>

  <div class="col col_3">
    <?php
    // Menghubungkan ke file koneksi.php
    include 'koneksi.php';

    // Query untuk mengambil data dari tabel tb_social
    $query = "SELECT * FROM tb_social";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
      // Mengisi elemen col col_3 dengan data dari tabel tb_social
      echo "<div class='col col_3'>";
      echo "<h4>Social</h4>";
      echo "<ul class='nobullet social'>";

      while ($row = mysqli_fetch_assoc($result)) {
        $icon = $row['icon'];
        $namaSosmed = $row['nama_sosmed'];

        echo "<li><a href='#' class='$icon'>$namaSosmed</a></li>";
      }

      echo "</ul>";
      echo "</div>";
    } else {
      echo "Data tidak ditemukan.";
    }

    // Menutup koneksi database
    mysqli_close($koneksi);
    ?>
  </div>

  <div class="col col_3">
    <?php
    include 'koneksi.php';

    $query = "SELECT * FROM tb_twitter WHERE id = 1";
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

  $query = "SELECT * FROM tb_about WHERE id = 1";
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
  Copyright © 2023 E-Katalog
</div> <!-- END of footer -->