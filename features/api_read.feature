Feature: Get school data via API
  In order to learn about schools in Detroit
  As a random programmer on the internet
  I neet to be able to get BCODE-indexed data from the ESD Portal API

  Scenario: API is up
    When I send a GET request to "/api/1.0/"
    Then the response code should be 200
    And response should contain "has been setup successfully."

  Scenario: List all schools
    When I set header "Content-type" with value "application/json"
    And I send a POST request to "/api/1.0/taxonomy_vocabulary/getTree.json/" with body:
    """
    {"vid":"4"}
    """
    Then the response code should be 200
    And response should contain "Cesar Chavez Academy - Elementary East"
    And response should have more than 297 json objects

  Scenario: Get single school data from meap_2009 dataset


  Scenario: Get single school data from meap_2010 dataset


  Scenario: Get single school data from meap_2011 dataset


  Scenario: Get single school data from meap_2012 dataset


  Scenario: Get single school data from esd_k8_2013 dataset


  Scenario: Get single school data from esd_hs_2013 dataset


  Scenario: Get single school data from fiveessentials_2013 dataset


  Scenario: Get single school data from act_2011 dataset


  Scenario: Get single school data from act_2012 dataset


  Scenario: Get single school data from act_2013 dataset

