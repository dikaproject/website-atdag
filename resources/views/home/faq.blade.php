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
                                <h1>Di mana lokasi penjemputan peserta acara?</h1>
                                <i class="fa-solid fa-arrow-down" style="color: black;"></i>
                            </div>
                            <div class="ans">
                                <p>Penjemputan peserta akan dilakukan di lobi titik point Airport Melbourne Tullamarine. Tim penjemput akan berada di lokasi sesuai jadwal yang sudah dimasukkan ke dalam form gmail, mohon segera update form gmail dan apabila ada kendala bisa hubungi panitia Rakornis.
                                </p>
                            </div>
                        </div>
        
                        <div class="faq">
                            <div class="ques">
                                <h1>Siapa yang bertanggung jawab untuk memberikan cap SPPD?
                                </h1>
                                <i class="fa-solid fa-plus"></i>
                            </div>
                            <div class="ans">
                                <p>Untuk proses cap SPPD, silakan menghubungi bagian administrasi acara. Anda bisa menemui petugas di meja registrasi pada saat acara berlangsung.
                                </p>
                            </div>
                        </div>
        
                        <div class="faq">
                            <div class="ques">
                                <h1>Bagaimana cara mendapatkan materi rakornis setelah acara berlangsung?</h1>
                                <i class="fa-solid fa-plus"></i>
                            </div>
                            <div class="ans">
                                <p>Materi rakornis dapat diunduh dari landing page rakornis.tanya-atdag.au  di bagian "Download" setelah acara selesai. Jadi jangan khawatir untuk ketersediaan materi rakornis
                                </p>
                            </div>
                        </div>
        
                        <div class="faq">
                            <div class="ques">
                                <h1>Apa password WIFI di hotel Grand Hyatt tempat acara berlangsung?
                                </h1>
                                <i class="fa-solid fa-plus"></i>
                            </div>
                            <div class="ans">
                                <p>Password WIFI untuk akses internet di hotel Grand Hyatt adalah "GrandHyatt2024". Harap hubungi petugas di meja resepsionis jika mengalami kesulitan saat mencoba mengakses jaringan WIFI.

                                </p>
                            </div>
                        </div>
        
                        <div class="faq">
                            <div class="ques">
                                <h1>Transportasi apa yang direkomendasikan untuk menuju lokasi rakor?
                                </h1>
                                <i class="fa-solid fa-plus"></i>
                            </div>
                            <div class="ans">
                                <p>Untuk menuju lokasi rakor, Anda dapat menggunakan free tram zone yang akan berhenti di sekitar hotel. Setelah itu tinggal ikuti saja rute yang telah disediakan free tram zone</p>
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

        <style>
            .card {
                border: none;
                box-shadow: 5px 6px 6px 2px #e9ecef;
                border-radius: 4px;
                font-size: 1.2em; /* Increase the size of the card content */
                margin-bottom: 20px; /* Add more space between cards */
            }
    
            .dots {
                height: 4px;
                width: 4px;
                margin-bottom: 2px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
            }
    
            .badge {
                padding: 7px;
                padding-right: 9px;
                padding-left: 16px;
                box-shadow: 5px 6px 6px 2px #e9ecef;
            }
    
            .user-img {
                margin-top: 4px;
                margin-right: 20px; /* Adjust the margin to create more space */
            }
    
            .user-name {
                margin-left: 20px; /* Adjust to increase space between image and text */
            }
    
            .check-icon {
                font-size: 17px;
                color: #c3bfbf;
                top: 1px;
                position: relative;
                margin-left: 3px;
            }
    
            .form-check-input {
                margin-top: 6px;
                margin-left: -24px !important;
                cursor: pointer;
            }
    
            .form-check-input:focus {
                box-shadow: none;
            }
    
            .icons i {
                margin-left: 8px;
            }
    
            .reply {
                margin-left: 12px;
            }
    
            .reply small {
                color: #b7b4b4;
            }
    
            .reply small:hover {
                color: green;
                cursor: pointer;
            }
    
            .headings h5 {
                font-size: 1.5em; /* Adjust the heading size */
            }
    
            .card.hidden {
                display: none;
            }
        </style>

