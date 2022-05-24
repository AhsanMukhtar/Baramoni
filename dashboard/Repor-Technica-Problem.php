<?php include 'inc/app.php'; ?>
<!-- css file starts here -->
<link rel="stylesheet" href="css/edit-profile.css">
<!-- css file starts here -->
<div class="wrapper">
    <?php include 'inc/sidebar.php' ?>
    <div class="main">
        <?php include 'inc/navbar.php' ?>

        <main class="content">
            <div class="container-fluid p-0">
                <section class="profile-form-sec">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="profile-form-wrapper">
                                <div class="profile-form-heading-wrapper">
                                    <h3>Report Technical Problem</h3>
                                </div>
                                <form action="" class="mb-5">
                                    <div class="form-group">
                                        <label for="">Your email address*</label>
                                        <input type="text" placeholder="Johndoe@gmail.com" class="form-control">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="">Reason For Enquiry*</label>
                                            <select name="" class="form-control" id="">
                                                <option value="Paris France" selected>Paris France</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="">Subject*</label>
                                            <input type="text" placeholder="Type here" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Description*</label>
                                        <textarea name="" class="form-control" placeholder="Type here" id="" cols="30" rows="8"></textarea>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <p>Please enter the details of your request. A member of our support staff will respond as soon as possible</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label for="Attachments*">Attachments*</label>
                                            <input id="demo" type="file" name="files" accept=".jpg, .png, image/jpeg, image/png" multiple>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-12 text-right">
                                            <button class="btns sub-btn">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>

        <?php include 'inc/footer.php'; ?>
    </div>
</div>