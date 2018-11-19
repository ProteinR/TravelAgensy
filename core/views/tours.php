<?php

require_once 'core/controllers/connect_db.php';
require_once 'core/models/tours.php';

?>

    <div class="table-students table-responsive-md">
        <table id="dtBasicExample" class="table table-striped table-bordered w-auto" >
            <thead>
            <tr>
                <th class="th-sm">ID
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Тур
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Дата отправления
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Дата прибытия
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Город отправления
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Кол-во дней
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Кол-во ночей
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Локация
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Всего мест
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Скидка (горячий тур)
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>

            </tr>
            </thead>
            <?
            foreach ($results as $tr) {
                echo "<tr>";
                foreach ($tr as $v) {
                    echo "<td>";
                    echo $v;
                    echo "</td>";
                }
                echo "</tr>";
            }

            ?>
        </table>

