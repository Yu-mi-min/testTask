
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
            width: 500px;
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
    </style>
</head>
<body>
    <div class="container">
      <div class="image">
        <img src="image.jpg" alt="Картинка">
      </div>
      <table>
          <thead>
              <tr>
                  <th>Порядковый номер</th>
                  <th>Имя Фамилия</th>
                  <th>Направление обучения</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>1</td>
                  <td>Иван Иванов</td>
                  <td>Физика</td>
              </tr>
              <tr>
                  <td>2</td>
                  <td>Анна Петрова</td>
                  <td>Математика</td>
              </tr>
              <!-- Добавьте остальные строки с данными студентов -->
          </tbody>
      </table>
    </div>
</body>
</html>