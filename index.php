<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link href="https://fonts.googleapis.com/css?family=Baloo+Chettan" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="screen" href="style.css"/>
    <title>Php Quiz</title>
</head>
<body>

<div class="content">

<form action="Index.php" method="post">  
<h1>Sciences Quiz</h1>
<?php
	$total = 0;
$Quiz = array
(
array('question'=>"1. Plants uses energy...",
'continuosly<br>',
'during the day only<br>',
'during the night only<br>',
'during photosynthesis only'
),
array('question'=>"2. Which of the following substances can directly be absorbed by blood without further digestion?",
'Proteins<br>',
'Starch<br>',
'Glucose<br>',
'Fats'
),
array('question'=>"3. Which of the following occurs during inhalation in a human?",
'Pressure within the thoracic cavity decreases<br>',
'The lungs collapse<br>',
'The diaphragm relaxes<br>',
'Pressure in the abdominal cavity decreases'
),
array('question'=>"4. The rate of breathing is regulated by the medulla oblongata, mainly …",
'under voluntary control<br>',
'according to the oxygen level of blood<br>',
'according to the blood pressure<br>',
'according to the carbon dioxide level of blood'
),
array('question'=>"5. Which of the following is part of the human circulatory system?",
'Glomerulus<br>',
'Convoluted tubels<br>',
'Loop of Henle<br>',
'Bowmans capsule'
),
array('question'=>"6. Which of the following is a density-dependent factor?",
'Drought<br>',
'Temperature<br>',
'Predation<br>',
'Fire'
),
array('question'=>"7. The disorder resulting from insufficient intake of energy food",
'Kwashiorkor<br>',
'Marasmus<br>',
'Atherosclerosis<br>',
'Bulimia'
),
array('question'=>"8. Alternation of generations is exhibited by …",
'Bryophytes<br>',
'Pteridophytes<br>',
'Spermatophytes<br>',
'All of the above'
),
array('question'=>"9. The event that leads from the haploid stage to the diploid stage in alternation of generations",
'Germination<br>',
'Fertilization<br>',
'Meiosis<br>',
'Mitosis'
),
array('question'=>"10. In gymnosperms pollination is exclusively by ...",
'Animals<br>',
'Water<br>',
'Wind<br>',
'Insects'
),
array('question'=>"11. Land plants are probably descendants of which of these groups?",
'Green Algae<br>',
'Red Algae<br>',
'Brown Algae<br>',
'Pink Algae'
),
array('question'=>"12. The part of the flower which becomes the fruit is the …",
'Petals<br>',
'Ovary<br>',
'Ovule<br>',
'Anther'
),
array('question'=>"13. Which of the following is NOT a threat to food security?",
'Climate Change<br>',
'Human exponential population growth<br>',
'Birth Control<br>',
'Wastage'
),
array('question'=>"14. Which one of the following processes is responsible for the production of male gametes?",
'Spermatogenesis<br>',
'Oogenesis<br>',
'Ejaculation<br>',
'Ovulation'
),
array('question'=>"15. A trait that has a range of phenotype is an example of",
'continuos variation<br>',
'discontinuos variation<br>',
'complete dominance<br>',
'codominance'
),
array('question'=>"16. DNA replication occurs during...",
'anaphase I<br>',
'interphase<br>',
'prophase I<br>',
'prophase II'
),
array('question'=>"17. Which plant hormone promotes seed dormancy",
'Gibberellin<br>',
'Auxin<br>',
'Abscisic acid<br>',
'Growth hormone'
),
array('question'=>"18. Cells that can differentiate into any type of cell are called...",
'sex cells<br>',
'daughter cells<br>',
'stem cells<br>',
'haploid cells'
),
array('question'=>"19. The DNA of different species only differs in the...",
'components of the nucleotides<br>',
'sequence of the nucleotides<br>',
'type of bond between the nitrogeneous bases<br>',
'type of sugar that it contains'),

array('question'=>"20. Adenine pairs with...",
'Uracil<br>',
'RNA<br>',
'Guanine<br>',
'Thymine'
),
);
?>

