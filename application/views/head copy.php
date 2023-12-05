<!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8"/>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <script src="//cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
                <!-- Bootstrap -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
                <style>
                    body{
                        padding-top:60px;
                    }
                </style>
                
            </head>
            
            <body>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">JavaScript</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <?php
                          if($this->session->userdata('is_login')){
                          ?>
                            <li><a href="/ci/index.php/auth/logout">로그아웃</a></li>
                          <?php
                          }else {
                          ?>
                            <li><a href="/ci/index.php/auth/login">로그인</a></li>
                            <li><a href="/ci/index.php/auth/register">회원가입</a></li>

                          <?php
                          }
                          ?>
      </ul>
    </div>
  </div>
</nav>
                
                <?php
                if($this->config->item('is_dev')){
                ?>
                <div class="well col-12">
                    개발환경을 수정 중 입니다.
                </div>
                <?php
                }
                ?>
                <div class="container">
                    <div class="row">
                      