<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="headings d-flex justify-content-between align-items-center mb-3">
                <h5>Comments</h5>
                <div class="buttons">
                    <span class="badge bg-white d-flex flex-row align-items-center">
                        <span class="text-primary">Comments "ON"</span>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                        </div>
                    </span>
                </div>
            </div>

            <div class="card p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="user d-flex flex-row align-items-center">
                        <img src="{{asset('assets/images/icon-profile.jpg')}}" width="30" class="user-img rounded-circle">
                        <span class="user-name"><small class="font-weight-bold text-primary">james_olesenn</small> <small class="font-weight-bold">Hmm, This poster looks cool</small></span>
                    </div>
                    <small>2 days ago</small>
                </div>
                <div class="action d-flex justify-content-between mt-2 align-items-center">
                    <div class="reply px-4">
                        <small>Remove</small>
                        <span class="dots"></span>
                        <small>Reply</small>
                        <span class="dots"></span>
                        <small>Translate</small>
                    </div>
                    <div class="icons align-items-center">
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-check-circle-o check-icon"></i>
                    </div>
                </div>
            </div>

            <div class="card p-3 mt-2">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="user d-flex flex-row align-items-center">
                        <img src="https://i.imgur.com/C4egmYM.jpg" width="30" class="user-img rounded-circle">
                        <span class="user-name"><small class="font-weight-bold text-primary">olan_sams</small> <small class="font-weight-bold">Loving your work and profile!</small></span>
                    </div>
                    <small>3 days ago</small>
                </div>
                <div class="action d-flex justify-content-between mt-2 align-items-center">
                    <div class="reply px-4">
                        <small>Remove</small>
                        <span class="dots"></span>
                        <small>Reply</small>
                        <span class="dots"></span>
                        <small>Translate</small>
                    </div>
                    <div class="icons align-items-center">
                        <i class="fa fa-check-circle-o check-icon text-primary"></i>
                    </div>
                </div>
            </div>

            <div class="card p-3 mt-2">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="user d-flex flex-row align-items-center">
                        <img src="https://i.imgur.com/0LKZQYM.jpg" width="30" class="user-img rounded-circle">
                        <span class="user-name"><small class="font-weight-bold text-primary">rashida_jones</small> <small class="font-weight-bold">Really cool Which filter are you using?</small></span>
                    </div>
                    <small>3 days ago</small>
                </div>
                <div class="action d-flex justify-content-between mt-2 align-items-center">
                    <div class="reply px-4">
                        <small>Remove</small>
                        <span class="dots"></span>
                        <small>Reply</small>
                        <span class="dots"></span>
                        <small>Translate</small>
                    </div>
                    <div class="icons align-items-center">
                        <i class="fa fa-user-plus text-muted"></i>
                        <i class="fa fa-star-o text-muted"></i>
                        <i class="fa fa-check-circle-o check-icon text-primary"></i>
                    </div>
                </div>
            </div>

            <div class="card p-3 mt-2 hidden">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="user d-flex flex-row align-items-center">
                        <img src="https://i.imgur.com/ZSkeqnd.jpg" width="30" class="user-img rounded-circle">
                        <span class="user-name"><small class="font-weight-bold text-primary">simona_rnasi</small> <small class="font-weight-bold text-primary">@macky_lones</small> <small class="font-weight-bold text-primary">@rashida_jones</small> <small class="font-weight-bold">Thanks</small></span>
                    </div>
                    <small>3 days ago</small>
                </div>
                <div class="action d-flex justify-content-between mt-2 align-items-center">
                    <div class="reply px-4">
                        <small>Remove</small>
                        <span class="dots"></span>
                        <small>Reply</small>
                        <span class="dots"></span>
                        <small>Translate</small>
                    </div>
                    <div class="icons align-items-center">
                        <i class="fa fa-check-circle-o check-icon text-primary"></i>
                    </div>
                </div>
            </div>

            <!-- Add more comments here and make them hidden by default if needed -->
        </div>
    </div>
</div>









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
<script>
      document.addEventListener('DOMContentLoaded', function() {
            const commentCards = document.querySelectorAll('.card');
            const switchInput = document.getElementById('flexSwitchCheckChecked');

            function updateComments() {
                if (switchInput.checked) {
                    commentCards.forEach(card => card.classList.remove('hidden'));
                } else {
                    commentCards.forEach((card, index) => {
                        if (index <= 3) {
                            card.classList.remove('hidden');
                        } else {
                            card.classList.add('hidden');
                        }
                    });
                }
            }

            switchInput.addEventListener('change', updateComments);

            // Initialize with only 3 comments visible
            updateComments();
        })
</script>