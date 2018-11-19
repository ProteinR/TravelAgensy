<?php
require_once 'core/controllers/connect_db.php';
require_once 'core/models/clients.php';

?>
<div class="bg ">

    <div class="table-students table-responsive-md d-flex justify-content-center">
    <table id="dtBasicExample" class="table table-striped table-bordered w-auto" >
        <thead>
        <tr>

            <th class="th-sm">ФИО
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th class="th-sm">Пасспорт
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>
            <th class="th-sm">Телефон
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
            </th>

        </tr>
        </thead>
        <?

        foreach ($clients as $client) {
            $id = $client['id'];
            echo "<tr>";
            echo '<td>'.$client['fio'].'</td>';
            echo '<td>'.$client['passport'].'</td>';
            echo '<td>'.$client['phone'].'</td>';
            echo "<td>
<a onclick=\"return confirm('Вы уверены, что хотите удалить клиента ?')\" href='editClients/?id=$id' role='button'  class='btn btn-danger waves-effect btn-sm'>x</a>
<a href='editClients/?id=$id' role='button'  class='btn btn-primary waves-effect btn-sm'><i class='fa fa-pencil' aria-hidden=true></i>' </a>

</td>";
            echo '</tr>';
        }





//        foreach ($clients as $tr) {
//            echo "<tr>";
//            foreach ($tr as $v) {
//                echo "<td>";
//                echo $v;
//                echo "</td>";
//            }
//            echo "<td>
//                    <a href='' class='btn-sm red'>x</a>
//                    <a href='' class='btn-sm blue'> <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
// .</a>
//                </td>";
//            echo "</tr>";
//        }

        ?>
    </table>

</div>



