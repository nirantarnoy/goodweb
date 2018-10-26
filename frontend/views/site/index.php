<?php

/* @var $this yii\web\View */
use kv4nt\owlcarousel\OwlCarouselWidget;

$this->title = 'goodoper';
?>
<div class="site-index">

    <div class="jumbotron" style="background: #2aabd2;width: 100%; ">
        <h1>บริการออกแบบและพัฒนาระบบงานทั่วไป</h1>

        <p class="lead" style="color: #ffffff">ระบบซื้อขาย ระบบสต๊อกสินค้า ระบบงานซ่อมบำรุง ฯลฯ</p>

        <p><a class="btn btn-lg btn-warning" href="#">ทดลองใช้งาน</a></p>
    </div>


    <div class="body-content">
        <div class="container">
            <div class="row" id="good-service">
                <div class="col-lg-12">
                    <div class="good-service">
                        <div style="text-align: center">
                            <h2>บริการของเรา</h2>
                        </div>
                        <div style="text-align: center">
<!--                            <ul class="service-item">-->
<!--                                <li>-->
<!---->
<!--                                            <div class="thumbnail">-->
<!--<!--                                                <img src="..." alt="...">-->
<!--                                                <h1><i class="glyphicon glyphicon-cloud-download"></i></h1>-->
<!--                                                <div class="caption">-->
<!--                                                    <h3>ระบบงานบน Cloud</h3>-->
<!--                                                    <p> ระบบบริหารงานซื้อ-ขาย ซ่อมบำรุงบน Cloud <br>หมดปัญหาเรื่องทรัพยากรไม่เพียงพอ</p>-->
<!--                                                    <p><a href="#" class="btn btn-primary" role="button">รายละเอียด</a></p>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <div class="thumbnail">-->
<!--                                        <h1><i class="glyphicon glyphicon-th-large"></i></h1>-->
<!--                                        <div class="caption">-->
<!--                                            <h3>ออกแบบและพัฒนาระบบตามความต้องการ</h3>-->
<!--                                            <p>นำความต้องการของลูกค้ามาวิเคราะห์และออกแบบระบบ<br />ให้ตรงตามความต้องการ พร้อมส่งมอบระบบที่มีคุณภาพ</p>-->
<!--                                            <p><a href="#" class="btn btn-primary" role="button">รายละเอียด</a></p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <div class="thumbnail">-->
<!--                                        <h1><i class="glyphicon glyphicon-cog"></i></h1>-->
<!--                                        <div class="caption">-->
<!--                                            <h3>Implement and customize</h3>-->
<!--                                            <p> จัดหาระบบสารสนเทศที่เหมาะสมสำหรับองค์กร <br >รวมถึงการปรับแต่งระบบเพิ่มเติม เช่น Form,Report</p>-->
<!--                                            <p><a href="#" class="btn btn-primary" role="button">รายละเอียด</a></p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                            </ul>-->
                            <div class="row">
                                <div class="col-lg-4">

                                    <div class="thumbnail">
                                        <!--                                                <img src="..." alt="...">-->
                                        <h1><i class="glyphicon glyphicon-cloud-download"></i></h1>
                                        <div class="caption">
                                            <h3 style="color: #2b669a">ระบบงานบน Cloud</h3>
                                            <p> ระบบบริหารงานซื้อ-ขาย ซ่อมบำรุงบน Cloud <br>หมดปัญหาเรื่องทรัพยากรไม่เพียงพอ</p>
                                            <p><a href="#" class="btn btn-primary" role="button">รายละเอียด</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="thumbnail">
                                        <h1><i class="glyphicon glyphicon-th-large"></i></h1>
                                        <div class="caption">
                                            <h3 style="color: #2b669a">ออกแบบและพัฒนาระบบตามความต้องการ</h3>
                                            <p>นำความต้องการของลูกค้ามาวิเคราะห์และออกแบบระบบ<br />ให้ตรงตามความต้องการ พร้อมส่งมอบระบบที่มีคุณภาพ</p>
                                            <p><a href="#" class="btn btn-primary" role="button">รายละเอียด</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="thumbnail">
                                        <h1><i class="glyphicon glyphicon-cog"></i></h1>
                                        <div class="caption">
                                            <h3 style="color: #2b669a">Implement and customize</h3>
                                            <p> จัดหาระบบสารสนเทศที่เหมาะสมสำหรับองค์กร <br >รวมถึงการปรับแต่งระบบเพิ่มเติม เช่น Form,Report</p>
                                            <p><a href="#" class="btn btn-primary" role="button">รายละเอียด</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="good-portfolio" id="good-port">
                        <div style="text-align: center">
                            <h2>ตัวอย่างผลงาน</h2>
                        </div>
                        <div style="text-align: center">
                            <?php
                            OwlCarouselWidget::begin([
                                'container' => 'div',
                                'containerOptions' => [
                                    'id' => 'container-id',
                                    'class' => 'container-class'
                                ],
                                'pluginOptions'    => [
                                    'autoplay'          => true,
                                    'autoplayTimeout'   => 3000,
                                    'items'             => 3,
                                    'loop'              => true,
                                    'itemsDesktop'      => [1199, 3],
                                    'itemsDesktopSmall' => [979, 3]
                                ]
                            ]);
                            ?>

                            <div class="item-class"><img src="../web/images/client_1.png" alt="Image 1"></div>
                            <div class="item-class"><img src="../web/images/client_2.jpg" alt="Image 2"></div>
                            <div class="item-class"><img src="../web/images/client_3.jpg" alt="Image 3"></div>
                            <div class="item-class"><img src="../web/images/client_4.png" alt="Image 4"></div>


                            <?php OwlCarouselWidget::end(); ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="good-about" id="good-about">
                        <div style="text-align: center">
                            <h2>เกี่ยวกับเรา</h2>
                        </div>
                        <div class="about-text" style="text-align: center">
                           <div class="row">
                               <div class="col-lg-12">
                                   <div class="container">
                                       <p><h3>goodoper (กู๊ดดอปเปอร์) ให้บริการออกแบบและพัฒนาระบบบริหารจัดการภายในองกร ห้างร้าน บริษัท โรงงานอุตสาหกรรมทั้งขนาดเล็กและขนาดใหญ่ ด้วยประสบการณ์การทำงานด้านการพัฒนาและ implement ระบบมาเป็นระยะเวลาไม่น้อยกว่า 9 ปี
                                           มีความเข้าใจในแต่ละกระบวนการทำงาน พร้อมที่จะออกแบบและพัฒนาระบบที่มีคุณภาพให้กับลูกค้าทุกท่านพึงพอใจและตรงความต้องการ</h3></p>
                                   </div>

                               </div>
                           </div>
                        </div>

                    </div>
                </div>
            </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="good-contact">
                        <div style="text-align: center">
                            <h2>ติดต่อเรา</h2>
                        </div>
                        <div style="text-align: center">
                           <div class="row">
                               <div class="col-lg-12">
                                   <p><h4>69/71 หมู่ 2 ถนนเพชรเกษม ต.ไร่ขิง อ.สามพราน จ.นครปฐม 73210</h4></p>
                               </div>
                           </div>
                             <div class="row">
                                 <div class="col-lg-12" style="text-align: center">

                                         <a href="#" target="_blank" class="">
                                             <img src="../web/images/mobile.png" width="10%" alt="...">

                                         </a>
                                         <h4><b>086 006 3601 , 088 769 2818</b></h4>

                                 </div>
                             </div>
                            <br>
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <a href="https://www.facebook.com/Goodoper-1033800079972006/" target="_blank">
                                                <img src="../web/images/facebook.png" width="5%" alt="">
                                            </a>
                                            <a href="#" class="" target="_blank">
                                                <img src="../web/images/line.png" width="4%">
                                            </a>
                                            <a href="#" target="_blank" class="">
                                                <img src="../web/images/google+.png" width="5%">
                                            </a>
                                        </div>
                                    </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>

    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">กลับขึ้นข้างบน</button>
</div>
<?php
$js =<<<JS
   $(function() {
     window.onscroll = function() {scrollFunction()};
     
     $("#nav-contact,#nav-about,#nav-port,#nav-service").click(function() {
         //$(this).preventDefault();
         var aid = $(this).attr("href");
         //alert(aid);
         $('html,body').animate({scrollTop: $(aid).offset().top -100},'slow');
     });
     $("#nav-home").click(function(){
        var aid = ".site-index"
        // alert(aid);
         $('html,body').animate({scrollTop: $(aid).offset().top -100},'slow');
     });
   });

    function scrollFunction() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

    function topFunction() {
      //  document.body.scrollTop = 0;
      //  document.documentElement.scrollTop = 0;
       var aid = ".site-index"
        // alert(aid);
         $('html,body').animate({scrollTop: $(aid).offset().top -100},'slow');
    }
JS;

$this->registerJs($js,static::POS_END);
?>