<?php
require_once 'core/views/header.php';

//require_once 'core/controllers/connect_db.php';
require_once 'core/models/editClient.php';


?>


<div class="container my-5">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card">
                <!--Card content-->
                <div class="card-body">
                    <form name="client-data" method="post" action="../../core/models/addClient.php" class="" >
                        <!-- Heading -->
                        <h3 class="dark-grey-text text-center">
                            <strong>Данные клиента:</strong>
                        </h3>
                        <hr>

                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" class="form-control" name="fio" placeholder="ФИО" id="form11" >
                            <div class="invalid-tooltip">
                                Пожалуйста, введите ФИО.
                            </div>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-book prefix grey-text"></i>
                            <input type="text" id="form3" name="passport" placeholder="Пасспорт" class="form-control">
                        </div>

                        <div class="md-form">
                            <i class="fa fa-phone prefix grey-text"></i>
                            <input type="text" id="form3" name="personal_phone" placeholder="Телефон" class="form-control">
                        </div>


                        <div class="text-center">
                            <button class="btn btn-yellow waves-effect waves-light black-text">Добавить</button>
<!--                            <hr>-->

                        </div>
                    </form>
                </div>
            </div>
        </div>
<!--        <div class="col-lg-4"></div>-->
    </div>


