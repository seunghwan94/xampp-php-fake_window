
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Website</title>
    <!-- 부트스트랩 CSS -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- 부트스트랩 JavaScript -->
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/test.js"></script>
</head>
<style>
    .btn-group .dropdown-toggle::after {
      display: none;
    }
    .input-with-icon {
      position: relative;
      width: 100%;
    }

    .input-with-icon input {
      width: 90%;
      padding-left: 40px; /* Adjust padding to make space for the icon */
    }

    .input-with-icon img {
      position: absolute;
      left: 15px;
      top: 50%;
      transform: translateY(-50%);
      width: 20px;
      pointer-events: none; /* Ensure the image doesn't interfere with input focus */
    }
</style>
<body style="overflow: hidden;">
    <header>
      <!-- 첫번째 줄 -->
      <div class="gap-2" style="display:flex; justify-content:space-between; align-items:center;padding: 3px 10px;background:#aaaaaa;border-bottom: 2px solid #333;">
        <div>
          <img src="../../assets/img/trash.png" style="width:20px;"> 
          &nbsp Trash
        </div>
        <div>
          <button style=" background:lightgray"><img src="../../assets/img/minimize.png" style="width:10px;"></button>
          <button style=" background:lightgray"><img src="../../assets/img/maximizing.png" style="width:10px;"></button>
          <button style=" background:lightgray" type="button" class="close" data-dismiss="modal" aria-label="Close"><img src="../../assets/img/x.png" style="width:10px;"></button>
        </div> 
      </div>
      <!-- 두번째 줄 -->
      <div class="gap-2" style="display:flex; justify-content:flex-start; align-items:center;padding: 3px 10px;background:#aaaaaa;border-bottom: 2px solid #333;">
        <div style="width:145px;">
          <button type="button" class="btn btn-primary btn-sm p-1 m-0" style='background:#aaaaaa'><img src="../../assets/img/back.png" style="width:20px;"></button>
          <button type="button" class="btn btn-primary btn-sm p-1 m-0" style='background:#aaaaaa'><img src="../../assets/img/front.png" style="width:20px;"></button>
          <button type="button" class="btn btn-primary btn-sm p-1 m-0" style='background:#aaaaaa'><img src="../../assets/img/stop.png" style="width:20px;"></button>
          <button type="button" class="btn btn-primary btn-sm p-1 m-0" style='background:#aaaaaa'><img src="../../assets/img/reset.png" style="width:20px;"></button>
        </div>
        <div class="input-with-icon" style="width: 75%;display:flex;">
          <img src="../../assets/img/maximizing.png" alt="icon">
          <input class="form-control" id="readOnlyInput" type="text" placeholder="C:\" readonly="">
        </div>
      </div>
      <!-- 세번째 줄 -->
      <div class="gap-2" style="display:flex; justify-content:space-between; align-items:center;padding: 3px 10px; background:#aaaaaa;border-bottom: 2px solid #333;">
        <div>
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <div class="btn-group" role="group">
              <button type="button" class="btn dropdown-toggle p-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background:lightgray;">
                <h1 style="font-size:14px;margin:0px">파일(F)</h1>
              </button>
              <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" style="">
                <a class="dropdown-item" href="#">Dropdown link</a>
                <a class="dropdown-item" href="#">Dropdown link</a>
              </div>
            </div>
          </div>
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <div class="btn-group" role="group">
              <button type="button" class="btn dropdown-toggle p-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background:lightgray">
                <h1 style="font-size:14px;margin:0px">보기(V)</h1>
              </button>
              <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" style="">
                <a class="dropdown-item" href="#">Dropdown link</a>
                <a class="dropdown-item" href="#">Dropdown link</a>
              </div>
            </div>
          </div>
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <div class="btn-group" role="group">
              <button type="button" class="btn dropdown-toggle p-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background:lightgray">
                <h1 style="font-size:14px;margin:0px">도구(T)</h1>
              </button>
              <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" style="">
                <a class="dropdown-item" href="#">Dropdown link</a>
                <a class="dropdown-item" href="#">Dropdown link</a>
              </div>
            </div>
          </div>
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <div class="btn-group" role="group">
              <button type="button" class="btn dropdown-toggle p-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background:lightgray">
                <h1 style="font-size:14px;margin:0px">도움말(H)</h1>
              </button>
              <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" style="">
                <a class="dropdown-item" href="#">Dropdown link</a>
                <a class="dropdown-item" href="#">Dropdown link</a>
              </div>
            </div>
          </div>
        </div> 
      </div>