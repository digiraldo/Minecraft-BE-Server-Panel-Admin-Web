<?php 

function getItems() {
    /* return json_decode(file_get_contents(__DIR__.'/items.json'), true); */
    return json_decode(file_get_contents(__DIR__.'/../../config/items.json'), true);
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
    $items = getItems();

     $items[] = $data;

     putJson($items);

     return $data;
}

function updateItem($data, $id) {
    $updateItem = [];
    $items = getItems();
    foreach ($items as $i => $item) {
        if ($item['id'] == $id) {
            /* $items[$i] = $data; */
            $items[$i] =  $updateItem = array_merge($item, $data);
            /* $items[$i] = array_merge($item, $data); */
            /* return $item; */
        }
    }
    /* echo '<pre>'; var_dump($items); echo '</pre>'; */
    /* file_put_contents(__DIR__.'/../../config/data.json', json_encode($items, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)); */
    putJson($items);

    return $updateItem;
}

function deleteItem($id) {
    $items = getItems();
    foreach ($items as $i => $item) {
        if ($item['id'] == $id) {
            array_splice($items, $i, 1);
        }
        /* echo '<pre>'; print_r($items); echo '</pre>'; exit; */  
    }
    putJson($items);
}



function uploadImage($file, $item) {
    if (isset($_FILES['img']) && $_FILES['img']['name']) {
        if (!is_dir(__DIR__ . "/../includes/img/items")) {
            mkdir(__DIR__ . "/../includes/img/items");
        }
        // Obtener la extensión de archivo del nombre de archivo
        $itemImgName = $file['name'];
        /* $directorio = "/../includes/img/items/"; */
    
        // Busque los dos puntos en el nombre del id de minecraft
        $pointsPosition = strpos($item['id'], ':');
        // Tome la subcadena desde la posición de los dos puntos hasta el final de la cadena
        $nameId = substr($item['id'], $pointsPosition + 1);
    
    
        // Busque el punto en el nombre del archivo subido
        $dotPosition = strpos($itemImgName, '.');
        // Tome la subcadena desde la posición del punto hasta el final de la cadena del archivo
        $extencion = substr($itemImgName, $dotPosition + 1);
    
        /* move_uploaded_file($_FILES['img']['tmp_name'], __DIR__ . $directorio . $itemImgName); */
        /* move_uploaded_file($file['tmp_name'], __DIR__ . "/../includes/img/items/${item['id']}.$extencion"); */
        move_uploaded_file($file['tmp_name'], __DIR__ . "/../includes/img/items/${nameId}.$extencion");
        /* echo 'Ubicacion'; echo '<br>'; echo '<pre>'; print_r($directorio.$nameId.'.'.$extencion); echo '</pre>'; 
        echo '$item["id"]'; echo '<br>'; echo '<pre>'; print_r($item['id']); echo '</pre>'; */ 
    

        $item['extension'] = $extencion;
        $item['img'] = $nameId . '.' . $extencion;
        updateItem($item, $item['id']);
    }
}

/* function getClass() {
    return json_decode(file_get_contents(__DIR__.'/../../config/idclass.json'), true);
    exit;
} */

/*$class = json_decode(file_get_contents(__DIR__.'../../../config/idclass.json'), true);
 echo '<pre>';
var_dump($class);
echo '</pre>'; */


function putJson($items) {
    file_put_contents(__DIR__.'/../../config/items.json', json_encode($items, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
};

?>