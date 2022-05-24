<?php include 'inc/app.php'; ?>
<div class="wrapper">
    <?php include 'inc/sidebar.php' ?>
    <div class="main">
        <?php include 'inc/navbar.php' ?>

        <main class="content">
            <div class="container-fluid p-0">
                <section class="dashboard">

                    <div class="row Enquiry pt-5">
                        <div class="col-lg-12">
                            <div class="content-wrapper">
                                <h3>All Enquiries</h3>
                                <div class="enquire-table-wrapper">
                                    <div class="form-group row pb-4">
                                        <div class="col-lg-3">
                                            <select name="" class="form-control" id="">
                                                <option value="Type" selected>Type</option>
                                                <option value="Type">Type</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-3">
                                            <input type="date" class="form-control" name="" id="">
                                        </div>
                                    </div>
                                    <div class="table-wrapper">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col"># Enquiry ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Contact info</th>
                                                    <th scope="col">Property Address</th>
                                                    <th scope="col">Country</th>
                                                    <th scope="col">IP</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="id">#1477</td>
                                                    <td class="name">John Doe</td>
                                                    <td class="contact"><a href="tel:+93860979512">+93860979512</a>
                                                        <a href="mailto:ayhansaygin6@gmail.com">ayhansaygin6@gmail.com</a>
                                                    </td>
                                                    <td class="address">@23 market, Italy
                                                        wd3 3pa</td>
                                                    <td class="country">UK</td>
                                                    <td class="ip_address">162.158.78.128</td>
                                                    <td class="detail-btn">
                                                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">View Details</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="id">#1477</td>
                                                    <td class="name">John Doe</td>
                                                    <td class="contact"><a href="tel:+93860979512">+93860979512</a>
                                                        <a href="mailto:ayhansaygin6@gmail.com">ayhansaygin6@gmail.com</a>
                                                    </td>
                                                    <td class="address">@23 market, Italy
                                                        wd3 3pa</td>
                                                    <td class="country">UK</td>
                                                    <td class="ip_address">162.158.78.128</td>
                                                    <td class="detail-btn">
                                                        <button class="btn">View Details</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="id">#1477</td>
                                                    <td class="name">John Doe</td>
                                                    <td class="contact"><a href="tel:+93860979512">+93860979512</a>
                                                        <a href="mailto:ayhansaygin6@gmail.com">ayhansaygin6@gmail.com</a>
                                                    </td>
                                                    <td class="address">@23 market, Italy
                                                        wd3 3pa</td>
                                                    <td class="country">UK</td>
                                                    <td class="ip_address">162.158.78.128</td>
                                                    <td class="detail-btn">
                                                        <button class="btn">View Details</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="id">#1477</td>
                                                    <td class="name">John Doe</td>
                                                    <td class="contact"><a href="tel:+93860979512">+93860979512</a>
                                                        <a href="mailto:ayhansaygin6@gmail.com">ayhansaygin6@gmail.com</a>
                                                    </td>
                                                    <td class="address">@23 market, Italy
                                                        wd3 3pa</td>
                                                    <td class="country">UK</td>
                                                    <td class="ip_address">162.158.78.128</td>
                                                    <td class="detail-btn">
                                                        <button class="btn">View Details</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>

        <?php include 'inc/footer.php'; ?>
    </div>
</div>
<!-- Modal -->
<div class="modal fade fst-modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Enquiry #1477 for Property for Sale Id# 1497956 </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <select name="" class="form-control" id="">
                    <option value="Verified Status !" selected>Verified Status !</option>
                </select>
                <h4>Message</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.</p>
                <div class="date-and-type-wrapper">
                    <h6>Date & Time :<span>04-12 -2017</span></h6>
                    <h6>Type :<span>End Terraced House</span></h6>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn form-control">Mark As Spam</button>
            </div>
        </div>
    </div>
</div>