<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styling.css">
    <title>Quiz</title>
</head>
<body>
<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>>"
<form action="index.php" method="post">

    <?php
    echo "<h1>Life Sciences Quiz</h1><br>";
    //questions
    $questions = array(         array("Question 1: Plants uses energy...<br>",
                               "Question 2: Which of the following substances can directly be absorbed by blood without further digestion?<br>",
                                "Question 3: Which of the following occurs during inhalation in a human?<br>",
                                "Question 4: The rate of breathing is regulated by the medulla oblongata, mainly …<br>",
                                "Question 5: Which of the following is part of the human circulatory system?<br>",
                                "Question 6: Which of the following is a density-dependent factor?<br>",
                                "Question 7: The disorder resulting from insufficient intake of energy food<br>",
                                "Question 8: Alternation of generations is exhibited by …<br>",
                                "Question 9: The event that leads from the haploid stage to the diploid stage in alternation of generations:<br>",
                                "Question 10: In gymnosperms pollination is exclusively by ...<br>",
                                "Question 11: Land plants are probably descendants of which of these groups?<br>",
                                "Question 12: The part of the flower which becomes the fruit is the …<br>",
                                "Question 13: Which of the following is NOT a threat to food security?<br>",
                                "Question 14: Which one of the following processes is responsible for the production of male gametes?<br>",
                                "Question 15: A trait that has a range of phenotype is an example of<br> ",
                               "Question 16: DNA replication occurs during...<br>",
                                "Question 17: Which plant hormone promotes seed dormancy<br> ",
                                "Question 18: Cells that can differentiate into any type of cell are called...<br>",
                                "Question 19: The DNA of different species only differs in the...<br>",
                                "Question 20: Adenine pairs with..."),
                                array("Question 1","Question 2","Question 3","Question 4","Question 5","Question 6","Question 7 <br>",
                                "Question 8","Question 9","Question 10","Question 11","Question 12","Question 13","Question 14 <br>",
                                "Question 15","Question 16","Question 17","Question 18","Question 19", "Question 20<br>"),
    

                                array(array("continuosly","during the day only","during the night only","during photosynthesis only"),
                                      array("Proteins","Starch","Glucose","Fats"),
                                      array("Pressure within the thoracic cavity decreases","The lungs collapse","The diaphragm relaxes","Pressure in the abdominal cavity decreases"),
                                      array("under voluntary control.","according to the oxygen level of blood.","according to the blood pressure.","according to the carbon dioxide level of blood."),
                                      array("Glomerulus","Convoluted tubels","Loop of Henle","Bowman's capsule"), 
                                      array("Drought","Temperature","Predation","Fire"),
                                      array("Kwashiorkor","Marasmus","Atherosclerosis","Bulimia"),
                                      array("Bryophytes","Pteridophytes","Spermatophytes","All of the above"),
                                      array("Germination","Fertilization","Meiosis","Mitosis"),
                                      array("Animals","Water","Wind","Insects"),
                                      array("Green Algae","Red Algae","Brown Algae","Pink Algae"),
                                      array("Petals","Ovary","Ovule","Anther"),
                                      array("Climate Change","Human exponential population growth","Birth Control","Wastage"),
                                      array("Spermatogenesis","Oogenesis","Ejaculation","Ovulation"),
                                      array("continuos variation","discontinuos variation","complete dominance","codominance"),
                                      array("anaphase I","interphase","prophase I","prophase II"),
                                      array("Gibberellin","Auxin","Abscisic acid","Growth hormone"),
                                      array("sex cells","daughter cells","stem cells","haploid cells"),
                                      array("components of the nucleotides","sequence of the nucleotides","type of bond between the nitrogeneous bases","type of sugar that it contains"),
                                      array("Uracil","RNA","Guanine","Thymine")));

for ($x=0; $x<=19 ; $x++){
    echo $questions[0][$x] ."<br>";
    for ($z=0; $z<=3; ++$z) {
        echo "\n<input type=\"radio\" name=\"".$questions[1][$x]. "\"value=\"". $questions[2][$x][$z]. "\">\"". $questions[2][$x][$z]."\"";
    }   echo "<br><br>";
};

if(isset($_POST['submit'])){
    $x=0;
    if (isset($_POST['question1']) && $_POST['question1']==="continuosly"){
        $x++;
    }
if (isset($_POST['question2']) && $_POST['question2']==="Glucose"){
    $x++;
}
if (isset($_POST['question3']) && $_POST['question3']==="Pressure within the thoracic cavity decreases "){
    $x++;
}
if (isset($_POST['question4']) && $_POST['question4']==="according to the carbon dioxide level of blood"){
    $x++;
}
if (isset($_POST['question5']) && $_POST['question5']==="Glomerulus"){
    $x++;
}
if (isset($_POST['question6']) && $_POST['question6']==="Predation"){
    $x++;
}
if (isset($_POST['question7']) && $_POST['question7']==="Marasmus"){
    $x++;
}
if (isset($_POST['question8']) && $_POST['question8']==="All plants"){
    $x++;
}
if (isset($_POST['question9']) && $_POST['question9']==="Fertilization"){
    $x++;
}
if (isset($_POST['question10']) && $_POST['question10']==="Wind"){
    $x++;
}
if (isset($_POST['question11']) && $_POST['question11']==="Green Algae"){
    $x++;
}
if (isset($_POST['question12']) && $_POST['question12']==="Ovary"){
    $x++;
}
if (isset($_POST['question13']) && $_POST['question13']==="Birth control"){
    $x++;
}
if (isset($_POST['question14']) && $_POST['question14']==="Spermatogenesis"){
    $x++;
}
if (isset($_POST['question15']) && $_POST['question15']==="Continuos variation"){
    $x++;
}
if (isset($_POST['question16']) && $_POST['question16']==="Interphase"){
    $x++;
}
if (isset($_POST['question17']) && $_POST['question17']==="Abscisic acid"){
    $x++;
}

if (isset($_POST['question18']) && $_POST['question18']==="Stem cells"){
    $x++;
}
if (isset($_POST['question19']) && $_POST['question19']==="Sequence of nucleotides"){
    $x++;
}
if (isset($_POST['question20']) && $_POST['question20']==="Guanine"){
    $x++;
}
    echo "Your score is $x <br>";
    if ($x>15){
        echo "Yes";
    }elseif ($x>10){
        echo "OK";
    }else{
        echo "You didn't do good!";
    }
}

      ?>



 <input type="submit" value="submit" name="submit">
 </form>
    
</body>
</html>
