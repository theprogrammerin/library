<?php

  $FINE_AMT = "0.25";

  include('config.php');

  echo "Cron for updating daily fine.\n";

  $query = "SELECT *, DATEDIFF(NOW(), due_date) AS due_days, (DATEDIFF(CURDATE() - INTERVAL 1 DAY, due_date)* $FINE_AMT) AS fine FROM `book_loans` WHERE date_in = '0000-00-00' AND due_date < NOW()";
  $result = mysql_query($query);
  $num = mysql_num_rows($result);
  echo "Found $num pending fines\n";

  while ($row = mysql_fetch_array($result)) {

    print "Updating fine for loan_id #{$row['loan_id']} fine {$row['fine']}\n";

    $query = "SELECT * FROM fines WHERE loan_id = {$row['loan_id']} AND paid = 0";
    $rs = mysql_query($query);

    $query = "INSERT INTO fines (loan_id, fine_amt, paid) VALUES ( {$row['loan_id']}, {$row['fine']}, 0 )";
    if(mysql_num_rows($rs) > 0) {
      $query = "UPDATE fines SET fine_amt = {$row['fine']} WHERE loan_id = {$row['loan_id']} AND paid = 0";
    }

    echo "Updated\n";

    mysql_query($query);

  }