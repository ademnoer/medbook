<?php

/**
 * Description of doctors
 */
class doctors {
    
    public function findDoctors($q)
    {
        $docs = array();
        $docs[] = array(
            'data' => array(
                'busy' => false,
                'costs' => array(),
                'location' => array(
                    'geo_name' => 'La Jolla, CA',
                    'lat' => 32.88568,
                    'lng' => -117.22409,
                    'miles_away' => 27.15239205691494,
                ),
                'outcomes' => array(),
                'patients' => array(
                    'cohort' => 'adults around age 22',
                    'cohort_age' => 22,
                    "cohort_sex"=> "men",
                    'other_doctors' => array('rounded' => 0),
                    'this_doctor' => array('rounded' => 170),
                ),
                'provider' => array(
                    'gender' => 'male',
                    'name' => array(
                        "first"=> "G", 
                        "formatted"=> "G Dominguez, MD", 
                        "full" => "Gilbert Ryan Dominguez", 
                        "initials"=> "GD", 
                        "last"=> "Dominguez", 
                        "middle"=> "Ryan", 
                        "short"=> "Dr. Dominguez", 
                        "shortest" => "Dr. D"
                    ),
                    "photos" => array(
                        "default" => "https://amino-img-defaults.s3.amazonaws.com/initials-v2/g/gd.svg", 
                        "small" => null, 
                        "thumbnail" => null, 
                        "title" => "G Dominguez, MD in La Jolla, CA"
                    ),
                    'slug' => 'dr-gilbert-dominguez-md',
                    "specialty" => "family practitioner",
                    "score_description" => "", 
                    "score_threshold" => "96.0", 
                    "strength" => 90
                ),
                "lat" => 32.88568, 
                "lng" => -117.22409, 
                "number" =>  1, 
                "type" => "doctor", 
                "url" => "#"
            )
        );
        $docs[] = array(
            'data' => array(
                'busy' => false,
                'costs' => array(),
                'location' => array(
                    'geo_name' => 'La Jolla, CA',
                    'lat' => 32.88568,
                    'lng' => -117.22409,
                    'miles_away' => 27.15239205691494,
                ),
                'outcomes' => array(),
                'patients' => array(
                    'cohort' => 'adults around age 22',
                    'cohort_age' => 22,
                    "cohort_sex"=> "men",
                    'other_doctors' => array('rounded' => 0),
                    'this_doctor' => array('rounded' => 170),
                ),
                'provider' => array(
                    'gender' => 'male',
                    'name' => array(
                        "first"=> "G", 
                        "formatted"=> "G Dominguez, MD", 
                        "full" => "Gilbert Ryan Dominguez", 
                        "initials"=> "GD", 
                        "last"=> "Dominguez", 
                        "middle"=> "Ryan", 
                        "short"=> "Dr. Dominguez", 
                        "shortest" => "Dr. D"
                    ),
                    "photos" => array(
                        "default" => "https://amino-img-defaults.s3.amazonaws.com/initials-v2/g/gd.svg", 
                        "small" => null, 
                        "thumbnail" => null, 
                        "title" => "G Dominguez, MD in La Jolla, CA"
                    ),
                    'slug' => 'dr-gilbert-dominguez-md',
                    "specialty" => "family practitioner",
                    "score_description" => "", 
                    "score_threshold" => "96.0", 
                    "strength" => 90
                ),
                "lat" => 32.88568, 
                "lng" => -117.22409, 
                "number" =>  1, 
                "type" => "doctor", 
                "url" => "#"
            )
        );
        $result = array(
            'data' => array(
                "distance" => 25,
                "filterrific" => array(
                    'filters' => array()
                ),
                'maplist' => array(
                    'items' => 
                        $docs,
                    'metadata' => array(
                        "badge_outcome" => null, 
                        "cobrand" => null, 
                        "insurance" => array(

                        ),
                        "pager" => array(
                            "currentPage" => 1,
                            "hasNextPage" => true, 
                            "hasPrevPage" => false, 
                            "limitSearchResults" => true, 
                            "maxResultsPerPage" => 25, 
                            "nextPageURL" => null, 
                            "prevPageURL" => null, 
                            "totalResults" => 214
                        ),
                        "reason" => array(),
                        "reason_has_cost_children" => false,
                        "user_location" => array(33.2185931, -116.9749607)
                    )
                ),
                "resultsBuilderHasResults" => true, 
                "total_results" => count($docs),
                
            ),
            'meta' => array('code' => 200)
        );
        $r = json_encode($result);
        echo $r;exit;
    }
}
?>