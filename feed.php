<?php
header('Content-Type: text/html; charset=utf-8');
$feed = "https://revistaautoesporte.globo.com/rss/ultimas/feed.xml";
$page = file_get_contents($feed);

$dom = new DOMDocument();
$dom->loadXML($page);

$output = [];
$item = $dom->getElementsByTagName('item');
$field = ['title','description','link'];
$arrOutput = [];

for ($i = 0; $i < $item->length; $i++) {  
	foreach($field as $fieldName) {
		if ($fieldName == "description") {
			$currValue = $item->item($i)->getElementsByTagName($fieldName)->item(0)->nodeValue;
			
			//p tag
			$arrOutput[$fieldName][0]['type'] = 'text';
			preg_match_all('~<p>(?P<paragraphs>.*?)</p>~is', $currValue, $matches); // regex
			$x = str_replace("<p>","", $matches[0]); $x = preg_replace(' /&nbsp;/', '', $x); $x = str_replace("</p>","", $x); $x = preg_replace( "/\r|\n/", "", $x); $x = preg_replace('/\s+/', ' ', $x); // replaces
			$arrOutput[$fieldName][0]['content'] = $x;
			
			// URL's
			$arrOutput[$fieldName][1]['type'] = 'image';
			$array = array();
			preg_match( '/src="([^"]*)/i', $currValue, $array);
			$result = str_replace( //array replace
				array('', 'src="'), 
				array('"', ''), 
				$array
			); $y =  implode(', ', $result);
			$arrOutput[$fieldName][1]['content'] = $y;
			
			// href
			$arrOutput[$fieldName][2]['type'] = 'links';
			preg_match( '/href="([^"]*)/i', $currValue, $array);
			$result = str_replace( // array replace
				array('', 'href="'), 
				array('"', ''), 
				$array
			); $z =  implode(', ', $result);
			$arrOutput[$fieldName][2]['content'] = "[".$z."]";
		} else {
			$currValue = $item->item($i)->getElementsByTagName($fieldName)->item(0)->nodeValue;
			$arrOutput[$fieldName] = trim($currValue);
		}
	}
	$output[] = $arrOutput;
}

array_walk_recursive($output, function(&$v) { $v = strip_tags($v); }); // html tags
echo json_encode($output, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
?>