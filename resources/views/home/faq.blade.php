<section id="faq">
    <div class="container spacer-double-sm">
        <!--Row-->
        <div class="row aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
            <div class="col">
                <div class="mb-5 pb-5 text-center"> <span class="icon-title icon-bg-dark rounded-circle mb-3">
                        <img class="icon-title-inner" src="//raker.kemendag.go.id/assets/svg/comment.svg" alt=""
                            style="width: 110px; height: 110px;">
                    </span>
                    <h2 class="h1">Pertanyaan yang sering muncul</h2>
                    <p class="w-md-60 mx-auto mb-0 lead">Berikut pertanyaan yang sering muncul di Rapat Kerja
                        Kementerian Perdagangan.</p>
                </div>
            </div>
        </div>
        <!--End row-->
        <!--Row-->
        <div class="faq-section">
            <div class="faq-list">
                <div class="faq">
                    <div class="ques">
                        <h1>Pertanyaan 1</h1>
                        <i class="fa-solid fa-arrow-down" style="color: black;"></i>
                    </div>
                    <div class="ans">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos laborum corporis minus rem
                            accusantium. Tempore voluptatum cupiditate itaque nisi ullam neque numquam delectus
                            maxime
                            natus, ducimus nam et reprehenderit minus.
                        </p>
                    </div>
                </div>

                <div class="faq">
                    <div class="ques">
                        <h1>Pertanyaan 2</h1>
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <div class="ans">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos laborum corporis minus rem
                            accusantium. Tempore voluptatum cupiditate itaque nisi ullam neque numquam delectus
                            maxime
                            natus, ducimus nam et reprehenderit minus.</p>
                    </div>
                </div>

                <div class="faq">
                    <div class="ques">
                        <h1>Pertanyaan 3</h1>
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <div class="ans">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos laborum corporis minus rem
                            accusantium. Tempore voluptatum cupiditate itaque nisi ullam neque numquam delectus
                            maxime
                            natus, ducimus nam et reprehenderit minus.</p>
                    </div>
                </div>

                <div class="faq">
                    <div class="ques">
                        <h1>Pertanyaan 4</h1>
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <div class="ans">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos laborum corporis minus rem
                            accusantium. Tempore voluptatum cupiditate itaque nisi ullam neque numquam delectus
                            maxime
                            natus, ducimus nam et reprehenderit minus.
                        </p>
                    </div>
                </div>

                <div class="faq">
                    <div class="ques">
                        <h1>Pertanyaan 5</h1>
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <div class="ans">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos laborum corporis minus rem
                            accusantium. Tempore voluptatum cupiditate itaque nisi ullam neque numquam delectus
                            maxime
                            natus, ducimus nam et reprehenderit minus.</p>
                    </div>
                </div>

                <div class="faq">
                    <div class="ques">
                        <h1>Pertanyaan 6</h1>
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <div class="ans">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos laborum corporis minus rem
                            accusantium. Tempore voluptatum cupiditate itaque nisi ullam neque numquam delectus
                            maxime
                            natus, ducimus nam et reprehenderit minus.
                        </p>
                    </div>
                </div>
            </div>
        </div>
{{-- 
        <form action="{{ route('komentar.store') }}" method="POST">
            @csrf
            <div>
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div>
                <label for="komentar">Komentar:</label>
                <textarea id="komentar" name="komentar" required></textarea>
            </div>
            <button type="submit">Kirim Komentar</button>
        </form> --}}

        <div class="container mt-5">
            <h2 class="text-center mb-4">Masukan Komentar</h2>
            <div class="row justify-content-center">
              <div class="col-md-6">
                <form class="bg-light p-4 rounded shadow-sm" style="background-color: #f8f9fa;">
                  <div class="form-group mb-3">
                    <label for="nameInput">Nama</label>
                    <input type="text" style="background-color: #f2f2f2" class="form-control" id="nameInput" aria-describedby="nameHelp" placeholder="Masukkan nama">
                  </div>
                  <div class="form-group mb-4">
                    <label for="commentInput">Komentar</label>
                    <textarea style="background-color: #f2f2f2" class="form-control" id="commentInput" placeholder="Masukkan komentar" rows="5"></textarea>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block" style="background-color: #1F54C5; border-radius: 10px; width: 100%;">Kirim</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          
          
          
          
          
        <!--End row-->
    </div>
</section>