<?php require_once('controller.php') ?>

<?php require_once('header.php') ?>

    <main role="main">

      <section class="">

<div class="container-fluid">
        <div class="row">

            <!--Tabela 1-->
            <div class="col-lg-6 col-md-12 col-sm-12 ">
                <table class="table table-striped table-responsive-md">
                    <thead class="thead-dark">
                        <tr>
                        <td id="cidade" colspan="4" class="text-center" >Clientes</td>

                        </tr>
                    </thead>
                    <tbody>
                    <?php $id = 1;  ?>
                        <?php foreach ($dataArray as $row) : ?>
                                               <tr>

                                               
                            <td id="r<?php echo $id; ?>">
                                <?=implode('</td>'.PHP_EOL.'<td id=r'.$id.'>', $row), '</td>', PHP_EOL; 
                                
                            
                                
                                ?>
                        </tr>
                        <?php

                     
                        $id = $id + 1; 
                       
                            endforeach;
                            
                           // var_dump($dataArray);
                            ?>
                    </tbody>
                </table>

            </div>
            <!--Fim Tabela 1-->

            <!--Tabela 2-->
            <div class="col-lg-6 col-md-12 col-sm-12 ">
                <table class="table table-striped table-responsive-md">
                    <thead class="thead-dark">
                        <tr>
                           <td id="cidade-azul" colspan="9" class="text-center" >Clientes</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $id = 1;  ?>
                        <?php foreach ($dataArrayClientes as $row) : ?>
                        
                        <tr>
                           
                            <td id="r<?php echo $id; ?>">
                                <?=implode('</td>'.PHP_EOL.'<td id=r'.$id.'>', $row), '</td>', PHP_EOL; 
                                
                            
                                
                                ?>
                        </tr>
                        <?php 
                          $id = $id + 1; 
                                endforeach;
                                ?>
                    </tbody>
                </table>

            </div>
            <!--Fim Tabela 2-->

        </div>


        <br>

       

    </div>


        

        </section>

    </main>
    <?php require_once('footer.php') ?>

   