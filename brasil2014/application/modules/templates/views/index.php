<?php
$this->load->view('header');
?>
<div class="header">
    <div class="container ">
        <div class="row fondo-header ">
<?php
echo $cabecera;
?>
        </div>
    </div>
</div>

    <div class="container">
        <!-- Cabecera-->
        <div class="row blanco">
            <div class="col-md-8" id="content">
               <?php
                echo $content;
                ?>
            </div>
            <div class="col-md-4 " id="sidebar">
                <?php
                echo $sidebar;
                ?>
            </div>
        </div>
    </div>
    <!-- /container -->

<?php
echo $footer;
$this->load->view('footer');
?>