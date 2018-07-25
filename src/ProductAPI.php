<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for ProductAPI (v1).
 *
 * <p>
 * API to access Products</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class DoThatAPI_Service_ProductAPI extends Google_Service
{
  /** View your email address. */
  const USERINFO_EMAIL =
      "https://www.googleapis.com/auth/userinfo.email";


  private $base_methods;

  /**
   * Constructs the internal representation of the ProductAPI service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://dev-dothat-api.appspot.com/_ah/api/';
    $this->servicePath = 'product/v1/serviceProviders/';
    $this->version = 'v1';
    $this->serviceName = 'product';
    $this->init();
  }

  public function init() {

    $this->base_methods = new Google_Service_Resource(
        $this,
        $this->serviceName,
        '',
        array(
          'methods' => array(
            'createProduct' => array(
              'path' => '{svcProviderId}/products',
              'httpMethod' => 'POST',
              'parameters' => array(
                'svcProviderId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'deleteProduct' => array(
              'path' => '{svcProviderId}/products/{prodId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'svcProviderId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'prodId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'expunge' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'findProducts' => array(
              'path' => '{svcProviderId}/products',
              'httpMethod' => 'GET',
              'parameters' => array(
                'svcProviderId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'findProductsForCustomer' => array(
              'path' => '{svcProviderId}/customers/{custId}/products',
              'httpMethod' => 'GET',
              'parameters' => array(
                'svcProviderId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'custId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'getProduct' => array(
              'path' => '{svcProviderId}/products/{prodId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'svcProviderId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'prodId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'updateProduct' => array(
              'path' => '{svcProviderId}/products/{prodId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'svcProviderId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'prodId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
  }
  /**
   * (createProduct)
   *
   * @param string $svcProviderId
   * @param DoThatAPI_Product $postBody
   * @param array $optParams Optional parameters.
   * @return DoThatAPI_Service_ProductAPI_Product
   */
  public function createProduct($svcProviderId, DoThatAPI_Service_ProductAPI_Product $postBody, $optParams = array())
  {
    $params = array('svcProviderId' => $svcProviderId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->base_methods->call('createProduct', array($params), "DoThatAPI_Service_ProductAPI_Product");
  }
  /**
   * (deleteProduct)
   *
   * @param string $svcProviderId
   * @param string $prodId
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool expunge
   */
  public function deleteProduct($svcProviderId, $prodId, $optParams = array())
  {
    $params = array('svcProviderId' => $svcProviderId, 'prodId' => $prodId);
    $params = array_merge($params, $optParams);
    return $this->base_methods->call('deleteProduct', array($params));
  }
  /**
   * (findProducts)
   *
   * @param string $svcProviderId
   * @param array $optParams Optional parameters.
   * @return DoThatAPI_Service_ProductAPI_ProductCollection
   */
  public function findProducts($svcProviderId, $optParams = array())
  {
    $params = array('svcProviderId' => $svcProviderId);
    $params = array_merge($params, $optParams);
    return $this->base_methods->call('findProducts', array($params), "DoThatAPI_Service_ProductAPI_ProductCollection");
  }
  /**
   * (findProductsForCustomer)
   *
   * @param string $svcProviderId
   * @param string $custId
   * @param array $optParams Optional parameters.
   * @return DoThatAPI_Service_ProductAPI_ProductCollection
   */
  public function findProductsForCustomer($svcProviderId, $custId, $optParams = array())
  {
    $params = array('svcProviderId' => $svcProviderId, 'custId' => $custId);
    $params = array_merge($params, $optParams);
    return $this->base_methods->call('findProductsForCustomer', array($params), "DoThatAPI_Service_ProductAPI_ProductCollection");
  }
  /**
   * (getProduct)
   *
   * @param string $svcProviderId
   * @param string $prodId
   * @param array $optParams Optional parameters.
   * @return DoThatAPI_Service_ProductAPI_Product
   */
  public function getProduct($svcProviderId, $prodId, $optParams = array())
  {
    $params = array('svcProviderId' => $svcProviderId, 'prodId' => $prodId);
    $params = array_merge($params, $optParams);
    return $this->base_methods->call('getProduct', array($params), "DoThatAPI_Service_ProductAPI_Product");
  }
  /**
   * (updateProduct)
   *
   * @param string $svcProviderId
   * @param string $prodId
   * @param DoThatAPI_Product $postBody
   * @param array $optParams Optional parameters.
   * @return DoThatAPI_Service_ProductAPI_Product
   */
  public function updateProduct($svcProviderId, $prodId, DoThatAPI_Service_ProductAPI_Product $postBody, $optParams = array())
  {
    $params = array('svcProviderId' => $svcProviderId, 'prodId' => $prodId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->base_methods->call('updateProduct', array($params), "DoThatAPI_Service_ProductAPI_Product");
  }
}





class DoThatAPI_Service_ProductAPI_Amount extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $currency;
  public $value;


  public function setCurrency($currency)
  {
    $this->currency = $currency;
  }
  public function getCurrency()
  {
    return $this->currency;
  }
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
}

class DoThatAPI_Service_ProductAPI_Product extends Google_Collection
{
  protected $collection_key = 'priceLists';
  protected $internal_gapi_mappings = array(
  );
  public $active;
  protected $availabilityType = 'Dothatapi_Service_ProductAPI_ProductAvailability';
  protected $availabilityDataType = '';
  public $category;
  public $creationTimestamp;
  public $deleted;
  public $description;
  public $modificationTimestamp;
  public $name;
  protected $priceListsType = 'Dothatapi_Service_ProductAPI_ProductPriceList';
  protected $priceListsDataType = 'array';
  public $productCode;
  public $productId;
  public $quantity;
  public $quantityUnit;
  public $serviceProviderId;
  public $version;
  protected $visibilityType = 'Dothatapi_Service_ProductAPI_ProductVisibility';
  protected $visibilityDataType = '';


  public function setActive($active)
  {
    $this->active = $active;
  }
  public function getActive()
  {
    return $this->active;
  }
  public function setAvailability(Dothatapi_Service_ProductAPI_ProductAvailability $availability)
  {
    $this->availability = $availability;
  }
  public function getAvailability()
  {
    return $this->availability;
  }
  public function setCategory($category)
  {
    $this->category = $category;
  }
  public function getCategory()
  {
    return $this->category;
  }
  public function setCreationTimestamp($creationTimestamp)
  {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp()
  {
    return $this->creationTimestamp;
  }
  public function setDeleted($deleted)
  {
    $this->deleted = $deleted;
  }
  public function getDeleted()
  {
    return $this->deleted;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setModificationTimestamp($modificationTimestamp)
  {
    $this->modificationTimestamp = $modificationTimestamp;
  }
  public function getModificationTimestamp()
  {
    return $this->modificationTimestamp;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setPriceLists($priceLists)
  {
    $this->priceLists = $priceLists;
  }
  public function getPriceLists()
  {
    return $this->priceLists;
  }
  public function setProductCode($productCode)
  {
    $this->productCode = $productCode;
  }
  public function getProductCode()
  {
    return $this->productCode;
  }
  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
  public function getProductId()
  {
    return $this->productId;
  }
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  public function getQuantity()
  {
    return $this->quantity;
  }
  public function setQuantityUnit($quantityUnit)
  {
    $this->quantityUnit = $quantityUnit;
  }
  public function getQuantityUnit()
  {
    return $this->quantityUnit;
  }
  public function setServiceProviderId($serviceProviderId)
  {
    $this->serviceProviderId = $serviceProviderId;
  }
  public function getServiceProviderId()
  {
    return $this->serviceProviderId;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
  public function setVisibility(Dothatapi_Service_ProductAPI_ProductVisibility $visibility)
  {
    $this->visibility = $visibility;
  }
  public function getVisibility()
  {
    return $this->visibility;
  }
}

class DoThatAPI_Service_ProductAPI_ProductAvailability extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $availableFrom;
  public $availableUntil;
  protected $scheduleType = 'Dothatapi_Service_ProductAPI_Schedule';
  protected $scheduleDataType = '';


  public function setAvailableFrom($availableFrom)
  {
    $this->availableFrom = $availableFrom;
  }
  public function getAvailableFrom()
  {
    return $this->availableFrom;
  }
  public function setAvailableUntil($availableUntil)
  {
    $this->availableUntil = $availableUntil;
  }
  public function getAvailableUntil()
  {
    return $this->availableUntil;
  }
  public function setSchedule(Dothatapi_Service_ProductAPI_Schedule $schedule)
  {
    $this->schedule = $schedule;
  }
  public function getSchedule()
  {
    return $this->schedule;
  }
}

class DoThatAPI_Service_ProductAPI_ProductCollection extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Dothatapi_Service_ProductAPI_Product';
  protected $itemsDataType = 'array';


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
}

class DoThatAPI_Service_ProductAPI_ProductPrice extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $amountType = 'Dothatapi_Service_ProductAPI_Amount';
  protected $amountDataType = '';
  public $duration;
  public $durationType;
  protected $scheduleType = 'Dothatapi_Service_ProductAPI_Schedule';
  protected $scheduleDataType = '';


  public function setAmount(Dothatapi_Service_ProductAPI_Amount $amount)
  {
    $this->amount = $amount;
  }
  public function getAmount()
  {
    return $this->amount;
  }
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  public function getDuration()
  {
    return $this->duration;
  }
  public function setDurationType($durationType)
  {
    $this->durationType = $durationType;
  }
  public function getDurationType()
  {
    return $this->durationType;
  }
  public function setSchedule(Dothatapi_Service_ProductAPI_Schedule $schedule)
  {
    $this->schedule = $schedule;
  }
  public function getSchedule()
  {
    return $this->schedule;
  }
}

class DoThatAPI_Service_ProductAPI_ProductPriceList extends Google_Collection
{
  protected $collection_key = 'prices';
  protected $internal_gapi_mappings = array(
  );
  public $endDate;
  protected $pricesType = 'Dothatapi_Service_ProductAPI_ProductPrice';
  protected $pricesDataType = 'array';
  public $startDate;


  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }
  public function getEndDate()
  {
    return $this->endDate;
  }
  public function setPrices($prices)
  {
    $this->prices = $prices;
  }
  public function getPrices()
  {
    return $this->prices;
  }
  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }
  public function getStartDate()
  {
    return $this->startDate;
  }
}

