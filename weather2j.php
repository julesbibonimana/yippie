<?php
    $userN=$_GET["UserN"];
    $passW=$_GET["passW"];

    session_start();

if($userN=="already"){
    $userN=$_SESSION['savedU'];
    $passW=$_SESSION['savedP'];
}

if ($userN!="already"){
    $_SESSION['savedU']=$userN;
    $_SESSION['savedP']=$passW;
}


$jobj1 = (object)array("year"=>"2017", "state"=>"MA","link"=>"images/jane/2017/download.jpeg");
$jobj2 = (object)array("year"=>"2017", "state"=>"MA","link"=>"images/jane/2017/image.jpeg");
$jobj3 = (object)array("year"=>"2017", "state"=>"MA","link"=>"images/jane/2017/images.jpeg");
$jobj4 = (object)array("year"=>"2017", "state"=>"MA","link"=>"images/jane/2017/new.jpeg");
$jobj5 = (object)array("year"=>"2017", "state"=>"MA","link"=>"images/jane/2017/night.jpeg");
$jobj6 = (object)array("year"=>"2015", "description"=>array("Europe"),"link"=>"images/jane/2015-2016/stange.jpeg");
$jobj7 = (object)array("year"=>"2015", "description"=>array("Europe"),"link"=>"images/jane/2015-2016/shsads.jpeg");
$jobj7 = (object)array("year"=>"2015", "description"=>array("Europe"),"link"=>"images/2015-2016/no.jpeg");
$jobj8 = (object)array("year"=>"2015", "description"=>array("Europe"),"link"=>"images/2015-2016/mf.jpeg");
$jobj9 = (object)array("year"=>"2015", "description"=>array("Europe"),"link"=>"images/jane/2015-2016/jjje.jpeg");
$jobj10= (object)array("year"=>"2015", "description"=>array("Europe"),"link"=>"images/jane/2015-2016/images.jpeg");
$jobj11= (object)array("year"=>"2015", "description"=>array("Europe"),"link"=>"images/jane/2015-2016/download.jpeg");


$jobj12= (object)array("year"=>"2007", "country"=>"England", "link"=>"images/jane/2007-2012/baldyFromMeadow.jpg");
$jobj13= (object)array("year"=>"2007", "country"=>"England", "link"=>"images/jane/2007-2012/van.jpeg");
$jobj14= (object)array("year"=>"2007", "country"=>"England", "link"=>"images/jane/2007-2012/imageshfhf.jpeg");
$jobj15= (object)array("year"=>"2007", "country"=>"England", "link"=>"images/jane/2007-2012/images.jpeg");
$jobj16= (object)array("year"=>"2007", "country"=>"England", "link"=>"images/jane/2007-2012/im.jpeg");
$jobj17= (object)array("year"=>"2007", "country"=>"England", "link"=>"images/jane/2007-2012/husk.jpeg");
$jobj18= (object)array("year"=>"2007", "country"=>"England", "link"=>"images/jane/2007-2012/chil.jpeg");

$jobj19=(object)array("year"=>"2007",  "description"=>array("Europe"),"link"=>"images/jane/2005/ch.jpeg");
$jobj20=(object)array("year"=>"2007",  "description"=>array("Europe"),"link"=>"images/jane/2005/flower.jpeg");
$jobj21=(object)array("year"=>"2007",  "description"=>array("Europe"),"link"=>"images/jane/2005/hfhf.jpeg");
$jobj22=(object)array("year"=>"2007",  "description"=>array("Europe"),"link"=>"images/jane/2005/i.jpeg");
$jobj23=(object)array("year"=>"2007",  "description"=>array("Europe"),"link"=>"images/jane/2005/im.jpeg");
$jobj24=(object)array("year"=>"2007",  "description"=>array("Europe"),"link"=>"images/jane/2005/images.jpeg");
$jobj25=(object)array("year"=>"2007",  "description"=>array("Europe"),"link"=>"images/jane/2005/jiff.jpeg");

                   




