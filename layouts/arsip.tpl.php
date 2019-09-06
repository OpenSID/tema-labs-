<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php $this->load->view("$folder_themes/commons/head_start.php"); ?>
<?php $this->load->view("$folder_themes/commons/head_end.php"); ?>
<?php $this->load->view("$folder_themes/commons/page_start.php"); ?>
<div class="content content-full">
    <!-- Dummy content -->
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-sm-12">
                    <?php $this->load->view("$folder_themes/partials/statistik/all_statistik.php"); ?>
                </div>
                <div class="col-sm-12">
                    <div class="block">
                    <?php $this->load->view("$folder_themes/partials/other/arsip.php"); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                        <div class="block-content">
                            <?php $this->load->view("$folder_themes/layouts/widget.php"); ?>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Dummy content -->
</div>
<?php $this->load->view("$folder_themes/commons/page_end.php"); ?>
<?php $this->load->view("$folder_themes/commons/footer_start.php"); ?>
<?php $this->load->view("$folder_themes/commons/footer_end.php"); ?>