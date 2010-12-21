<?php
$menu = array(
  array(
    'text' =>'Hva skjer',
    'title' =>'Program, nyheter osv.',
    'link'  =>'?tab=Hva%20skjer',
    'children'=>array(
      array(
        'text'=>'Om laget',
        'title'=>'Rask generell info om laget og det som skjer her',
        'link'=>'?tab=Hva%20skjer'
      ),
      array(
        'text'=>'Kalender',
        'title'=>'Vis hele kalenderen, med mulighet for å klikke seg inn på det man har lyst til',
        'link'=>'?tab=Hva%20skjer'
      ),
      array(
        'text'=>'Facebook side',
        'title'=>'Vår facebook side der du kan vise vennene dine at du liker laget og få korte oppdateringer',
        'link'=>'http://www.facebook.com/pages/Trondheim-Norway/Trondheim-Kristelige-Studentlag-TKS/106201639433925'
      ),
    )
  ),
  array(
    'text'  =>'Hvor',
    'title' =>'Infoside om hvor du finner oss',
    'link'  =>'?tab=Hvor',
    'children'=>array(
      array(
        'text'=>'Gule Sider Kart',
        'title' => 'Vis Berg Prestegård på kart fra gulesider.no',
        'link' => 'http://kart.gulesider.no?q=Jonsvansveien%2045',  
      ),
      array(
        'text' => 'Bildeguide',
        'title' => 'Vår egen bildeguide for å finne fram til Berg Prestegård fra ulike steder i byen',
        'link' => '?tab=hvor',   
      ),
      array(
        'text' => 'Utleie av Berg Prestegård',
        'title'=>'Info om utlevirksomheten vår',
        'link' => '?tab=Hvor',  
      ),
    )
  ),
array(
  'text'  =>'Hvordan',
  'title' =>'For den som er litt mer interessert i laget',
  'link'  =>'?tab=Hvordan',
  'children'=>array(
    array(
      'text'=>'Om laget',
      'title' => 'Vis Berg Prestegård på kart fra gulesider.no',
      'link' => 'http://kart.gulesider.no?q=Jonsvansveien%2045',  
    ),
    array(
      'text' => 'Arbeidsgrupper',
      'title' => 'Alt som gjøres i laget gjøres i ulike små arbeidsgrupper som har ansvar for ulike ting, noen er store mens andre har god mulighet for å bare stikke innom en dag',
      'link' => '?tab=Hvordan',   
    ),
    array(
      'text' => 'Lenker',
      'title' => 'Andre kristne organsiasjoner i Trondheim',
      'link' => '?tab=Lenker',  
    ),
  )
),
array(
  'text'  =>'Medlem',
  'title' =>'Medlemssider, der du kan se medlemslister og der de med tilgang kan administrere ulike ting',
  'link'  =>'?tab=Medlem',
  'children'=>array(
    array(
      'text'=>'Endre profil',
      'title' => 'Se og rediger infoen vi har lagret om deg',
      'link' => '?tab=Medlem',  
    ),
    array(
      'text' => 'Epostlister',
      'title' => 'Mye innformasjon i laget går på våre ulike epost lister, så her er det bare å melde seg på så mange som mulig',
      'link' => '?tab=Medlem',   
    ),
    array(
      'text' => 'Utleie av Berg Prestegård',
      'title'=>'Info om utlevirksomheten vår',
      'link' => '?tab=Medlem',  
    ),
  )
),
);
?>