<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url() ?>assets/minishop/images/bg_6.jpg');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url() ?>">Home</a></span> <span>Review</span></p>
        <h1 class="mb-0 bread">Review Us</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section contact-section bg-light">
  <div class="container">
    <div class="row d-flex mb-5 contact-info">
      <div class="w-100"></div>
      <div class="col-md-3 d-flex">
        <div class="info bg-white p-4">
          <p><span>Alamat: </span><br>Jorong Laban, Nagari Kapa, Luhak Nan Duo, Kabupaten Pasaman Barat</p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="info bg-white p-4">
          <p><span>Telephone: </span> <a href="tel://02517539458"><br>+ 0251 7539458</a></p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="info bg-white p-4">
          <p><span>Email:</span> <a href="amaliapus.9d@gmail.com"><br>amaliapus.9d@gmail.com</a></p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="info bg-white p-4">
          <p><span>Website</span> <a><br>PusakoAnakNagari-Airport.com</a></p>
        </div>
      </div>
    </div>

  <?echo form_open(base_url('review')); ?>
    <div class="row block-9">
      <div class="col-md-6 order-md-last d-flex">
        <form action="#" method="post" class="bg-white p-5 contact-form">
          <div class="form-group">
            <input type="text" name="nama_tamu" class="form-control" placeholder="Your Name" value="<?php echo set_value('nama_tamu') ?>" required>
          </div>
          <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Your Email" value="<?php echo set_value('email') ?>" required>
          </div>
          <div class="form-group">
            <input type="text" name="subject" class="form-control" placeholder="Subject" value="<?php echo set_value('subject') ?>" required>
          </div>
          <div class="form-group">
            <textarea name="comment" id="" cols="30" rows="7" class="form-control" placeholder="Review" value="<?php echo set_value('comment') ?>" required></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Review" class="btn btn-primary py-3 px-5">
          </div>
        </form>
      
      </div>
      <?php echo form_close(); ?>

      <div class="col-md-6 d-flex">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31918.51807052778!2d99.78472200000002!3d0.076556!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMMKwMDQnMzUuNiJOIDk5wrA0NycwNS4wIkU!5e0!3m2!1sen!2sid!4v1614067687763!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>
</section> 


    </div>
  </div>
</section>