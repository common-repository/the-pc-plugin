<?php
/*
Plugin Name: The PC Plugin
Version: 0.1
Plugin URI: http://fuerzayfe.com/widget/wordpress-politically-correct-plugin
Description: Turns any blog into a haven of safe PC content
Author: Mathieu Deprez
Author URI: http://fuerzayfe.com/
*/

function my_function ($text) {
	$text = str_replace('airhead', 'reality impaired', $text);
	$text = str_replace('alive', 'metabolically enabled', $text);
	$text = str_replace('bad dancer', 'overly caucasian', $text);
	$text = str_replace('bad cook', 'microwave compatible', $text);
	$text = str_replace('bad driver', 'automotively challenged', $text);
	$text = str_replace('bald', 'follicly challenged', $text);
	$text = str_replace('beer gut', 'liquid grain storage facility', $text);
	$text = str_replace('bisexual', 'sexually non-preferential', $text);
	$text = str_replace('black', 'african american citizen', $text);
	$text = str_replace('blind', 'photonically non-receptive', $text);
	$text = str_replace('body odor', 'non-discretionarily fragranced', $text);
	$text = str_replace('breast implants', 'medically enhanced bosom', $text);
	$text = str_replace('bum', 'displaced homeowner', $text);
	$text = str_replace('chick', 'breasted american', $text);
	$text = str_replace('clumsy', 'uniquely coordinated', $text);
	$text = str_replace('conservative', 'right wing extremist fascist pig', $text);
	$text = str_replace('dead', 'metabolically challenged', $text);
	$text = str_replace('deaf', 'visually oriented', $text);
	$text = str_replace('dishonest', 'ethically disoriented', $text);
	$text = str_replace('drug addict', 'chemically dependent', $text);
	$text = str_replace('drunk', 'chemically inconvenienced', $text);
	$text = str_replace('easy', 'horizontally accessible', $text);
	$text = str_replace('elderly', 'gerontologically advanced', $text);
	$text = str_replace('failure', 'deficiency achiever', $text);
	$text = str_replace('fat', 'calorifically enhanced', $text);
	$text = str_replace('fireman', 'firefighter', $text);
	$text = str_replace('got fat', 'metabolically underchieved', $text);
	$text = str_replace('ghetto', 'ethnically homogenous area', $text);
	$text = str_replace('handicapped', 'differently abled', $text);
	$text = str_replace('homeless', 'optionally residential', $text);
	$text = str_replace('housewife', 'domestic technician', $text);
	$text = str_replace('hunter', 'bambi butcher', $text);
	$text = str_replace('inmate', 'socially separated individual', $text);
	$text = str_replace('insane', 'selectively perceptive', $text);
	$text = str_replace('lazy', 'motivationally deficient', $text);
	$text = str_replace('meter maid', 'parking enforcement official', $text);
	$text = str_replace('poor', 'economically disadvantaged', $text);
	$text = str_replace('redneck', 'genetically-related american', $text);
	$text = str_replace('short', 'atanomically compact', $text);
	$text = str_replace('skinny', 'skeletally prominent', $text);
	$text = str_replace('slum', 'economic oppression zone', $text);
	$text = str_replace('slut', 'previously enjoyed companion', $text);
	$text = str_replace('tree', 'oxygen exchange unit', $text);
	$text = str_replace('tree hugger', 'environmental activist', $text);
	$text = str_replace('two-bit whore', 'low cost service provider', $text);
	$text = str_replace('ugly', 'friendly', $text);
	$text = str_replace('unemployed', 'involuntarily leisured', $text);
	$text = str_replace('white male', 'insensitive cultural oppressor', $text);
return $text;
	
}

add_filter('the_content', 'my_function');
add_filter('the_title', 'my_function');
?>