                    <div class="row">
	                    <div class="col-md-9">
	                        <div class="card">
							    <form method="post" action="<?= base_url('pretest/jawab'); ?>">
		                            <div class="card-header">
									    <h4 class="card-title">
											Pertanyaan <span id="soal"><?= $soal['no']; ?></span>
										</h4>
									</div>
		                            <div class="card-content">
	                                    <div class="form-group">
                                            <?php if ($soal['gambar_pertanyaan']){ ?>
                                            <div class="photo">
                                                <img src="<?= base_url(); ?>assets/img/soal/<?= $soal['gambar_pertanyaan']; ?>" />
                                            </div>
                                            </br>
                                            <?php } ?>
                                            <span id="pertanyaan"><?= $soal['pertanyaan']; ?></span>
                                        </div>
                                        <label>Pilihan Jawaban</label>
                                            <p>
                                                <span id="pertanyaan">A. <?= $soal['pilihan_a']; ?></span>
                                                <?php if ($soal['gambar_a']){ ?>
                                                        <div class="photo">
                                                            <img src="<?= base_url(); ?>assets/img/soal/<?= $soal['gambar_a']; ?>" />
                                                        </div>
                                                    <?php } ?>
                                            <p>
                                                <span id="pertanyaan">B. <?= $soal['pilihan_b']; ?></span>
                                                <?php if ($soal['gambar_b']){ ?>
                                                    <div class="photo">
                                                        <img src="<?= base_url(); ?>assets/img/soal/<?= $soal['gambar_b']; ?>" />
                                                    </div>
                                                    <?php } ?>
                                            <p>
                                                <span id="pertanyaan">C. <?= $soal['pilihan_c']; ?></span>
                                                <?php if ($soal['gambar_c']){ ?>
                                                    <div class="photo">
                                                        <img src="<?= base_url(); ?>assets/img/soal/<?= $soal['gambar_c']; ?>" />
                                                    </div>
                                                    <?php } ?>
                                            <p>
                                                <span id="pertanyaan">D. <?= $soal['pilihan_d']; ?></span>
                                                <?php if ($soal['gambar_d']){ ?>
                                                    <div class="photo">
                                                        <img src="<?= base_url(); ?>assets/img/soal/<?= $soal['gambar_d']; ?>" />
                                                    </div>
                                                    <?php } ?>
                                            <p>
                                            <?php if ($soal['gambar_d']){ ?>
                                            <p>
                                            <?php } ?>
                                            <span id="pertanyaan">E. Tidak tahu</span>
                                            <div class="form-group text-left">
                                                <label>Jawab</label>
                                                <p>    
                                                <div class="btn-group-toggle text-left" data-toggle="buttons">
                                                    <label class="btn btn-info">
                                                            <input type="radio" name="options" id="option1" autocomplete="off" value="A" required>A
                                                        </label>
                                                    <label class="btn btn-info">
                                                            <input type="radio" name="options" id="option2" autocomplete="off" value="B" required>B
                                                        </label>
                                                    <label class="btn btn-info">
                                                            <input type="radio" name="options" id="option3" autocomplete="off" value="C" required>C
                                                        </label>
                                                    <label class="btn btn-info">
                                                            <input type="radio" name="options" id="option4" autocomplete="off" value="D" required>D
                                                        </label>
                                                    <label class="btn btn-info">
                                                            <input type="radio" name="options" id="option5" autocomplete="off" value="E" required>E
                                                        </label>
                                                </div>   
                                            </div>
                                            </br>
                                            <div class="form-group text-right">

                                                <!-- <button type="button" class="btn btn-wd btn-success btn-fill btn-move-left">
                                                    <span class="btn-label">
                                                        <i class="ti-angle-left"></i>
                                                    </span>
                                                    Back
                                                </button> -->

                                                <button type="submit" class="btn btn-wd btn-success btn-fill btn-move-right">
                                                    Next
                                                    <span class="btn-label">
                                                        <i class="ti-angle-right"></i>
                                                    </span>
                                                </button>
                                            </div>
                                    </div>
                                    <!-- Titip Data -->
                                    <input type="text" name="no" class="form-control hidden" value="<?= $soal['no']; ?>">
                                    <input type="text" name="id" class="form-control hidden" value="<?= $soal['id']; ?>">
                                    <input type="text" name="jawaban" class="form-control hidden" value="<?= $soal['jawaban']; ?>">
							    </form>
	                        </div> <!-- end card -->
	                    </div> <!--  end col-md-6  -->
	                    <div class="col-md-3">
	                        <div class="card">
								<form class="form-horizontal">
		                            <div class="card-header">
										<h4 class="card-title">
										</h4>
									</div>
		                            <div class="card-content">
										<div class="form-group">
		                                    <label class="col-md-9 control-label"><span id="durasi"></span></label>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-1 control-label"></label>
                                            <div class="col-md-10">
                                                <ul class="pagination">
                                                    <?php if ($soal['no']>=1){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">1</a>
                                                    </li>
                                                    <?php if ($soal['no']>=2){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">2</a>
                                                    </li>
                                                    <?php if ($soal['no']>=3){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">3</a>
                                                    </li>
                                                    <?php if ($soal['no']>=4){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">4</a>
                                                    </li>
                                                    <?php if ($soal['no']>=5){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">5</a>
                                                    </li>
                                                    <?php if ($soal['no']>=6){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">6</a>
                                                    </li>
                                                    <?php if ($soal['no']>=7){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">7</a>
                                                    </li>
                                                    <?php if ($soal['no']>=8){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">8</a>
                                                    </li>
                                                    <?php if ($soal['no']>=9){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">9</a>
                                                    </li>
                                                    <?php if ($soal['no']>=10){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">10</a>
                                                    </li>
                                                    <?php if ($soal['no']>=11){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">11</a>
                                                    </li>
                                                    <?php if ($soal['no']>=12){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">12</a>
                                                    </li>
                                                    <?php if ($soal['no']>=13){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">13</a>
                                                    </li>
                                                    <?php if ($soal['no']>=14){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">14</a>
                                                    </li>
                                                    <?php if ($soal['no']>=15){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">15</a>
                                                    </li>
                                                    <?php if ($soal['no']>=16){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">16</a>
                                                    </li>
                                                    <?php if ($soal['no']>=17){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">17</a>
                                                    </li>
                                                    <?php if ($soal['no']>=18){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">18</a>
                                                    </li>
                                                    <?php if ($soal['no']>=19){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">19</a>
                                                    </li>
                                                    <?php if ($soal['no']>=20){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">20</a>
                                                    </li>
                                                    <?php if ($soal['no']>=21){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">21</a>
                                                    </li>
                                                    <?php if ($soal['no']>=22){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">22</a>
                                                    </li>
                                                    <?php if ($soal['no']>=23){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">23</a>
                                                    </li>
                                                    <?php if ($soal['no']>=24){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">24</a>
                                                    </li>
                                                    <?php if ($soal['no']>=25){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">25</a>
                                                    </li>
                                                    <?php if ($soal['no']>=26){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">26</a>
                                                    </li>
                                                    <?php if ($soal['no']>=27){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">27</a>
                                                    </li>
                                                    <?php if ($soal['no']>=28){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">28</a>
                                                    </li>
                                                    <?php if ($soal['no']>=29){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">29</a>
                                                    </li>
                                                    <?php if ($soal['no']==30){
                                                        echo '<li class="active">';
                                                    }else{
                                                        echo '<li>';
                                                    } ?>
                                                        <a href="#">30</a>
                                                    </li>
                                                </ul>
                                            </div>
									    </div>
									</div>
                                </form>
                            </div> <!-- end card -->
	                	</div> <!--  end col-md-3  -->
                    </div> <!-- end row -->
                    <script>
                        // Set the date we're counting down to
                        // var countDownDate = new Date("Dec 10, 2019 14:32:25").getTime();
                        var countDownDate = new Date("<?= $pretest['waktu_selesai']; ?>").getTime();

                        // Update the count down every 1 second
                        var x = setInterval(function() {

                        // Get today's date and time
                        var now = new Date().getTime();

                        // Find the distance between now and the count down date
                        var distance = countDownDate - now;

                        // Time calculations for days, hours, minutes and seconds
                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                        // Display the result in the element with id="demo"
                        document.getElementById("durasi").innerHTML = "Waktu Anda " + minutes + " m " + seconds + " s ";

                        // If the count down is finished, write some text
                        if (distance < 0) {
                            clearInterval(x);
                            document.getElementById("durasi").innerHTML = "WAKTU TELAH HABIS";
                            window.location.href = "<?php echo site_url('pretest/waktu_habis');?>";
                        }
                        }, 1000);
                    </script>