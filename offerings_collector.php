<?php
include('includes/init.php');

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $money = round(filter_input(INPUT_POST, 'money', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION), 2);
    $category_id = filter_input(INPUT_POST, 'category_id', FILTER_SANITIZE_NUMBER_INT);
    if ($category_id) {
      $sql = "SELECT offerings.id as id, desc, cost, companies.name as company_name, companies.url as company_url FROM offerings INNER JOIN categories ON offerings.category_id = categories.id INNER JOIN companies ON offerings.company_id = companies.id WHERE categories.id = :categories_id;";
      $params = array(
                  ':categories_id' => $category_id
                );
      $offerings = exec_sql_query($db, $sql, $params)->fetchAll();
    }
    if(!$money) {
      $sql = "SELECT donation_fund FROM users_finance WHERE user_id = :user_id;";
      $params = array(
                  ':user_id' => get_user_id()
                );
      $money = exec_sql_query($db, $sql, $params)->fetchAll(PDO::FETCH_COLUMN, 0)[0];
    }
    echo $money;
    foreach($offerings as $offering) {
?>
    <div class="offering-card" data-id="<?php echo $offering['id']?>">
      <?php echo formatDescriptionString($offering['desc'], $money/$offering['cost']) ?>
    </div>
    <div class="offering-card" data-id="<?php echo $offering['id']?>">
      <?php echo formatDescriptionString($offering['desc'], $money/$offering['cost']) ?>
      Provided by <a target="_blank" href="<?php echo $offering['company_url']?>"><?php echo $offering['company_name'] ?></a>
    </div>
<?php
  }
}
?>
