<?php

/* @var $this yii\web\View */
use kv4nt\owlcarousel\OwlCarouselWidget;

$this->title = 'goodoper';
?>
<div class="site-index">


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
<!--                <img src="la.jpg" alt="Los Angeles" style="width:100%;">-->
                <div class="jumbotronx" style="background: #FFFFFF;width: 100%;height: 500px;text-align: center;">

                    <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <br> <br> <br> <br><br>
                            <h1 style="color: #1b6d85;font-weight: bold">PM & Helpdesk System</h1>

                            <p class="lead" style="color: #ec971f;font-weight: bold">ระบบบริหารจัดการงานซ่อมบำรุงและช่วยเหลือ</p>

                            <p><a class="btn btn-lg btn-primary" style="color: #f3f3f3" href="#">เร็วๆนี้</a></p>
                            <div class="btn-group">
                                <image src="../web/images/get_on_google.png" style="width: 30%;"></image>
                                <image src="../web/images/sn-appstore.png" style="width: 22%;"></image>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <br> <br> <br>
                            <image src="../web/images/pm_banner.png" style="width: 100%;margin-top: 10%;"></image>
                        </div>
                    </div>
                    </div>

                </div>

            </div>
            <div class="item">
                <!--                <img src="la.jpg" alt="Los Angeles" style="width:100%;">-->
                <div class="jumbotronx" style="background: #eea236;width: 100%;height: 500px;text-align: center;">
                    <br> <br> <br> <br>
                    <h1 style="color: #303030">Inventory & Warehouse Management System</h1>

                    <p class="lead" style="color: #303030">ระบบบริหารสต๊อกสินค้า ซื้อ ขาย เบิกจ่าย</p>

                    <p><a class="btn btn-lg btn-primary" style="color: #000" href="#">เร็วๆนี้</a></p>
                </div>

            </div>
            <div class="item">
<!--                <img src="chicago.jpg" alt="Chicago" style="width:100%;">-->
                <div class="jumbotronx" style="background: #2aabd2;width: 100%;height: 500px;text-align: center ">
                    <br> <br> <br> <br>
                    <h1>บริการออกแบบและพัฒนาระบบงานทั่วไป</h1>

                    <p class="lead" style="color: #ffffff">ระบบซื้อขาย ระบบสต๊อกสินค้า ระบบงานซ่อมบำรุง ฯลฯ</p>

                    <p><a class="btn btn-lg btn-warning" style="color: #000" href="#">ทดลองใช้งาน</a></p>
                </div>

            </div>

<!--            <div class="item">-->
<!--                <img src="ny.jpg" alt="New york" style="width:100%;">-->
<!--                <div class="jumbotron" style="background: #2aabd2;width: 100%; ">-->
<!--                    <h1>บริการออกแบบและพัฒนาระบบงานทั่วไป</h1>-->
<!---->
<!--                    <p class="lead" style="color: #ffffff">ระบบซื้อขาย ระบบสต๊อกสินค้า ระบบงานซ่อมบำรุง ฯลฯ</p>-->
<!---->
<!--                    <p><a class="btn btn-lg btn-warning" style="color: #000" href="#">ทดลองใช้งาน</a></p>-->
<!--                </div>-->
<!---->
<!--            </div>-->
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
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

                            <div class="item-class"><img src="../web/images/port_2.png" alt="Image 1"></div>
                            <div class="item-class"><img src="../web/images/client_2.jpg" alt="Image 2"></div>
                            <div class="item-class"><img src="../web/images/client_3.jpg" alt="Image 3"></div>
                            <div class="item-class"><img src="../web/images/port_1.png" alt="Image 4"></div>


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
                                            <a href="javascript:void(0)" class="" onclick="showline();">
                                                <img src="../web/images/line.png" width="4%">
                                            </a>
<!--                                            <a href="#" target="_blank" class="">-->
<!--                                                <img src="../web/images/google+.png" width="5%">-->
<!--                                            </a>-->
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
    <div id="lineModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success btn-append-ok" data-dismiss="modal">ตกลง</button>
                </div>
            </div>
        </div>
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
    function showline() {
       $("#lineModal").modal("show");
    }
JS;

$this->registerJs($js,static::POS_END);
?>
