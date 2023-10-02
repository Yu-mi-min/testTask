<?php
    if ($students !== false) {
          foreach ($students as $student) { ?>
              <tr>
                  <td><?=$student['id']?></td>
                  <td><?=$student['name']?></td>
                  <td><?=$student['department']?></td>
                  <td><button onclick="openModal('<?=$student['birthdate']?>', '<?=$student['link']?>')">Дополнительная информация</button></td>
              </tr>
    <?php        }
} ?>