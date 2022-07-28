<?php 

function getItems() {
    /* return json_decode(file_get_contents(__DIR__.'/items.json'), true); */
    return json_decode(file_get_contents(__DIR__.'/../../config/data.json'), true);
    /* $items = json_decode(file_get_contents(__DIR__.'/items.json'), true);
    echo '<pre>';
    var_dump($items);
    echo '</pre>'; */
    exit;
}

function getItemsById($id) {
    $items = getItems();
    foreach ($items as $item) {
        if ($item['id'] == $id) {
            return $item;
        }
    }
    return null;
}

function createItem($data) {

}

function updateItem($data, $id) {

}
function deleteItem($id) {

}



/* function getClass() {
    return json_decode(file_get_contents(__DIR__.'/../../config/idclass.json'), true);
    exit;
} */

$class = json_decode(file_get_contents(__DIR__.'../../../config/idclass.json'), true);
/* echo '<pre>';
var_dump($class);
echo '</pre>'; */

?>