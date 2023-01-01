<?php 
if (isset($_GET['data'])) {
  $id_post= $_GET['data'];
  $sql_d = "SELECT `foto`,`caption` FROM `post` WHERE `id_post`='$id_post'";
  $query_d = mysqli_query($koneksi,$sql_d);
  while($data_d = mysqli_fetch_row($query_d)){
    $foto = $data_d[0];
    $caption = $data_d[1];
    // $penulis = $data_d[4];
  }}
?>

    <section class="single-post-content">
      <div class="container">
        <div class="row">
          <div class="col-md-9 post-content" data-aos="fade-up">

            <!-- ======= Single Post Content ======= -->
            <div class="single-post">
              <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
              <!-- <h1 class="mb-5">13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</h1> -->
              <!-- <p><span class="firstcharacter">L</span>orem ipsum dolor sit, amet consectetur adipisicing elit. Ratione officia sed, suscipit distinctio, numquam omnis quo fuga ipsam quis inventore voluptatum recusandae culpa, unde doloribus saepe labore alias voluptate expedita? Dicta delectus beatae explicabo odio voluptatibus quas, saepe qui aperiam autem obcaecati, illo et! Incidunt voluptas culpa neque repellat sint, accusamus beatae, cumque autem tempore quisquam quam eligendi harum debitis.</p> -->

              <figure class="my-4">
                <img src="foto/<?php echo $foto;?>" alt="" class="img-fluid">
              </figure>
              <p><?php echo $caption;?></p>
              <!-- <figure class="my-4">
                <img src="assets/img/post-landscape-5.jpg" alt="" class="img-fluid">
                <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, odit? </figcaption>
              </figure>
              <p>Quis molestiae, dolorem consequuntur labore perferendis enim accusantium commodi optio, sequi magnam ad consectetur iste omnis! Voluptatibus, quia officia esse necessitatibus magnam tempore reprehenderit quo aspernatur! Assumenda, minus dolorem repellendus corporis corrupti quia temporibus repudiandae in. Sit rem aut, consectetur repudiandae perferendis nemo alias, iure ipsam omnis quam soluta, nobis animi quis aliquam blanditiis at. Dicta nemo vero sequi exercitationem.</p>
              <p>Architecto ex id at illum aperiam corporis, quidem magnam doloribus non eligendi delectus laborum porro molestiae beatae eveniet dolor odit optio soluta dolores! Eaque odit a nihil recusandae, error repellendus debitis ex autem ab commodi, maiores officiis doloribus provident optio, architecto assumenda! Nihil cum laboriosam eos dolore aliquid perferendis amet doloremque quibusdam odio soluta vero odit, ipsa, quisquam quod nulla.</p>
              <p>Consequuntur corrupti fugiat quod! Ducimus sequi nemo illo ad necessitatibus amet nobis corporis et quasi. Optio cum neque fuga. Ad excepturi magnam quisquam ex voluptatibus vitae aut nam quidem doloribus, architecto perspiciatis sit consequatur pariatur alias animi expedita quas? Et doloribus voluptatibus perferendis qui fugiat voluptatum autem facere aspernatur quidem quae assumenda iste, sit similique, necessitatibus laborum magni. Ea, dolores!</p>
              <p>Possimus temporibus rerum illo quia repudiandae provident sed quas atque. Ipsam adipisci accusamus iste optio illo aliquam molestias? Voluptatibus, veniam recusandae facilis nobis perspiciatis rem similique, nisi ad explicabo ipsa voluptatum, inventore molestiae natus adipisci? Fuga delectus quia assumenda totam aspernatur. Nobis hic ea rem, quaerat voluptate vero illum laboriosam omnis aspernatur labore, natus ex iusto ducimus exercitationem a officia.</p>
            </div>End Single Post Content -->

            <!-- ======= Comments ======= -->
            <div class="comments">
            <?php 
              
              $sql_k = "SELECT count(`komentar`) FROM `komentar` WHERE `id_post`='$id_post'";
              $query_k = mysqli_query($koneksi,$sql_k);
              while($data_k = mysqli_fetch_row($query_k)){
                $jml_comment = $data_k[0];
              }
            ?>
              <h5 class="comment-title py-4"><?php echo $jml_comment?> Comments</h5>
              <?php 
              
                $sql_k = "SELECT `u`.`username`,`k`.`komentar` FROM `komentar` `k` inner join `user` `u` on `k`.`id_user`=`u`.`id_user` WHERE `k`.`id_post`='$id_post'";
                $query_k = mysqli_query($koneksi,$sql_k);
                while($data_k = mysqli_fetch_row($query_k)){
                  $username = $data_k[0];
                  $komentar = $data_k[1];
                  // $penulis = $data_d[4];
              ?>
              <div class="comment d-flex mb-4">
                <div class="flex-shrink-0">
                  <div class="avatar avatar-sm rounded-circle">
                    <img class="avatar-img" src="assets/img/person-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
                <div class="flex-grow-1 ms-2 ms-sm-3">
                  <div class="comment-meta d-flex align-items-baseline">
                    <h6 class="me-2">@<?php echo $username;?></h6>
                    <!-- <span class="text-muted">2d</span> -->
                  </div>
                  <div class="comment-body">
                    <?php echo $komentar;?>
                  </div>
                  <!-- <div class="comment-replies bg-light p-3 mt-3 rounded">
                    <h6 class="comment-replies-title mb-4 text-muted text-uppercase">2 replies</h6>

                    <div class="reply d-flex mb-4">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm rounded-circle">
                          <img class="avatar-img" src="assets/img/person-4.jpg" alt="" class="img-fluid">
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-2 ms-sm-3">
                        <div class="reply-meta d-flex align-items-baseline">
                          <h6 class="mb-0 me-2">Brandon Smith</h6>
                          <span class="text-muted">2d</span>
                        </div>
                        <div class="reply-body">
                          Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        </div>
                      </div>
                    </div>
                    <div class="reply d-flex">
                      <div class="flex-shrink-0">
                        <div class="avatar avatar-sm rounded-circle">
                          <img class="avatar-img" src="assets/img/person-3.jpg" alt="" class="img-fluid">
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-2 ms-sm-3">
                        <div class="reply-meta d-flex align-items-baseline">
                          <h6 class="mb-0 me-2">James Parsons</h6>
                          <span class="text-muted">1d</span>
                        </div>
                        <div class="reply-body">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolore sed eos sapiente, praesentium.
                        </div>
                      </div>
                    </div>
                  </div> -->
                </div>
              </div>
              <?php }?>
              <!-- <div class="comment d-flex">
                <div class="flex-shrink-0">
                  <div class="avatar avatar-sm rounded-circle">
                    <img class="avatar-img" src="assets/img/person-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
                <div class="flex-shrink-1 ms-2 ms-sm-3">
                  <div class="comment-meta d-flex">
                    <h6 class="me-2">Santiago Roberts</h6>
                    <span class="text-muted">4d</span>
                  </div>
                  <div class="comment-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto laborum in corrupti dolorum, quas delectus nobis porro accusantium molestias sequi.
                  </div>
                </div>
              </div> -->
            </div><!-- End Comments -->

            <!-- ======= Comments Form ======= -->
            <div class="row justify-content-center mt-5">

              <div class="col-lg-12">
                <h5 class="comment-title">Leave a Comment</h5>
                <form action="index.php?include=konfirmasi-comment&data=<?php echo $id_post?>" method="post">
                <div class="row">
                  <div class="col-12 mb-3">
                    <label for="comment-message">Comment</label>
                    <textarea class="form-control" name="comment" id="comment-message" placeholder="Enter your comment" cols="30" rows="10"></textarea>
                  </div>
                  <div class="col-12">
                    <input type="submit" class="btn btn-primary" value="Post comment">
                  </div>
                </form>
                </div>
              </div>
            </div><!-- End Comments Form -->

          </div>
        </div>
      </div>
    </section>
