<?php

function GetFaqQuestions(){
	$FAQ=array (
		'Question 1?'=>'Answer to question 1.',
		'What should you see this weekend?'=>'Go see a play!',
		'Question 3?'=>'The answer to question 3.'
	);

	foreach($FAQ as $Question => $Answer){
		echo"<p class='Headline'>".$Question."</p>
			<p>".$Answer."</p>";
	};
}