class DoThatAPI_Service_ProductAPI_ProductVisibility extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $visibleOnlyForServiceProvider;
  public $visibleOnlyForWhiteListedCustomers;


  public function setVisibleOnlyForServiceProvider($visibleOnlyForServiceProvider)
  {
    $this->visibleOnlyForServiceProvider = $visibleOnlyForServiceProvider;
  }
  public function getVisibleOnlyForServiceProvider()
  {
    return $this->visibleOnlyForServiceProvider;
  }
  public function setVisibleOnlyForWhiteListedCustomers($visibleOnlyForWhiteListedCustomers)
  {
    $this->visibleOnlyForWhiteListedCustomers = $visibleOnlyForWhiteListedCustomers;
  }
  public function getVisibleOnlyForWhiteListedCustomers()
  {
    return $this->visibleOnlyForWhiteListedCustomers;
  }
}

class DoThatAPI_Service_ProductAPI_Schedule extends Google_Collection
{
  protected $collection_key = 'daysOfWeek';
  protected $internal_gapi_mappings = array(
  );
  public $daysOfWeek;
  public $scheduleType;


  public function setDaysOfWeek($daysOfWeek)
  {
    $this->daysOfWeek = $daysOfWeek;
  }
  public function getDaysOfWeek()
  {
    return $this->daysOfWeek;
  }
  public function setScheduleType($scheduleType)
  {
    $this->scheduleType = $scheduleType;
  }
  public function getScheduleType()
  {
    return $this->scheduleType;
  }
}
