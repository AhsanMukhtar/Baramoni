<?php include 'inc/app.php'; ?>
<style>
    .enquire-table-wrapper .table-wrapper{
        padding-top: 0px;
        border-top: 0px;
    }
</style>
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
                                <h3>My Invoices</h3>
                                <div class="enquire-table-wrapper">
                                    <div class="table-wrapper">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col"># Enquiry ID</th>
                                                    <th scope="col">Invoice Date</th>
                                                    <th scope="col">Sub Total</th>
                                                    <th scope="col">Discount</th>
                                                    <th scope="col">Net Total</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="id">#1477</td>
                                                    <td class="name">2018-05-22</td>
                                                    <td class="contact">EUR 23.99
                                                    </td>
                                                    <td class="address">EUR 0</td>
                                                    <td class="country">EUR 23.99</td>
                                                    <td class="detail-btn">
                                                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">Print</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="id">#1477</td>
                                                    <td class="name">2018-05-22</td>
                                                    <td class="contact">EUR 23.99
                                                    </td>
                                                    <td class="address">EUR 0</td>
                                                    <td class="country">EUR 23.99</td>
                                                    <td class="detail-btn">
                                                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">Print</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="id">#1477</td>
                                                    <td class="name">2018-05-22</td>
                                                    <td class="contact">EUR 23.99
                                                    </td>
                                                    <td class="address">EUR 0</td>
                                                    <td class="country">EUR 23.99</td>
                                                    <td class="detail-btn">
                                                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">Print</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="id">#1477</td>
                                                    <td class="name">2018-05-22</td>
                                                    <td class="contact">EUR 23.99
                                                    </td>
                                                    <td class="address">EUR 0</td>
                                                    <td class="country">EUR 23.99</td>
                                                    <td class="detail-btn">
                                                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">Print</button>
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