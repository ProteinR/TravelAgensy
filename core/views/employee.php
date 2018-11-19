<?php

require_once 'core/controllers/connect_db.php';
require_once 'core/models/employee.php';

?>


<div class="table-students table-responsive-md">
    <table id="dtBasicExample" class="table table-striped table-bordered w-auto" >
        <thead>
        <tr>
            <th class="th-sm">ID
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th class="th-sm">ФИО
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th class="th-sm">Телефон
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
        </tr>
        </thead>
        <?
        foreach ($employee as $tr) {
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


