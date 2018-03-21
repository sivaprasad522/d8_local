$param = "bac";

$uri = "http://dev.markitondemand.com/MODApis/Api/v2/Quote/jsonp?symbol=" . $param  . "&callback=myFunction";

dpm($uri);

 try {
    $response = \Drupal::httpClient()->get($uri, array('headers' => array('Accept' => 'text/plain')));
    $data = (string) $response->getBody();
    if (empty($data)) {
      return FALSE;
    }
  }
  catch (RequestException $e) {
    return FALSE;
  }

$block_id = 1;

$block = \Drupal\block\Entity\Block::load($block_id);
$my_block = BlockContent::load(1);
//$my_block->set('body','<h1>'.$my_processed_string.'</h1>');
//$my_block->save();


dpm($block);



==================
$param = "bac";

$uri = "http://dev.markitondemand.com/MODApis/Api/v2/Quote/jsonp?symbol=" . $param  . "&callback=myFunction";

dpm($uri);

 try {
    $response = \Drupal::httpClient()->get($uri, array('headers' => array('Accept' => 'text/plain')));
    $data = (string) $response->getBody();
    if (empty($data)) {
      return FALSE;
    }
  }
  catch (RequestException $e) {
    return FALSE;
  }



//dpm($response);


$block_id = "appleblockdescription";

$block_id = "bankofamericablockdescription";



$block = \Drupal\block\Entity\Block::load($block_id);

$block->set('')



dpm($block);
=====

$blocks = \Drupal\block\Entity\Block::loadMultiple();



foreach ($blocks as $key => $block) {

  $val = $block->get('field_companyname')->value;
  dpm($key);
}
