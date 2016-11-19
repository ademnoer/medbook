<?php
/**
 * Description of topics
 */
class suggestions
{

    public $InsuranceCarriers = array(
      array(
          'npi_count' => 955195,
          'slug'      => 'payer-united-healthcare',
          'state'     => null,
          'title'     => 'Arab Orient Insurance(Gig)'
      )  
    );
    
    public function getTopics($keyword)
    {
        $result = array(
            'data' => array(
                'slug'            => $keyword,
                'title'           => $keyword,
                'canonical_title' => $keyword,
            ),
            'meta' => array(
                'code' => 200
            )
        );
        header('Content-Type: application/json');
        echo json_encode($result);
        exit;
    }

    public function getInsuranceCarriers($keyword)
    {
        $found = array();
        $result = array();
        foreach($this->InsuranceCarriers as $val) {
            if($val['slug'] == $keyword || $val['title'] == $keyword ) {
                $found = $val;
                break;
            }
        }
        if(!empty($found)) {
            $result = array(
                'data' => $found,
                'meta' => array(
                    'code' => 200
                )
            );
        }
        header('Content-Type: application/json');
        echo json_encode($result);
        exit;
    }

}

?>