$obj4 = (object)array("year"=>"2017", "state"=>"NM", "link"=>"images/baldyFromMeadow.jpg");
$obj5 = (object)array("year"=>"2017",  "state"=>"NM","link"=>"images/canyonLight.jpg");
$obj6 = (object)array("year"=>"2017",  "state"=>"NM","link"=>"images/lowClouds.jpg");
$obj7 = (object)array("year"=>"2017",  "state"=>"NM","link"=>"images/sparPole.jpg");
$obj8 = (object)array("year"=>"2017",  "state"=>"NM","link"=>"images/toothOfTime.jpg");
$obj9 = (object)array("year"=>"2017",  "state"=>"NM","link"=>"images/trailSigns.jpg");
$obj10= (object)array("year"=>"2017",  "state"=>"NM","link"=>"images/upTheCanyon.jpg");

$obj11=  (object)array("year"=>"2016",  "location"=>"Yellowstone National Park","link"=>"images/bison1.th.jpg");
$obj12=  (object)array("year"=>"2016",  "location"=>"Yellowstone National Park","link"=>"images/bisonMud.jpg");
$obj13=  (object)array("year"=>"2016",  "location"=>"Yellowstone National Park","link"=>"images/castleGeyser.jpg");
$obj14=  (object)array("year"=>"2016",  "location"=>"Yellowstone National Park","link"=>"images/grandCanyon4.th2.jpg");
$obj15=  (object)array("year"=>"2016",  "location"=>"Yellowstone National Park","link"=>"images/grandCanyon6.th.jpg");
$obj16=  (object)array("year"=>"2016",  "location"=>"Yellowstone National Park","link"=>"images/grandPrismatic1.th.jpg");
$obj17=  (object)array("year"=>"2016",  "location"=>"Yellowstone National Park","link"=>"images/mtWashburn.jpg");
$obj18=  (object)array("year"=>"2016",  "location"=>"Yellowstone National Park","link"=>"images/yellowstoneLake.jpg");

$obj19=  (object)array("year"=>"2015",  "description"=>array("Cape Cod"," Martha's Vineyard"),"link"=>"images/2015-2016/jawsBridge.th.jpg");
$obj20=  (object)array("year"=>"2015",  "description"=>array("Cape Cod","Martha's Vineyard"),"link"=>"images/2015-2016/mvcma.th.jpg");
$obj21=  (object)array("year"=>"2015",  "description"=>array("Cape Cod"," Martha's Vineyard"),"link"=>"images/2015-2016/seabase.th.jpg");
$obj22=  (object)array("year"=>"2015",  "description"=>array("Cape Cod"," Martha's Vineyard"),"link"=>"images/2015-2016/seabase4.th.jpg");
$obj23=  (object)array("year"=>"2015",  "description"=>array("Cape Cod"," Martha's Vineyard"),"link"=>"images/2015-2016/seabase5.th.jpg");
$obj24=  (object)array("year"=>"2015",  "description"=>array("Cape Cod"," Martha's Vineyard"),"link"=>"images/2015-2016/seabase8.th.jpg");
$obj25=  (object)array("year"=>"2015",  "description"=>array("Cape Cod"," Martha's Vineyard"),"link"=>"images/2015-2016/seabase11.th.jpg");
$obj26=  (object)array("year"=>"2015",  "description"=>array("Cape Cod"," Mlocationeyard"),"link"=>"images/2015-2016/vineyardHaven.th.jpg");
$obj27=  (object)array("year"=>"2015",  "description"=>array("Cape Cod"," Martha's Vineyard"),"link"=>"images/2015-2016/westChop.th2.jpg");
$obj28=  (object)array("year"=>"2015",  "description"=>array("Cape Cod"," Martha's Vineyard"),"link"=>"images/2015-2016/westChop2.th.jpg");

