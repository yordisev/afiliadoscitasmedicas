
<?php 
include('includes/header.php');
?>

    <section class="content-header">
    <h1>
        Usuarios
        
      </h1>
    </section>
    
    <section class="content">
<form  action="action/action_user.php?act=insert" method="POST">
    <div class="box box-primary">
    <div class="box-header with-border">
    <h3 class="box-title">Agregar Afiliado</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
  </div>

    <div class="stepwizard">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step">
                        <a href="#step-1" type="button" class="btn btn-primary btn-flat">1</a>
                        <p>Account Details</p>
                    </div>
                    
                    <div class="stepwizard-step">
                        <a href="#step-2" type="button" class="btn btn-default btn-flat" disabled="disabled">2</a>
                        <p>Career</p>
                    </div>
                    
                    <div class="stepwizard-step">
                        <a href="#step-3" type="button" class="btn btn-default btn-flat" disabled="disabled">3</a>
                        <p>Social Media</p>
                    </div>
                    
                    <div class="stepwizard-step">
                        <a href="#step-4" type="button" class="btn btn-default btn-flat" disabled="disabled">4</a>
                        <p>Prueba 4</p>
                    </div>
                </div>
            </div>

            <div class="row setup-content" id="step-1">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3> Account Details</h3>
                            <!-- content go here -->
                            <button class="btn btn-primary nextBtn pull-right" type="button" >Next</button>
                        </div>
                    </div>
               </div>

               <div class="row setup-content" id="step-2">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3> Career</h3>
                            <!-- content go here -->
                            <button class="btn btn-primary nextBtn pull-right" type="button" >Next</button>
                        </div>
                    </div>
               </div>

               <div class="row setup-content" id="step-3">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3> Social Media</h3>
                            <!-- content go here -->
                            <button class="btn btn-primary nextBtn pull-right" type="button" >Next</button>
                        </div>
                    </div>
               </div>
               <div class="row setup-content" id="step-4">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3> Prueba 4</h3>
                            <!-- content go here -->
                            <button class="btn btn-success nextBtn  pull-right" type="submit">Finish!</button>
                        </div>
                    </div>
               </div>
               </div>
               </form>
</section>
<?php include('includes/footer.php');?>
