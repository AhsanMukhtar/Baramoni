<!-- Head Include Here -->
<?php include 'inc/app.php';?>
<!-- Head Include Here -->

<!-- Stylesheet -->
<link rel="stylesheet" href="css/shop.css">
<!-- Stylesheet -->

<!-- Stylesheet -->
<link rel="stylesheet" href="css/job.css">
<!-- Stylesheet -->

<section class="paralax_scroll">
    <!-- Shop Sec Start Here -->
    <section class="shop_sec job_section">
        <section class="section-head">
            <div class="head-page">
                <h3 class="heading-page">Job</h3>
            </div>
        </section>
        <div class="container">
            <div class="row mt-5 align-items-center">
                <div class="col-lg-3">
                    <div>
                        <div class="form-group">
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Default Sorting</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6"></div>
                <div class="col-lg-3 text-right">
                    <P class="d_green_para">
                        Showing 1–12 of 40 results
                    </P>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-3">
                    <div class="shop-sidebar">

                        <div class="categoryDv variation-attr">
                            <div class="fhead">
                                <h5>Categories</h5>
                            </div>
                            <ul class="categories">
                                <div class="alltxt">
                                    <span class="dot"></span>
                                    <p class="green_para">All</p>
                                </div>
                                <li><a href="#"><span class="property">Jobs</span> <span class="value"></span></a>
                                </li>
                                <li><a href="#"><span class="property">Restaurants </span> <span
                                            class="value"></span></a>
                                </li>
                                <li><a href="#"><span class="property">Events </span> <span class="value"></span></a>
                                </li>
                                <li><a href="#"><span class="property">Travels </span> <span class="value"></span></a>
                                </li>
                                <li><a href="#"><span class="property">Buy & Sell </span> <span
                                            class="value"></span></a>
                                </li>
                            </ul>
                        </div>

                        <div class="filter_Dv variation-attr">
                            <div class="fhead">
                                <h5 class="green_para">Price Range</h5>
                            </div>
                            <div class="filter_all">
                                <div class="mintxt">
                                    <p>MIN</p>
                                    <p>MAX</p>
                                </div>
                                <div class="range_slider">
                                    <div class="range">
                                        <!-- Range Slider HTML -->
                                        <div slider="" id="slider-distance">
                                            <div>
                                                <div inverse-left="" style="width: 37%;"></div>
                                                <div inverse-right="" style="width: 17%;"></div>
                                                <div range="" style="left: 37%; right: 17%;"></div>

                                                <span thumb="" style="left: 37%;"></span>
                                                <span thumb="" style="left: 83%;"></span>

                                                <div sign="" style="left: 37%;">
                                                    <span id="value">37</span>
                                                </div>

                                                <div sign="" style="left: 83%;">
                                                    <span id="value">83</span>
                                                </div>
                                            </div>

                                            <input type="range" tabindex="0" value="30" max="100" min="0" step="1"
                                                oninput="
                                this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
                                var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
                                var children = this.parentNode.childNodes[1].childNodes;
                                children[1].style.width=value+'%';
                                children[5].style.left=value+'%';
                                children[7].style.left=value+'%';children[11].style.left=value+'%';
                                children[11].childNodes[1].innerHTML=this.value;">

                                            <input type="range" tabindex="0" value="60" max="100" min="0" step="1"
                                                oninput="
                                this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
                                var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
                                var children = this.parentNode.childNodes[1].childNodes;
                                children[3].style.width=(100-value)+'%';
                                children[5].style.right=(100-value)+'%';
                                children[9].style.left=value+'%';children[13].style.left=value+'%';
                                children[13].childNodes[1].innerHTML=this.value;">
                                        </div>
                                        <!-- End Range Slider HTML -->
                                    </div>
                                </div>
                                <div class="range-pricing">
                                    <p class="green_para">Price: € 200</p>
                                </div>
                            </div>
                        </div>
                        <div class="rateDv variation-attr">
                            <div class="fhead">
                                <h5>Rated</h5>
                            </div>
                            <ul class="categories">
                                <div class="alltxt">
                                    <span class="dot"></span>
                                    <div class="product_stars_icon">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="product_stars_icon1">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <div class="product_stars_icon1">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <div class="product_stars_icon1">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <div class="product_stars_icon1">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="job_content">
                        <div class="row">
                            <div class="col-md-1">
                                <div>
                                    <img src="img/logo.png" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div>
                                    <p class="job_para">Lorem Ipsum Dolor</p>
                                    <p class="job_g_para">($ 40) to ( $ 500)</p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="text-center">
                                    <p class="job_b_para"> ( 1 years experience Required)</p>
                                    <div>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="job_g_para d-inline"> Los Angeles, Califonia PO, 455001</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    <a href="" class="btn" data-toggle="modal"
                                        data-target="#exampleModalCenter">Apply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job_content mt-3">
                        <div class="row">
                            <div class="col-md-1">
                                <div>
                                    <img src="img/logo.png" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div>
                                    <p class="job_para">Lorem Ipsum Dolor</p>
                                    <p class="job_g_para">($ 40) to ( $ 500)</p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="text-center">
                                    <p class="job_b_para"> ( 1 years experience Required)</p>
                                    <div>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="job_g_para d-inline"> Los Angeles, Califonia PO, 455001</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    <a href="" class="btn" data-toggle="modal"
                                        data-target="#exampleModalCenter">Apply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job_content mt-3">
                        <div class="row">
                            <div class="col-md-1">
                                <div>
                                    <img src="img/logo.png" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div>
                                    <p class="job_para">Lorem Ipsum Dolor</p>
                                    <p class="job_g_para">($ 40) to ( $ 500)</p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="text-center">
                                    <p class="job_b_para"> ( 1 years experience Required)</p>
                                    <div>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="job_g_para d-inline"> Los Angeles, Califonia PO, 455001</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    <a href="" class="btn" data-toggle="modal"
                                        data-target="#exampleModalCenter">Apply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job_content mt-3">
                        <div class="row">
                            <div class="col-md-1">
                                <div>
                                    <img src="img/logo.png" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div>
                                    <p class="job_para">Lorem Ipsum Dolor</p>
                                    <p class="job_g_para">($ 40) to ( $ 500)</p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="text-center">
                                    <p class="job_b_para"> ( 1 years experience Required)</p>
                                    <div>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="job_g_para d-inline"> Los Angeles, Califonia PO, 455001</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    <a href="" class="btn" data-toggle="modal"
                                        data-target="#exampleModalCenter">Apply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job_content mt-3">
                        <div class="row">
                            <div class="col-md-1">
                                <div>
                                    <img src="img/logo.png" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div>
                                    <p class="job_para">Lorem Ipsum Dolor</p>
                                    <p class="job_g_para">($ 40) to ( $ 500)</p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="text-center">
                                    <p class="job_b_para"> ( 1 years experience Required)</p>
                                    <div class=" mt-2">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="job_g_para d-inline"> Los Angeles, Califonia PO, 455001</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    <a href="" class="btn" data-toggle="modal"
                                        data-target="#exampleModalCenter">Apply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job_content mt-3">
                        <div class="row">
                            <div class="col-md-1">
                                <div>
                                    <img src="img/logo.png" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div>
                                    <p class="job_para">Lorem Ipsum Dolor</p>
                                    <p class="job_g_para">($ 40) to ( $ 500)</p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="text-center">
                                    <p class="job_b_para"> ( 1 years experience Required)</p>
                                    <div class=" mt-2">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="job_g_para d-inline"> Los Angeles, Califonia PO, 455001</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    <a href="" class="btn">Apply</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <div>
                                <p class="aftj">Apply For This Job</p>
                            </div>
                            <form action="">
                                <div class="form-group mt-4">
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <input type="text" class="form-control" id="inputPass" name="inputPass"
                                                placeholder="Full name" required="password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-4">
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <input type="email" class="form-control" id="inputemail" name="inputemail"
                                                placeholder="Email Address" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-4">
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <input type="tel" class="form-control" id="inputPno"
                                                name="inpuinputPnotPass" placeholder="Phone Number" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class=" col-md-6 col-xs-6">
                                        <div class="avatar-edit">
                                            <label for="imageUpload">Upload Your CV</label>
                                            <input type="file" id="imageUpload" >
                                        </div>
                                    </div>
                                    <div class="contactus-form-btn col-md-6 col-xs-6 text-right">
                                        <small>Max Size 5mb</small>
                                    </div>
                                </div>
                                <div class="text-center mt-3 mb-3">
                                    <a href="" class="btn w-100" data-toggle="modal" data-target="#exampleModalCenter">Apply</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Sec End Here -->
</section>


<!-- Footer Include Here -->
<?php include 'inc/footer.php';?>
<!-- Footer Include Here -->