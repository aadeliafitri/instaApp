<section id="contact" class="contact">
    <div class="form mt-5 ">
        <div class="text-start ms-4">
            <h1 class="h4 text-gray-900 mb-4">Let's make your post here!!</h1>
        </div>
        <form action="index.php?include=konfirmasi-post" method="post"  enctype="multipart/form-data" class="ms-4">
            <div class="form-group">
                        <!-- <label for="foto" class="col-sm-1 col-form-label">Foto</label> -->
                        <div class="col-sm-9 mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="foto" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose your photo</label>
                        </div>  
                        </div>
            </div>
            <div class="form-group col-md-9">
              <textarea class="form-control" name="caption" rows="5" placeholder="Write your caption here" required></textarea>
            </div>
            <div class="my-3">
              <!-- <div class="loading">Loading</div> -->
              <div class="col-sm-10">
                <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
                    <?php if($_GET['notif']=="tambahkosong"){?>
                        <div class="error-message">Maaf data <?php echo $_GET['jenis'];?> wajib di isi</div>
                    <?php }?>
                <?php }?>
                </div>
                <?php if(!empty($_GET['notif'])){?>
                <?php if($_GET['notif']=="tambahberhasil"){?>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                <?php }}?>
            </div>
            <div class="text-center col-md-9"><button type="submit" class="btn-post">Posting</button></div>
        </form>
    </div><!-- End Contact Form -->
</section>