$obj29=  (object)array("year"=>"2007",  "description"=>array("Europe"),"link"=>"images/2007-2012/bayerischeAlpen.th.jpg");
$obj30=  (object)array("year"=>"2007",  "description"=>array("Europe"),"link"=>"images/2007-2012/bonnAltesRathaus.th.jpg");
$obj31=  (object)array("year"=>"2007",  "description"=>array("Europe"),"link"=>"images/2007-2012/bonnUniversity.th.jpg");
$obj32=  (object)array("year"=>"2007",  "description"=>array("Europe"),"link"=>"images/2007-2012/dartmouth4.th.jpg");
$obj33=  (object)array("year"=>"2007",  "description"=>array("Europe"),"link"=>"images/2007-2012/dartmouth6.th.jpg");
$obj34=  (object)array("year"=>"2007",  "description"=>array("Europe"),"link"=>"images/2007-2012/hof2a.th2.jpg");
$obj35=  (object)array("year"=>"2007",  "description"=>array("Europe"),"link"=>"images/2007-2012/HouseBonesRoof.th.jpg");
$obj36=  (object)array("year"=>"2007",  "description"=>array("Europe"),"link"=>"images/2007-2012/magicfountain.th.jpg");
$obj37=  (object)array("year"=>"2007",  "description"=>array("Europe"),"link"=>"images/2007-2012/neuschwanstein.th3.jpg");
$obj38=  (object)array("year"=>"2007",  "description"=>array("Europe"),"link"=>"images/2007-2012/NewHampshire1.th.jpg");
$obj39=  (object)array("year"=>"2007",  "description"=>array("Europe"),"link"=>"images/2007-2012/NewHampshire2.th.jpg");
$obj40=  (object)array("year"=>"2007",  "description"=>array("Europe"),"link"=>"images/2007-2012/tintagel.th.jpg");
$obj41=  (object)array("year"=>"2007",  "description"=>array("Europe"),"link"=>"images/2007-2012/umzug.th.jpg");

$obj42=  (object)array("year"=>"2005",  "country"=>"England","link"=>"images/2005/arundel.th2.jpg");
$obj43=  (object)array("year"=>"2005",  "country"=>"England","link"=>"images/2005/bodiam2.th.jpg");
$obj44=  (object)array("year"=>"2005",  "country"=>"England","link"=>"images/2005/eastbourne.th.jpg");
$obj45=  (object)array("year"=>"2005",  "country"=>"England","link"=>"images/2005/hever.th.jpg");
$obj46=  (object)array("year"=>"2005",  "country"=>"England","link"=>"images/2005/kingstonHill.th.jpg");
$obj47=  (object)array("year"=>"2005",  "country"=>"England","link"=>"images/2005/leeds.th.jpg");
$obj48=  (object)array("year"=>"2005",  "country"=>"England","link"=>"images/2005/lewes2.th.jpg");
$obj49=  (object)array("year"=>"2005",  "country"=>"England","link"=>"images/2005/sheep.th.jpg");
$obj50=  (object)array("year"=>"2005",  "country"=>"England","link"=>"images/2005/southDowns.th.jpg");
$obj51=  (object)array("year"=>"2005",  "country"=>"England","link"=>"images/2005/southover.th.jpg");
$obj52=  (object)array("year"=>"2005",  "country"=>"England","link"=>"images/2005/stPancras.th.jpg");


$jane=array($jobj1,$jobj2,$jobj3,$jobj4,$jobj5,$jobj6,$jobj7,$jobj8,$jobj9,$jobj10,$jobj11,$jobj12,$jobj13,$jobj14,$jobj15,$jobj16,$jobj17,$jobj18,$jobj19,$jobj20,$jobj21,$jobj22,$jobj23,$jobj24,$jobj25);


$joe=array($obj4,$obj5,$obj6,$obj7,$obj8,$obj9,$obj10,$obj12,$obj13,$obj14,$obj15,$obj16,$obj17,$obj18,$obj19,$obj20,$obj21,$obj22,$obj23,$obj24,$obj25,$obj26,$obj27,$obj28,$obj29,$obj30,$obj31,$obj32,$obj33,$obj34,$obj35,$obj36,$obj37,$obj38,$obj39,$obj40,$obj41,$obj42,$obj43,$obj44,$obj45,$obj46,$obj47,$obj48,$obj49,$obj50,$obj51,$obj52);






if ($userN=="Jane" && $passW="jane123" ){
    $user=$jane;
    echo json_encode($user);
}else if($userN=="Joe" && $passW="joe999"){
    $user=$joe;
    echo json_encode($user);  
}else{
    $user="";
    echo json_encode($user); 
}

?>