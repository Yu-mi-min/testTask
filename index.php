<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/src/core.php';
$students = findStudents();
?>

<html>
<head>
    <title>Таблица студентов</title>
    <style>
        .container {
    display: flex;
    justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 50px;
        }

        table {
    border-collapse: collapse;
            width: 700px;
        }

        th, td {
    border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
    background-color: #f2f2f2;
        }

        .image {
    text-align: center;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 40%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
      <div class="image">
        <img src="assets/img.png" alt="Картинка">
          <h2 id="header">Таблица студентов</h2>
      </div>
      <table>
          <thead>
              <tr>
                  <th>Порядковый номер</th>
                  <th>Имя Фамилия</th>
                  <th>Направление обучения</th>
                  <th></th>
              </tr>
          </thead>
          <tbody>
          <?php includeTemplate('/rowStudent.php', ['students'=>$students]);?>
          </tbody>
      </table>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Дополнительная информация</h2>
            <p>Дата рождения: <span id="dob"></span></p>
            <p>Ссылка на личное дело: <a id="link" href="" target="_blank"></a></p>

        </div>
    </div>

    <script>
        function openModal(dob, link) {
            document.getElementById('dob').textContent = dob;
            document.getElementById('link').textContent = link;
            document.getElementById('link').href = link;
            document.getElementById('myModal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('myModal').style.display = 'none';
        }

    </script>
</body>
</html>
