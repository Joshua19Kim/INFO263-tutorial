<?php
require_once 'login.php';
require_once 'Item.php';

/**
 * Create connection to the database
 *
 * @return PDO (PHP Data Objects) provides access to the database
 */
function openConnection()
{
    require 'login.php';

    try {
        $pdo = new PDO(
            CONNECTION_STRING,
            CONNECTION_USER,
            CONNECTION_PASSWORD,
            CONNECTION_OPTIONS
        );
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }

    return $pdo;
}

/**
 * Queries the database for all shopping list items.
 *
 * For each result returned from the query create a new Item and add to an array of Items.
 * Order the results returned by name.
 *
 * @return array list of Items
 */
function getAllItems()
{
    // connect to the database
    $pdo = openConnection();

	$items = array();

	////////
	// !!! In Ampps, please confirm that PHP is set to version 7.1 or higher.
    //     Otherwise this can give exceptions with connecting to the SQL database.
    //     This can be set by clicking the squares icon left of the globe, the "Change PHP Version".
    ///////
    $query = "SELECT * FROM shopping_list ORDER BY name";
    $result = $pdo->query($query);
    $pdo = null;

    while( $row = $result-> fetch())
    {
        $name = htmlspecialchars($row['name']);
        $price = htmlspecialchars($row['price']);
        $quantity = htmlspecialchars($row['quantity']);
        $item = new Item($name, $price, $quantity);
        array_push($items, $item);
    }

	return $items;
}

/**
 * Inserts an item into the shopping_list table.
 *
 * @param Item $item The item that will be added
 */
function insertItem($item)
{
    $pdo = openConnection();
    $query = "INSERT INTO shopping_list (name, price, quantity) VALUES (:name, :price, :quantity)";
    $stmt = $pdo->prepare($query);
    $result = $stmt->execute([
        ':name' => $item->getName(),
        ':price' => $item->getPrice(),
        ':quantity' => $item->getQuantity()
    ]);
    $pdo = null;
}

/**
 * Delete all items with a give item name.
 *
 * @param string $item_name The name of the item(s) to remove.
 */
function deleteItem($item_name)
{

    $pdo = openConnection();

    try {
        $query = "DELETE FROM shopping_list WHERE name = '$item_name'";
        $pdo->exec(quote($query));
        $pdo = null;
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }

}

/**
 * Clears all items in the shopping_list table.
 */
function clearShoppingList()
{
    $pdo = openConnection();
    $pdo->exec("DELETE FROM shopping_list");
    $pdo = null;
}

/**
 * Echos an mysql error.
 *
 * @param string $errorMessage The error message passed.
 */
function fatalError($errorMessage)
{
    echo "<p><strong>Something went wrong: $errorMessage</strong></p>";
}
?>
