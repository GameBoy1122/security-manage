<style>
    .btn_circle {
        border-radius: 100% !important;
        width: 30px;
        height: 30px;
        font-size: 16px;
        padding: 0px !important;
        background-color: #1B3D84;
        color: white;

    }

    .btn_circle:hover {
        border-radius: 100% !important;
        width: 30px;
        height: 30px;
        font-size: 16px;
        padding: 0px !important;
        background-color: blue;
        color: white;
    }

    .hr_detail {
        height: 3px !important;
        opacity: 1 !important;
        margin-top: 0;
        background: #3DB1E4;
        background-size: 100%;
        margin-bottom: 0px;
        border: none;
    }
</style>
<section>
    <div class="container mt-5 mb-5">
        <div class="row">
            <!-- <h1 class="heading" style="color: #1B3D84; padding-bottom: 10px">คลังความรู้</h1>
            <div class="col-12">
                <hr class="hr_detail">
            </div> -->
            <h3 style="padding-bottom: 15px; color: #1B3D84">
                <?php echo $news->title ?></h3>
            <div class="col-12">
                <img src="<?php echo base_url('') . $news->image ?>" width="100%">
            </div>

            <div class="col-12">
                <div style="font-weight: 400; font-size: 20px; padding-top: 10px; color: #1B3D84">Share</div>
                <div class="social_icon">
                    <a role="button" href="#" id="fb-share-button" target="_blank">
                        <i class="fa-brands fa-facebook" style="font-size: 28px;padding: 10px 10px; padding-left: 0px;  color: #0277bd;"></i>
                    </a>
                    <i class="fa-brands fa-line" style="font-size: 28px;padding: 10px 10px; padding-left: 0px;  color: #00CA5F;"></i>
                    <a role="button" href="https://twitter.com/intent/tweet?text= <?php echo base_url('news/details/' . $news->news_id) ?>" target="_blank">
                        <i class="fa-brands fa-twitter" style="font-size: 28px;padding: 10px 10px; padding-left: 0px;  color: #1DA1F2;"></i>
                    </a>
                </div>
            </div>

            <div class="col-12 mt-3">
                <?php echo $news->description ?>
            </div>

            <!-- <div style="font-weight: 400; font-size: 30px; padding-bottom: 20px; color: #1B3D84">Related posts</div>

            <div class="slide_detail">

                <div class="card m-2" style="border-radius: 15px;">
                    <img src="<?php echo base_url('/assets/img/detail2.png') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="padding-top: 10px; padding-bottom: 10px;">
                            โรคกระดูกสันหลังคด</h5>
                        <p class="card-text" style="padding-bottom: 5px; color:#878787;">
                            ภาวะที่กระดูกสันหลังโค้งงอไปทางด้านใดด้านหนึ่ง
                            และอาจมีหรือไม่มีการบิดหมุนของกระดูกสันหลังร่วมด้วย ทำให้กล้า…</p>

                        <div>
                            <button type="button" class="btn btn_circle btn-lg"> > </button>
                            <span class="p-2">อ่านเพิ่มเติม</span>
                        </div>
                    </div>
                </div>

                <div class="card m-2" style="border-radius: 15px;">
                    <img src="<?php echo base_url('/assets/img/detail3.png') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="padding-top: 10px; padding-bottom: 10px;">
                            โรคกระดูกสันหลังคด</h5>
                        <p class="card-text" style="padding-bottom: 5px; color:#878787;">
                            ภาวะที่กระดูกสันหลังโค้งงอไปทางด้านใดด้านหนึ่ง
                            และอาจมีหรือไม่มีการบิดหมุนของกระดูกสันหลังร่วมด้วย ทำให้กล้า…</p>
                        <div>
                            <button type="button" class="btn btn_circle btn-lg"> > </button>
                            <span class="p-2">อ่านเพิ่มเติม</span>
                        </div>


                    </div>


                </div>


                <div class="card m-2" style="border-radius: 15px;">
                    <img src="<?php echo base_url('/assets/img/detail4.png') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="padding-top: 10px; padding-bottom: 10px;">
                            โรคกระดูกสันหลังคด</h5>
                        <p class="card-text" style="padding-bottom: 5px; color:#878787;">
                            ภาวะที่กระดูกสันหลังโค้งงอไปทางด้านใดด้านหนึ่ง
                            และอาจมีหรือไม่มีการบิดหมุนของกระดูกสันหลังร่วมด้วย ทำให้กล้า…</p>
                        <div>
                            <button type="button" class="btn btn_circle btn-lg"> > </button>
                            <span class="p-2">อ่านเพิ่มเติม</span>
                        </div>
                    </div>
                </div>

                <div class="card m-2" style="border-radius: 15px;">
                    <img src="<?php echo base_url('/assets/img/detail4.png') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="padding-top: 10px; padding-bottom: 10px;">
                            โรคกระดูกสันหลังคด</h5>
                        <p class="card-text" style="padding-bottom: 5px; color:#878787;">
                            ภาวะที่กระดูกสันหลังโค้งงอไปทางด้านใดด้านหนึ่ง
                            และอาจมีหรือไม่มีการบิดหมุนของกระดูกสันหลังร่วมด้วย ทำให้กล้า…</p>
                        <div>
                            <button type="button" class="btn btn_circle btn-lg"> > </button>
                            <span class="p-2">อ่านเพิ่มเติม</span>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $('.slide_detail').slick({
            dots: false,
            autoplay: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    });
</script>
<script>
    // $(document).ready(function() {
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));


    var fbButton = document.getElementById('fb-share-button');
    var url = window.location.href;


    fbButton.addEventListener('click', function() {
        window.open('https://www.facebook.com/sharer/sharer.php?u=' + url,
            'facebook-share-dialog',
            'width=800,height=600'
        );
        return false;
    });
    // });
</script>