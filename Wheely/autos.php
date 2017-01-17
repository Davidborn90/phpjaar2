<?php

/**
 * Created by PhpStorm.
 * User: David
 * Date: 28-11-2016
 * Time: 08:50
 */
class autos
{
    var $merk;
    var $model;
    var $url;
    var $prijs;
    function __construct($carbrand, $carmodel, $carvalue, $foto){
        $this ->merk=$carbrand;
        $this ->model=$carmodel;
        $this ->prijs=$carvalue;
        $this ->url=$foto;
    }
    function getBrand(){
        return $this ->merk;
    }
    function getModel(){
        return $this ->model;
    }
    function getPrijs(){
        return $this ->prijs;
    }
    function getFoto(){
        return $this ->url;
    }
    function setBrand($carbrand){
        $this ->merk=$carbrand;
    }
    function setModel($carmodel){
        $this ->model=$carmodel;
    }
    function setPrijs($carvalue){
        $this ->prijs=$carvalue;
    }
    function setFoto($foto){
        $this ->url=$foto;
    }
    function getPrijsFormat(){
        $tempprijs = number_format($this->prijs, 2, ',', '.');
        $tempprijs = substr_replace($tempprijs, '--', -2);
        return $tempprijs;
    }
}
class autoarray{
    var $array = array();
    function __construct(){
        $ford1 = new autos("Ford", "Fiesta", 23999, "http://images.car.bauercdn.com/upload/11855/images/1040x585/1fordfiesta125drive.jpg?mode=pad");
        $this->array[] = $ford1;
        $ford2 = new autos("Ford", "Focus", 18995, "http://buyersguide.caranddriver.com/media/assets/submodel/5493.jpg");
        $this->array[] = $ford2;
        $opel1 = new autos("Opel", "Astra", 14895, "https://upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Opel_Astra_(4559359674).jpg/280px-Opel_Astra_(4559359674).jpg");
        $this->array[] = $opel1;
        $opel2 = new autos("Opel", "Insignia", 65450, "http://wagenegaw.com/img/spec/mdf/opel-insignia-sedan-2008.jpg");
        $this->array[] = $opel2;
        $subaru1 = new autos("Subaru", "Forester", 34750, "http://buyersguide.caranddriver.com/media/assets/submodel/7145.jpg");
        $this->array[] = $subaru1;
        $subaru2 = new autos("Subaru", "Impreza", 28345, "http://images.pistonheads.com/nimg/33354/hawkeye_impreza_004-L.jpg");
        $this->array[] = $subaru2;
        $mercedes1 = new autos("Mercedes", "E 63", 110995, "http://media.caranddriver.com/images/16q4/671591/2018-mercedes-amg-e63-photos-and-info-news-car-and-driver-photo-672015-s-450x274.jpg");
        $this->array[] = $mercedes1;
        $mercedes2 = new autos("Mercedes", "CLA 45", 190780, "https://i.ytimg.com/vi/wkOfLn5vZTU/hqdefault.jpg");
        $this->array[] = $mercedes2;
        $ferrari1 = new autos("Ferrari", "612 GTO", 350500, "http://o.aolcdn.com/dims-global/dims3/GLOB/legacy_thumbnail/750x422/quality/95/http://www.blogcdn.com/www.autoblog.com/media/2010/06/barcelona0007layer-1.jpg");
        $this->array[] = $ferrari1;
        $citroen1 = new autos("Citroen", "2CV", 459, "http://www.speeddoctor.net/media/2012/06/Citroen-2CV6-Club_01.jpg");
        $this->array[] = $citroen1;
        $mini1 = new autos("Mini", "Cooper", 34495, "http://static.usnews.rankingsandreviews.com/images/Auto/izmo/337348/2012_mini_cooper_hardtop_angularfront.jpg");
        $this->array[] = $mini1;
    }
    function getList(){
        return $this ->array;
    }

}