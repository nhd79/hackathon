<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="styles.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script> -->
    <script src="checkScript.js"></script>
    <title>Document</title>
  </head>
  <body>
    <div class="container-fluid">
      <div
        class="row align-items-center text-center"
        style="background-color: #3b53f6; height: 50px; color: white"
      >
        <div class="col-2">Logo</div>
        <div class="col-2">
          <a href="#" class="nav-link nav-custom">Tiến độ học tập</a>
        </div>
        <div class="col-2">
          <a href="#" class="nav-link nav-custom">Kahoot + Video</a>
        </div>
        <div class="col-3"></div>
        <div class="col-2" style="width: 150px">
          <a href="#" class="nav-link nav-custom">Đăng ký</a>
        </div>
        <div class="col-2" style="width: 150px">
          <a href="#" class="nav-link nav-custom">Đăng nhập</a>
        </div>
      </div>
    </div>

    <div class="container pt-5">
      <div class="row">
        <div class="col-1"></div>
        <div class="col">
          <div class="card">
            <div class="card-header fs-4 fw-bold text-center">
              Lớp IT001.I11
            </div>
            <div class="card-body">
              <h5 class="card-title text-center">Nhập môn lập trình</h5>
              <div class="progress">
                <div
                  class="progress-bar progress-bar-striped progress-bar-animated"
                  role="progressbar"
                  aria-valuenow="0"
                  aria-valuemin="0"
                  aria-valuemax="100"
                  style="
                    width: 0%;
                    background-color: limegreen;
                    border-radius: 100vh;
                  "
                  id="progress-bar"
                ></div>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <input
                    type="checkbox"
                    onclick="updateProgress()"
                    class="mx-2"
                  /><b>Buổi 1:</b>
                  Giới thiệu
                </li>
                <li class="list-group-item">
                  <input
                    type="checkbox"
                    onclick="updateProgress()"
                    class="mx-2"
                  /><b>Buổi 2:</b>
                  Các kiểu dữ liệu
                </li>
                <li class="list-group-item">
                  <input
                    type="checkbox"
                    onclick="updateProgress()"
                    class="mx-2"
                  /><b>Buổi 3:</b>
                  Toán Tử
                </li>
                <li class="list-group-item">
                  <input
                    type="checkbox"
                    onclick="updateProgress()"
                    class="mx-2"
                  /><b>Buổi 4:</b>
                  Input, output
                </li>
                <li class="list-group-item">
                  <input
                    type="checkbox"
                    onclick="updateProgress()"
                    class="mx-2"
                  /><b>Buổi 5:</b>
                  Biến
                </li>
                <li class="list-group-item">
                  <input
                    type="checkbox"
                    onclick="updateProgress()"
                    class="mx-2"
                  /><b>Buổi 6:</b>
                  Hàm
                </li>
              </ul>
            </div>
            <div class="card-footer text-muted text-center">
              Ngày bắt đầu: 20/4/2021
            </div>
          </div>
        </div>
        <div class="col-1"></div>
      </div>
    </div>
  </body>
</html>