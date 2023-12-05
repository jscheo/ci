<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    로그인
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">로그인</h1>
    </div>
      <form action="/ci/index.php/auth/authentication" method="post">
      <div class="modal-body">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">아이디</label>
            <input type="text" class="form-control" id="id" name="email" aria-describedby="emailHelp" placeholder="email">
        </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">비밀번호</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="password">
            </div>
      </div>
      <div class="modal-footer">
        <input type="submit" value="로그인" class="btn btn-dark">
      </div>
      </form>
    </div>
  </div>
</div>