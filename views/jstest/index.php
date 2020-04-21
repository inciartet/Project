<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>JS Test</h1>
  <script>
    console.log("Hello World!");

    var dogs = {
        Fido: "Mutt",  Hunter: "Doberman",  Snoopie: "Beagle"
    };
    var myDog = "Hunter";
    var myBreed = dogs[myDog];
    console.log(myBreed); // "Doberman"

    var someObj = {
      propName: "John"
    };
    function propPrefix(str) {
      var s = "prop";
      return s + str;
    }
    var someProp = propPrefix("Name"); // someProp now holds the value 'propName'
    console.log(someObj[someProp]); // "John"

  </script>
