<!DOCTYPE html>
<html lang="en-US">

<head>
  <?php
  $conn = mysqli_connect("localhost", "root", "", "abc");

  ?>

  <?php
  $query = "SELECT category_name, COUNT(*) as quantity FROM sanpham INNER JOIN danhmuc ON sanpham.category_id = danhmuc.category_id GROUP BY danhmuc.category_id";
  $result = mysqli_query($conn, $query);

  ?>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {
      packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Danh Mục', 'Số Lượng'],

        <?php
        while ($chart = mysqli_fetch_assoc($result)) {
          echo "['" . $chart['category_name'] . "'," . $chart['quantity'] . "],";
        }
        ?>
      ]);

      var options = {

        is3D: true,
      };
      var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
      chart.draw(data, options);
    }
  </script>
</head>

<body>
  <h1>Biểu đồ</h1>
  <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
</body>

</html>
