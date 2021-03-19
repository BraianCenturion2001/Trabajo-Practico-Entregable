<?php
//Braian Centurión FAI - 3001
//Introducción a la Programación Orientada a Objetos


//FUNCIONES

function calcularVinos($cant_vinos, $precio_vinos){
    
    //Variable que acumulara la cantidad de vinos
    $acum_cant_total = 0;
    //Variable que acumulara los precios de los vinos
    $acum_precios = 0;

    //Recorremos la cantidad de vinos y sus precios para acumularlos
    for ($i=0; $i<count($cant_vinos); $i++){
        $acum_cant_total = $acum_cant_total + $cant_vinos[$i];
        $acum_precios = $acum_precios + $precio_vinos[$i];
    }

    //Calculamos el promedio de los precios
    $promedio_precio = $acum_precios / count($precio_vinos);

    //Creamos un nuevo arreglo donde almacenaremos la cantidad total de vinos y el promedio de los precios
    $nuevo_arreglo = array();
    $nuevo_arreglo = [
        "cantidad total" => $acum_cant_total,
        "promedio precios" => $promedio_precio,
    ];

    //Retornamos el nuevo arreglos
    return $nuevo_arreglo;
}

function main(){
    //Creamos el arreglo de vinos
    $vinos = array();
    $vinos["malbec"] = array(
            "variedad" => ["Dulce", "Amargo", "Seco"],
            "cantidad" => [18, 3, 7],
            "anio_produccion" => [1880, 1890, 1900],
            "precio" => [300, 400, 500],
    );
    $vinos["cabernetSavignon"] = array(
        "variedad" => ["Dulce", "Semiamargo", "Amargo"],
        "cantidad" => [10, 5, 9],
        "anio_produccion" => [198, 1940, 1903],
        "precio" => [400, 660, 700],
    );
    $vinos["merlot"] = array(
        "variedad" => ["Amargo", "Dulce", "Salado"],
        "cantidad" => [15, 7, 3],
        "anio_produccion" => [1880, 1890, 1900],
        "precio" => [300, 400, 500],
    );
    
    //Calculamos la cantidad total y el promedio de los precios de los vinos según la variedad
    $vinoteca_malbec = calcularVinos($vinos["malbec"]["cantidad"], $vinos["malbec"]["precio"]);
    $vinoteca_cabernet = calcularVinos($vinos["cabernetSavignon"]["cantidad"], $vinos["cabernetSavignon"]["precio"]);
    $vinoteca_merlot = calcularVinos($vinos["merlot"]["cantidad"], $vinos["merlot"]["precio"]);

    //Mostramos todo lo calculado en la función anterior

    echo "Cantidad total de botellas de vinos Malbec : ".$vinoteca_malbec["cantidad total"]."\n";
    echo "Promedio de precios entre vinos Malbec : ".round($vinoteca_malbec["promedio precios"], 2)."\n";
    echo "---------------------------------------------------------------------------- \n";
    echo "Cantidad total de botellas de vinos Cabernet Savignon : ".$vinoteca_cabernet["cantidad total"]."\n";
    echo "Promedio de precios entre vinos Cabernet Savignon : ".round($vinoteca_cabernet["promedio precios"], 2)."\n";
    echo "---------------------------------------------------------------------------- \n";
    echo "Cantidad total de botellas de vinos Merlot : ".$vinoteca_merlot["cantidad total"]."\n";
    echo "Promedio de precios entre vinos Merlot : ".round($vinoteca_merlot["promedio precios"], 2)."\n";
}

//PROGRAMA PRINCIPAL

//Llamamos a la función main
main();

?>