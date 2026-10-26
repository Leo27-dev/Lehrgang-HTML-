<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formtester</title>
  <style>
    body {
      font-family: sans-serif;
    }
    table {
      border-collapse: collapse;
      border: 1px solid #333;
    }
    td:first-child {
      font-style: italic;
    }
    th, td {
      padding: 3px;
      border: 1px solid #333;
    }
  </style>
</head>
<body>
  <h1>Formularinhalte anzeigen</h1>
  <?php

  if(!empty($_GET)) {
    $method = 'GET';
    $formarray = $_GET;
  } else {
    $method = 'POST';
    $formarray = $_POST;
  }

  ?>

  <p>Das Formular wurde per <?= $method; ?> versendet.</p>

  <table>
    <?php foreach($formarray as $field => $val): ?>
      <tr>
        <td><?php echo $field ?></td>
        <?php if( is_array($val) ): ?>         
          <td><?php echo implode(', ',$val); ?></td>         
        <?php else: ?>
          <td><?php echo nl2br($val, false) ?></td>
        <?php endif; ?>
      </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>