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
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="scripts.js"></script>
    <title>Document</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-custom">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="index.html">Team 31</a>
        <button
          class="navbar-toggler navbar-light"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
          style="color: #3b53f6"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link active nav-custom ms-5"
                aria-current="page"
                href="index.html"
                >Tiến độ học tập</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link nav-custom ms-5" href="kahoot.html">Kahoot</a>
            </li>
            <li class="nav-item">
              <form
                action=""
                class="form-inline d-flex ms-5"
                id="searchform"
                name="searchform"
                action="index.html"
              >
                <input
                  class="form-control"
                  name="searchClass"
                  id="searchClass"
                  type="text"
                  placeholder="Tìm kiếm lớp học"
                  value=""
                  size="30"
                />
                <button
                  class="btn btn-light ms-3"
                  type="submit"
                  style="color: #3b53f6"
                >
                  <i class="fas fa-search"></i>
                </button>
              </form>
            </li>
          </ul>
          <a class="nav-link nav-custom me-5" href="signUp.html">Đăng ký</a>
          <a class="nav-link nav-custom me-5" href="login.html">Đăng nhập</a>
        </div>
      </div>
    </nav>

    <div class="container pt-5" style="padding-bottom: 80px">
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
                <li class="list-group-item">
                  <input
                    type="checkbox"
                    onclick="updateProgress()"
                    class="mx-2"
                  /><b>Buổi 7:</b>
                  Điều kiện
                </li>
                <li class="list-group-item">
                  <input
                    type="checkbox"
                    onclick="updateProgress()"
                    class="mx-2"
                  /><b>Buổi 8:</b>
                  Vòng lặp
                </li>
                <li class="list-group-item">
                  <input
                    type="checkbox"
                    onclick="updateProgress()"
                    class="mx-2"
                  /><b>Buổi 9:</b>
                  Mảng
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
    <a
      href="index-teacher.html"
      style="position: relative; left: 90vw; bottom: 30vw"
    >
      <i
        class="fa fa-arrow-right"
        aria-hidden="true"
        data-toggle="tooltip"
        data-placement="bottom"
        title="Chuyển trang thêm lớp học"
        style="
          padding: 10px;
          border: 2px solid #3b53f6;
          border-radius: 100vh;
          color: #3b53f6;
        "
      ></i
    ></a>
    <div
      class="container-fluid py-3 text-center position-fixed"
      style="bottom: 0; width: 100%; background-color: #3b53f6"
    >
      <div class="row">
        <div class="col-12"><span class="text-white">@ Team 31</span></div>
      </div>
    </div>
  </body>
</html>
