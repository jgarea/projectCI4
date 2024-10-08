<!-- s-extra
    ================================================== -->
<section class="s-extra">

    <div class="row">

        <div class="col-seven md-six tab-full popular">
            <h3>Popular Posts</h3>

            <?php
                $db = \Config\Database::connect();
                $query = $db->query("SELECT * FROM posts where show_home=1");
                $result=$query->getResult();

                foreach ($result as $p) {
                    
                
            ?>


            <div class="block-1-2 block-m-full popular__posts">
                <article class="col-block popular__post">
                    <a href="<?= base_url() ?>public/dashboard/post/<?= $p->slug.'/'.$p->id ?>" class="popular__thumb">
                        <!-- <img src="<?php //base_url() ?>writable/uploads/<?php //$p->banner ?>" alt=""> -->
                        <img src="<?= base_url().'public/uploads/'.$p->banner ?>" alt="">
                    </a>
                    <h5><?= $p->title ?></h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0">John Doe</a></span>
                        <span class="popular__date"><span>on</span> <time datetime="<?= $p->created_at ?>"><?= date('d-m-Y',strtotime($p->created_at)) ?></time></span>
                    </section>
                </article>
                <?php
                }
                ?>
               
                <!-- <article class="col-block popular__post">
                    <a href="#0" class="popular__thumb">
                        <img src="<?= base_url() ?>assets/images/thumbs/small/wheel-150.jpg" alt="">
                    </a>
                    <h5><a href="#0">Visiting Theme Parks Improves Your Health.</a></h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0">John Doe</a></span>
                        <span class="popular__date"><span>on</span> <time datetime="2018-06-12">Jun 12,
                                2018</time></span>
                    </section>
                </article>
                <article class="col-block popular__post">
                    <a href="#0" class="popular__thumb">
                        <img src="<?= base_url() ?>assets/images/thumbs/small/shutterbug-150.jpg" alt="">
                    </a>
                    <h5><a href="#0">Key Benefits Of Family Photography.</a></h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0">John Doe</a></span>
                        <span class="popular__date"><span>on</span> <time datetime="2018-06-12">Jun 12,
                                2018</time></span>
                    </section>
                </article>
                <article class="col-block popular__post">
                    <a href="#0" class="popular__thumb">
                        <img src="<?= base_url() ?>assets/images/thumbs/small/cookies-150.jpg" alt="">
                    </a>
                    <h5><a href="#0">Absolutely No Sugar Oatmeal Cookies.</a></h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                        <span class="popular__date"><span>on</span> <time datetime="2018-06-12">Jun 12,
                                2018</time></span>
                    </section>
                </article>
                <article class="col-block popular__post">
                    <a href="#0" class="popular__thumb">
                        <img src="<?= base_url() ?>assets/images/thumbs/small/beetle-150.jpg" alt="">
                    </a>
                    <h5><a href="#0">Throwback To The Good Old Days.</a></h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0">John Doe</a></span>
                        <span class="popular__date"><span>on</span> <time datetime="2018-06-12">Jun 12,
                                2018</time></span>
                    </section>
                </article>
                <article class="col-block popular__post">
                    <a href="#0" class="popular__thumb">
                        <img src="<?= base_url() ?>assets/images/thumbs/small/salad-150.jpg" alt="">
                    </a>
                    <h5>Healthy Mediterranean Salad Recipes</h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                        <span class="popular__date"><span>on</span> <time datetime="2018-06-12">Jun 12,
                                2018</time></span>
                    </section>
                </article> -->
            </div> <!-- end popular_posts -->
        </div> <!-- end popular -->

        <div class="col-four md-six tab-full end">
            <div class="row">
                <div class="col-six md-six mob-full categories">
                    <h3>Categories</h3>
                    <ul class="linklist">
                    <?php
                        $db = \Config\Database::connect();
                        $query = $db->query("SELECT * FROM categories");
                        $result=$query->getResult();
                        foreach ($result as $r) {
                            
                    ?>
                    
                        <li><a href="<?= base_url() ?>public/category/<?= $r->id ?>"><?= $r->name ?></a></li>
                    <?php 
                        }
                    ?>
                    </ul>
                </div> <!-- end categories -->

                <div class="col-six md-six mob-full sitelinks">
                    <h3>Site Links</h3>

                    <ul class="linklist">
                        <li><a href="<?= base_url() ?>public">Home</a></li>
                        <li><a href="<?= base_url() ?>public/dashboard/blog">Blog</a></li>
                        
                    </ul>
                </div> <!-- end sitelinks -->
            </div>
        </div>
    </div> <!-- end row -->

</section> <!-- end s-extra -->


<!-- s-footer
    ================================================== -->
<footer class="s-footer">

    <div class="s-footer__main">
        <div class="row">

            <div class="col-six tab-full s-footer__about">

                <h4>About Wordsmith</h4>

                <p>Fugiat quas eveniet voluptatem natus. Placeat error temporibus magnam sunt optio aliquam. Ut ut
                    occaecati placeat at.
                    Fuga fugit ea autem. Dignissimos voluptate repellat occaecati minima dignissimos mollitia
                    consequatur.
                    Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et
                    enim exercitationem ipsam. Culpa error
                    temporibus magnam est voluptatem.</p>

            </div> <!-- end s-footer__about -->

            <div class="col-six tab-full s-footer__subscribe">

                <h4>Our Newsletter</h4>

                <p>Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et
                    enim exercitationem ipsam. Culpa consequatur occaecati.</p>

                <div class="subscribe-form">
                    <form id="newsletter-form" method="post" class="group" novalidate="true">

                        <input type="email" value="" name="email" class="email" id="newsletter-input"
                            placeholder="Email Address" required="">

                        <!-- <input type="submit" name="subscribe" value="Send"> -->
                        <div class="btn" id="sendNewsletter">Send</div>
                        <label for="mc-email" class="subscribe-message" style="color: white;"></label>

                    </form>
                </div>

            </div> <!-- end s-footer__subscribe -->

        </div>
    </div> <!-- end s-footer__main -->

    <div class="s-footer__bottom">
        <div class="row">

            <div class="col-six">
                <ul class="footer-social">
                    <li>
                        <a href="#0"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-pinterest"></i></a>
                    </li>
                </ul>
            </div>

            <div class="col-six">
                <div class="s-footer__copyright">
                    <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> All rights reserved | This template
                        is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                            target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </span>
                </div>
            </div>

        </div>
    </div> <!-- end s-footer__bottom -->

    <div class="go-top">
        <a class="smoothscroll" title="Back to Top" href="#top"></a>
    </div>

</footer> <!-- end s-footer -->

<?php
if ($view!="uploadPost") {

?>

<!-- Java Script
    ================================================== -->
    <script src="<?= base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?= base_url() ?>assets/js/plugins.js"></script>
    <script src="<?= base_url() ?>assets/js/main.js"></script>

    <!-- summernote -->
    <!-- include libraries(jQuery, bootstrap) -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>
    <!-- end summernote -->

<?php
}
?>


<script type="text/javascript">
$("#sendNewsletter").click(function () {
    console.log("se ha enviado");
    let inputemail=$("#newsletter-input").val();
    $.post("<?= base_url() ?>public/dashboard/add_newsletter",{email:inputemail}).done(function (data) {
        console.log("Enviado post");
        console.log(data);
        $(".subscribe-message").html(data);
     });
});
</script>


</body>

</html>