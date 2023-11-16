<div class="modal fade book-a-table" id="TambahPosts" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Mahasiswa</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="php-email-form">
            @csrf

            <div class="modal-body">
              <div class="form-group">
                <label for="image">Profil</label>
                <input type="file" name="image" id="image" class="form-control" >
              </div>
              <div class="form-group">
                <label for="title1">Nim</label>
                <input type="text" name="title1" id="title1" class="form-control"  >
              </div>
              <div class="form-group">
                <label for="title">Nama</label>
                <input type="text" name="title" id="title" class="form-control"  >
              </div>
              <div class="form-group">
                <label for="content">Progam Study</label>
                <input type="text" name="content" id="content" class="form-control" >
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>

          </form>

        </div>
      </div>
    </div>