<?php
for ($row = 0; $row < count($Quiz); $row++) { ?>
<section class="box">

<p>
  <h2>
	<?php
	 echo $Quiz[$row]['question'];?>
  </h2>
</p>

<?php 
$x = 0;
	
for($r = $row*4; $r < ($row+1)*4; $r++){
  ?>
  <input type='radio' name="<?php echo $row; ?>" value="<?php echo $x ?>" id="<?php echo $r ?>">
	<label class="option" for="<?php echo $r ?>">
	<?php echo $Quiz[$row][$x] ?></label>
			<?php
					$x++; 
		
		} ?>
		<?php 
		
		?>
	
			</section>
		</section>

	<?php }
?>

<?php
if(isset($_POST['submit'])){
		if(isset($_POST['0'])){
			if($_POST['0'] == 0){
			$total++;
			}
		}
		if(isset($_POST['1'])){
			if($_POST['1'] == 2){
			$total++;
			}
		}
		if(isset($_POST['2'])){
			if($_POST['2'] == 0){
			$total++;
			}
		}
		if(isset($_POST['3'])){
			if($_POST['3'] == 3){
			$total++;
			}
		}
		if(isset($_POST['4'])){
			if($_POST['4'] == 0){
			$total++;
			}
		}
		if(isset($_POST['5'])){
			if($_POST['5'] == 2){
			$total++;
			}
		}
		if(isset($_POST['6'])){
			if($_POST['6'] == 1){
			$total++;
			}
		}
		if(isset($_POST['7'])){
			if($_POST['7'] == 3){
			$total++;
			}
		}
		if(isset($_POST['8'])){
			if($_POST['8'] == 1){
			$total++;
			}
		}
		if(isset($_POST['9'])){
			if($_POST['9'] == 2){
			$total++;
			}
		}
		if(isset($_POST['10'])){
			if($_POST['10'] == 0){
			$total++;
			}
		}
		if(isset($_POST['11'])){
			if($_POST['11'] == 1){
			$total++;
			}
		}
		if(isset($_POST['12'])){
			if($_POST['12'] == 2){
			$total++;
			}
		}
		if(isset($_POST['13'])){
			if($_POST['13'] == 0){
			$total++;
			}
		}
		if(isset($_POST['14'])){
			if($_POST['14'] == 2){
			$total++;
			}
		}
		if(isset($_POST['15'])){
			if($_POST['15'] == 0){
			$total++;
			}
		}
		if(isset($_POST['16'])){
			if($_POST['16'] == 1){
			$total++;
			}
		}
		if(isset($_POST['17'])){
			if($_POST['17'] == 2){
			$total++;
			}
		}
		if(isset($_POST['18'])){
			if($_POST['18'] == 2){
			$total++;
			}
		}
		if(isset($_POST['19'])){
			if($_POST['19'] == 1){
			$total++;
			}
		}
		if(isset($_POST['20'])){
			if($_POST['20'] == 2){
			$total++;
			}	
		}
	
}
echo "<h4> Your score is:"."<br>"."$total"."/20 </h4>";
 if($total >= 0 && $total <= 5){
	echo "<h3> Dissapointing! Do the quiz again </h3>";
}
else if($total >=6 && $total <= 10){
	echo "<h3> Your average! Keep trying for better marks. </h3>";
}
else if($total >= 12 && $total <= 18){
	echo "<h3> Good! You can do better than this.</h3>";
}
else if($total >= 19 && $total <= 20){
	echo "<h3> Congratulations you killed it.</h3>";
}
?>

<br>

<section>

			<input id="submit" type="submit" name="submit" value="Submit Quiz"></h2>
	</section>
	</form>
	<br>
	</div>

</body>
</html>