<?php include('header.php'); ?>
<html>

    <head></head>
    <body class="" style="background-color: whitesmoke;">
        <div class="container" style="margin-top: 10px;">

            <?php
            $msg = $this->session->userdata('user_name');
            ?>
            <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong> Welcome <?= $msg; ?> Good to see you..</strong>

            </div>

            <a href="<?= base_url('Admin/adduser'); ?>" class="btn btn-secondary btn-lg">Add Articles</a><br><br>

<?php
$messages = $this->session->flashdata('msg');

if ($messages) {
    $msg_class = $this->session->flashdata('msg_class');
    ?>
                <div class="alert <?= $msg_class; ?> alert-dismissible fade show" role="alert">
                    <strong>Message : </strong><?= $messages; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

<?php } ?>
            <table class="table table-secondary table-striped text-center">
                <thead>
                    <tr class="btn-danger">
                        <td colspan="4"><b><i class=""></i>Your Records</b></td>

                    </tr>
                    <tr>
                        <td><b>SL</b></td>
                        <td><b>Article Title</b></td>
                        <td><b>Edit</b></td>
                        <td><b>Delete</b></td>



                    </tr>
                </thead>
                <tbody style="">
<?php
if (count($articles)) {
    $i = $this->uri->segment(3);

    foreach ($articles as $art) {
        ?>
                            <tr>
                                <td><b><?php echo 'Article' . ' ' . ++$i; ?></b></td>
                                <td><b><?php echo $art->article_title; ?></b></td>
                                <td>
        <?=
        form_open('Admin/editarticles'),
        form_hidden('article_id', $art->article_id),
        form_submit(['name' => 'submit', 'value' => 'Edit', 'class' => 'btn btn-primary']),
        form_close();
        ?>

                                <td>
                                    <?=
                                    form_open('Admin/delarticles'),
                                    form_hidden('article_id', $art->article_id),
                                    form_submit(['name' => 'submit', 'value' => 'Delete', 'class' => 'btn btn-danger']),
                                    form_close();
                                    ?>
                                </td>


                            </tr>
                                <?php
                                }
                            } else {
                                ?>
                        <tr class="">
                            <td colspan="4"><b>No records available</b></td>
                        </tr>
                    <?php } ?>
                </tbody>

                <tfoot></tfoot>

            </table>
<?= $this->pagination->create_links(); ?>


        </div>         
    </body>
</html>

<?php include('footer.php'); ?>