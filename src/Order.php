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
 * Service definition for Order (v1).
 *
 * <p>
 * API to access Orders</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class DoThatAPI_Service_Order extends Google_Service
{
  /** View your email address. */
  const USERINFO_EMAIL =
      "https://www.googleapis.com/auth/userinfo.email";


  private $base_methods;

  /**
   * Constructs the internal representation of the Order service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://dev-dothat-api.appspot.com/_ah/api/';
    $this->servicePath = 'order/v1/serviceProviders/';
    $this->version = 'v1';
    $this->serviceName = 'order';

    $this->base_methods = new Google_Service_Resource(
        $this,
        $this->serviceName,
        '',
        array(
          'methods' => array(
            'createOrder' => array(
              'path' => '{svcProviderId}/customers/{custId}/orders',
              'httpMethod' => 'POST',
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
            ),'deleteOrder' => array(
              'path' => '{svcProviderId}/customers/{custId}/orders/{ordId}',
              'httpMethod' => 'DELETE',
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
                'ordId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'findOrdersForCustomer' => array(
              'path' => '{svcProviderId}/customers/{custId}/orders',
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
                'startDate' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'endDate' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'status' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'findOrdersForServiceProvider' => array(
              'path' => '{svcProviderId}/orders',
              'httpMethod' => 'GET',
              'parameters' => array(
                'svcProviderId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'startDate' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'endDate' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'status' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'getOrder' => array(
              'path' => '{svcProviderId}/customers/{custId}/orders/{id}',
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
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'updateOrder' => array(
              'path' => '{svcProviderId}/customers/{custId}/orders/{ordId}',
              'httpMethod' => 'PUT',
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
                'ordId' => array(
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
   * (createOrder)
   *
   * @param string $svcProviderId
   * @param string $custId
   * @param DoThatAPI_Order $postBody
   * @param array $optParams Optional parameters.
   * @return DoThatAPI_Service_Order_Order
   */
  public function createOrder($svcProviderId, $custId, DoThatAPI_Service_Order_Order $postBody, $optParams = array())
  {
    $params = array('svcProviderId' => $svcProviderId, 'custId' => $custId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->base_methods->call('createOrder', array($params), "DoThatAPI_Service_Order_Order");
  }
  /**
   * (deleteOrder)
   *
   * @param string $svcProviderId
   * @param string $custId
   * @param string $ordId
   * @param array $optParams Optional parameters.
   */
  public function deleteOrder($svcProviderId, $custId, $ordId, $optParams = array())
  {
    $params = array('svcProviderId' => $svcProviderId, 'custId' => $custId, 'ordId' => $ordId);
    $params = array_merge($params, $optParams);
    return $this->base_methods->call('deleteOrder', array($params));
  }
  /**
   * (findOrdersForCustomer)
   *
   * @param string $svcProviderId
   * @param string $custId
   * @param string $startDate
   * @param string $endDate
   * @param array $optParams Optional parameters.
   *
   * @opt_param string status
   * @return DoThatAPI_Service_Order_OrderCollection
   */
  public function findOrdersForCustomer($svcProviderId, $custId, $startDate, $endDate, $optParams = array())
  {
    $params = array('svcProviderId' => $svcProviderId, 'custId' => $custId, 'startDate' => $startDate, 'endDate' => $endDate);
    $params = array_merge($params, $optParams);
    return $this->base_methods->call('findOrdersForCustomer', array($params), "DoThatAPI_Service_Order_OrderCollection");
  }
  /**
   * (findOrdersForServiceProvider)
   *
   * @param string $svcProviderId
   * @param string $startDate
   * @param string $endDate
   * @param array $optParams Optional parameters.
   *
   * @opt_param string status
   * @return DoThatAPI_Service_Order_OrderCollection
   */
  public function findOrdersForServiceProvider($svcProviderId, $startDate, $endDate, $optParams = array())
  {
    $params = array('svcProviderId' => $svcProviderId, 'startDate' => $startDate, 'endDate' => $endDate);
    $params = array_merge($params, $optParams);
    return $this->base_methods->call('findOrdersForServiceProvider', array($params), "DoThatAPI_Service_Order_OrderCollection");
  }
  /**
   * (getOrder)
   *
   * @param string $svcProviderId
   * @param string $custId
   * @param string $id
   * @param array $optParams Optional parameters.
   * @return DoThatAPI_Service_Order_Order
   */
  public function getOrder($svcProviderId, $custId, $id, $optParams = array())
  {
    $params = array('svcProviderId' => $svcProviderId, 'custId' => $custId, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->base_methods->call('getOrder', array($params), "DoThatAPI_Service_Order_Order");
  }
  /**
   * (updateOrder)
   *
   * @param string $svcProviderId
   * @param string $custId
   * @param string $ordId
   * @param DoThatAPI_Order $postBody
   * @param array $optParams Optional parameters.
   * @return DoThatAPI_Service_Order_Order
   */
  public function updateOrder($svcProviderId, $custId, $ordId, DoThatAPI_Service_Order_Order $postBody, $optParams = array())
  {
    $params = array('svcProviderId' => $svcProviderId, 'custId' => $custId, 'ordId' => $ordId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->base_methods->call('updateOrder', array($params), "DoThatAPI_Service_Order_Order");
  }
}





class DoThatAPI_Service_Order_Amount extends Google_Model
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

class DoThatAPI_Service_Order_ChangeContext extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $initiatorType;
  public $messageId;
  public $userIdentifier;


  public function setInitiatorType($initiatorType)
  {
    $this->initiatorType = $initiatorType;
  }
  public function getInitiatorType()
  {
    return $this->initiatorType;
  }
  public function setMessageId($messageId)
  {
    $this->messageId = $messageId;
  }
  public function getMessageId()
  {
    return $this->messageId;
  }
  public function setUserIdentifier($userIdentifier)
  {
    $this->userIdentifier = $userIdentifier;
  }
  public function getUserIdentifier()
  {
    return $this->userIdentifier;
  }
}

class DoThatAPI_Service_Order_Customer extends Google_Collection
{
  protected $collection_key = 'contacts';
  protected $internal_gapi_mappings = array(
  );
  public $active;
  protected $addressesType = 'Dothatapi_Service_Order_CustomerAddress';
  protected $addressesDataType = 'array';
  public $businessName;
  protected $contactsType = 'Dothatapi_Service_Order_CustomerContact';
  protected $contactsDataType = 'array';
  public $creationTimestamp;
  public $customerId;
  public $deleted;
  public $modificationTimestamp;
  public $name;
  public $version;


  public function setActive($active)
  {
    $this->active = $active;
  }
  public function getActive()
  {
    return $this->active;
  }
  public function setAddresses($addresses)
  {
    $this->addresses = $addresses;
  }
  public function getAddresses()
  {
    return $this->addresses;
  }
  public function setBusinessName($businessName)
  {
    $this->businessName = $businessName;
  }
  public function getBusinessName()
  {
    return $this->businessName;
  }
  public function setContacts($contacts)
  {
    $this->contacts = $contacts;
  }
  public function getContacts()
  {
    return $this->contacts;
  }
  public function setCreationTimestamp($creationTimestamp)
  {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp()
  {
    return $this->creationTimestamp;
  }
  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }
  public function getCustomerId()
  {
    return $this->customerId;
  }
  public function setDeleted($deleted)
  {
    $this->deleted = $deleted;
  }
  public function getDeleted()
  {
    return $this->deleted;
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
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
}

class DoThatAPI_Service_Order_CustomerAddress extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $active;
  public $addressId;
  public $addressLine1;
  public $addressLine2;
  public $addressLine3;
  public $addressType;
  public $area;
  public $block;
  public $building;
  public $businessName;
  public $city;
  public $country;
  public $creationTimestamp;
  public $deleted;
  public $floor;
  public $label;
  public $locality;
  public $modificationTimestamp;
  public $postalCode;
  public $primary;
  protected $routeType = 'Dothatapi_Service_Order_Route';
  protected $routeDataType = '';
  public $routeId;
  protected $serviceAreaType = 'Dothatapi_Service_Order_ServiceArea';
  protected $serviceAreaDataType = '';
  public $serviceAreaId;
  protected $servicedAddressType = 'Dothatapi_Service_Order_ServicedAddress';
  protected $servicedAddressDataType = '';
  public $servicedAddressId;
  public $state;
  public $stateCode;
  public $subLocality;
  public $unitNumber;
  public $verificationStatus;
  public $version;


  public function setActive($active)
  {
    $this->active = $active;
  }
  public function getActive()
  {
    return $this->active;
  }
  public function setAddressId($addressId)
  {
    $this->addressId = $addressId;
  }
  public function getAddressId()
  {
    return $this->addressId;
  }
  public function setAddressLine1($addressLine1)
  {
    $this->addressLine1 = $addressLine1;
  }
  public function getAddressLine1()
  {
    return $this->addressLine1;
  }
  public function setAddressLine2($addressLine2)
  {
    $this->addressLine2 = $addressLine2;
  }
  public function getAddressLine2()
  {
    return $this->addressLine2;
  }
  public function setAddressLine3($addressLine3)
  {
    $this->addressLine3 = $addressLine3;
  }
  public function getAddressLine3()
  {
    return $this->addressLine3;
  }
  public function setAddressType($addressType)
  {
    $this->addressType = $addressType;
  }
  public function getAddressType()
  {
    return $this->addressType;
  }
  public function setArea($area)
  {
    $this->area = $area;
  }
  public function getArea()
  {
    return $this->area;
  }
  public function setBlock($block)
  {
    $this->block = $block;
  }
  public function getBlock()
  {
    return $this->block;
  }
  public function setBuilding($building)
  {
    $this->building = $building;
  }
  public function getBuilding()
  {
    return $this->building;
  }
  public function setBusinessName($businessName)
  {
    $this->businessName = $businessName;
  }
  public function getBusinessName()
  {
    return $this->businessName;
  }
  public function setCity($city)
  {
    $this->city = $city;
  }
  public function getCity()
  {
    return $this->city;
  }
  public function setCountry($country)
  {
    $this->country = $country;
  }
  public function getCountry()
  {
    return $this->country;
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
  public function setFloor($floor)
  {
    $this->floor = $floor;
  }
  public function getFloor()
  {
    return $this->floor;
  }
  public function setLabel($label)
  {
    $this->label = $label;
  }
  public function getLabel()
  {
    return $this->label;
  }
  public function setLocality($locality)
  {
    $this->locality = $locality;
  }
  public function getLocality()
  {
    return $this->locality;
  }
  public function setModificationTimestamp($modificationTimestamp)
  {
    $this->modificationTimestamp = $modificationTimestamp;
  }
  public function getModificationTimestamp()
  {
    return $this->modificationTimestamp;
  }
  public function setPostalCode($postalCode)
  {
    $this->postalCode = $postalCode;
  }
  public function getPostalCode()
  {
    return $this->postalCode;
  }
  public function setPrimary($primary)
  {
    $this->primary = $primary;
  }
  public function getPrimary()
  {
    return $this->primary;
  }
  public function setRoute(Dothatapi_Service_Order_Route $route)
  {
    $this->route = $route;
  }
  public function getRoute()
  {
    return $this->route;
  }
  public function setRouteId($routeId)
  {
    $this->routeId = $routeId;
  }
  public function getRouteId()
  {
    return $this->routeId;
  }
  public function setServiceArea(Dothatapi_Service_Order_ServiceArea $serviceArea)
  {
    $this->serviceArea = $serviceArea;
  }
  public function getServiceArea()
  {
    return $this->serviceArea;
  }
  public function setServiceAreaId($serviceAreaId)
  {
    $this->serviceAreaId = $serviceAreaId;
  }
  public function getServiceAreaId()
  {
    return $this->serviceAreaId;
  }
  public function setServicedAddress(Dothatapi_Service_Order_ServicedAddress $servicedAddress)
  {
    $this->servicedAddress = $servicedAddress;
  }
  public function getServicedAddress()
  {
    return $this->servicedAddress;
  }
  public function setServicedAddressId($servicedAddressId)
  {
    $this->servicedAddressId = $servicedAddressId;
  }
  public function getServicedAddressId()
  {
    return $this->servicedAddressId;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
  public function setStateCode($stateCode)
  {
    $this->stateCode = $stateCode;
  }
  public function getStateCode()
  {
    return $this->stateCode;
  }
  public function setSubLocality($subLocality)
  {
    $this->subLocality = $subLocality;
  }
  public function getSubLocality()
  {
    return $this->subLocality;
  }
  public function setUnitNumber($unitNumber)
  {
    $this->unitNumber = $unitNumber;
  }
  public function getUnitNumber()
  {
    return $this->unitNumber;
  }
  public function setVerificationStatus($verificationStatus)
  {
    $this->verificationStatus = $verificationStatus;
  }
  public function getVerificationStatus()
  {
    return $this->verificationStatus;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
}

class DoThatAPI_Service_Order_CustomerContact extends Google_Collection
{
  protected $collection_key = 'phoneNumbers';
  protected $internal_gapi_mappings = array(
  );
  public $active;
  public $contactId;
  public $creationTimestamp;
  public $deleted;
  protected $emailAddressesType = 'Dothatapi_Service_Order_EmailAddress';
  protected $emailAddressesDataType = 'array';
  public $label;
  public $modificationTimestamp;
  public $name;
  protected $phoneNumbersType = 'Dothatapi_Service_Order_PhoneNumber';
  protected $phoneNumbersDataType = 'array';
  public $primary;
  public $verificationStatus;
  public $version;


  public function setActive($active)
  {
    $this->active = $active;
  }
  public function getActive()
  {
    return $this->active;
  }
  public function setContactId($contactId)
  {
    $this->contactId = $contactId;
  }
  public function getContactId()
  {
    return $this->contactId;
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
  public function setEmailAddresses($emailAddresses)
  {
    $this->emailAddresses = $emailAddresses;
  }
  public function getEmailAddresses()
  {
    return $this->emailAddresses;
  }
  public function setLabel($label)
  {
    $this->label = $label;
  }
  public function getLabel()
  {
    return $this->label;
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
  public function setPhoneNumbers($phoneNumbers)
  {
    $this->phoneNumbers = $phoneNumbers;
  }
  public function getPhoneNumbers()
  {
    return $this->phoneNumbers;
  }
  public function setPrimary($primary)
  {
    $this->primary = $primary;
  }
  public function getPrimary()
  {
    return $this->primary;
  }
  public function setVerificationStatus($verificationStatus)
  {
    $this->verificationStatus = $verificationStatus;
  }
  public function getVerificationStatus()
  {
    return $this->verificationStatus;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
}

class DoThatAPI_Service_Order_EmailAddress extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $active;
  public $address;
  public $deleted;
  public $label;
  public $primary;
  public $verificationStatus;


  public function setActive($active)
  {
    $this->active = $active;
  }
  public function getActive()
  {
    return $this->active;
  }
  public function setAddress($address)
  {
    $this->address = $address;
  }
  public function getAddress()
  {
    return $this->address;
  }
  public function setDeleted($deleted)
  {
    $this->deleted = $deleted;
  }
  public function getDeleted()
  {
    return $this->deleted;
  }
  public function setLabel($label)
  {
    $this->label = $label;
  }
  public function getLabel()
  {
    return $this->label;
  }
  public function setPrimary($primary)
  {
    $this->primary = $primary;
  }
  public function getPrimary()
  {
    return $this->primary;
  }
  public function setVerificationStatus($verificationStatus)
  {
    $this->verificationStatus = $verificationStatus;
  }
  public function getVerificationStatus()
  {
    return $this->verificationStatus;
  }
}

class DoThatAPI_Service_Order_Order extends Google_Collection
{
  protected $collection_key = 'orderItems';
  protected $internal_gapi_mappings = array(
  );
  protected $changeContextType = 'Dothatapi_Service_Order_ChangeContext';
  protected $changeContextDataType = '';
  public $creationTimestamp;
  protected $customerType = 'Dothatapi_Service_Order_Customer';
  protected $customerDataType = '';
  public $date;
  public $modificationTimestamp;
  public $orderId;
  protected $orderItemsType = 'Dothatapi_Service_Order_OrderItem';
  protected $orderItemsDataType = 'array';
  public $orderSource;
  public $placementStatus;
  public $version;


  public function setChangeContext(Dothatapi_Service_Order_ChangeContext $changeContext)
  {
    $this->changeContext = $changeContext;
  }
  public function getChangeContext()
  {
    return $this->changeContext;
  }
  public function setCreationTimestamp($creationTimestamp)
  {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp()
  {
    return $this->creationTimestamp;
  }
  public function setCustomer(Dothatapi_Service_Order_Customer $customer)
  {
    $this->customer = $customer;
  }
  public function getCustomer()
  {
    return $this->customer;
  }
  public function setDate($date)
  {
    $this->date = $date;
  }
  public function getDate()
  {
    return $this->date;
  }
  public function setModificationTimestamp($modificationTimestamp)
  {
    $this->modificationTimestamp = $modificationTimestamp;
  }
  public function getModificationTimestamp()
  {
    return $this->modificationTimestamp;
  }
  public function setOrderId($orderId)
  {
    $this->orderId = $orderId;
  }
  public function getOrderId()
  {
    return $this->orderId;
  }
  public function setOrderItems($orderItems)
  {
    $this->orderItems = $orderItems;
  }
  public function getOrderItems()
  {
    return $this->orderItems;
  }
  public function setOrderSource($orderSource)
  {
    $this->orderSource = $orderSource;
  }
  public function getOrderSource()
  {
    return $this->orderSource;
  }
  public function setPlacementStatus($placementStatus)
  {
    $this->placementStatus = $placementStatus;
  }
  public function getPlacementStatus()
  {
    return $this->placementStatus;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
}

class DoThatAPI_Service_Order_OrderCollection extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Dothatapi_Service_Order_Order';
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

class DoThatAPI_Service_Order_OrderItem extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $placementStatus;
  protected $productType = 'Dothatapi_Service_Order_Product';
  protected $productDataType = '';
  public $productId;
  public $quantity;


  public function setPlacementStatus($placementStatus)
  {
    $this->placementStatus = $placementStatus;
  }
  public function getPlacementStatus()
  {
    return $this->placementStatus;
  }
  public function setProduct(Dothatapi_Service_Order_Product $product)
  {
    $this->product = $product;
  }
  public function getProduct()
  {
    return $this->product;
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
}

class DoThatAPI_Service_Order_PhoneNumber extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $active;
  public $deleted;
  public $label;
  public $number;
  public $primary;
  public $verificationStatus;


  public function setActive($active)
  {
    $this->active = $active;
  }
  public function getActive()
  {
    return $this->active;
  }
  public function setDeleted($deleted)
  {
    $this->deleted = $deleted;
  }
  public function getDeleted()
  {
    return $this->deleted;
  }
  public function setLabel($label)
  {
    $this->label = $label;
  }
  public function getLabel()
  {
    return $this->label;
  }
  public function setNumber($number)
  {
    $this->number = $number;
  }
  public function getNumber()
  {
    return $this->number;
  }
  public function setPrimary($primary)
  {
    $this->primary = $primary;
  }
  public function getPrimary()
  {
    return $this->primary;
  }
  public function setVerificationStatus($verificationStatus)
  {
    $this->verificationStatus = $verificationStatus;
  }
  public function getVerificationStatus()
  {
    return $this->verificationStatus;
  }
}

class DoThatAPI_Service_Order_Product extends Google_Collection
{
  protected $collection_key = 'priceLists';
  protected $internal_gapi_mappings = array(
  );
  public $active;
  protected $availabilityType = 'Dothatapi_Service_Order_ProductAvailability';
  protected $availabilityDataType = '';
  public $category;
  public $creationTimestamp;
  public $deleted;
  public $description;
  public $modificationTimestamp;
  public $name;
  protected $priceListsType = 'Dothatapi_Service_Order_ProductPriceList';
  protected $priceListsDataType = 'array';
  public $productCode;
  public $productId;
  public $quantity;
  public $quantityUnit;
  public $serviceProviderId;
  public $version;
  protected $visibilityType = 'Dothatapi_Service_Order_ProductVisibility';
  protected $visibilityDataType = '';


  public function setActive($active)
  {
    $this->active = $active;
  }
  public function getActive()
  {
    return $this->active;
  }
  public function setAvailability(Dothatapi_Service_Order_ProductAvailability $availability)
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
  public function setVisibility(Dothatapi_Service_Order_ProductVisibility $visibility)
  {
    $this->visibility = $visibility;
  }
  public function getVisibility()
  {
    return $this->visibility;
  }
}

class DoThatAPI_Service_Order_ProductAvailability extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $availableFrom;
  public $availableUntil;
  protected $scheduleType = 'Dothatapi_Service_Order_Schedule';
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
  public function setSchedule(Dothatapi_Service_Order_Schedule $schedule)
  {
    $this->schedule = $schedule;
  }
  public function getSchedule()
  {
    return $this->schedule;
  }
}

class DoThatAPI_Service_Order_ProductPrice extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $amountType = 'Dothatapi_Service_Order_Amount';
  protected $amountDataType = '';
  public $duration;
  public $durationType;
  protected $scheduleType = 'Dothatapi_Service_Order_Schedule';
  protected $scheduleDataType = '';


  public function setAmount(Dothatapi_Service_Order_Amount $amount)
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
  public function setSchedule(Dothatapi_Service_Order_Schedule $schedule)
  {
    $this->schedule = $schedule;
  }
  public function getSchedule()
  {
    return $this->schedule;
  }
}

class DoThatAPI_Service_Order_ProductPriceList extends Google_Collection
{
  protected $collection_key = 'prices';
  protected $internal_gapi_mappings = array(
  );
  public $endDate;
  protected $pricesType = 'Dothatapi_Service_Order_ProductPrice';
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

class DoThatAPI_Service_Order_ProductVisibility extends Google_Model
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

class DoThatAPI_Service_Order_Route extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $active;
  public $creationTimestamp;
  public $deleted;
  public $modificationTimestamp;
  public $name;
  public $routeCode;
  public $routeId;
  public $version;


  public function setActive($active)
  {
    $this->active = $active;
  }
  public function getActive()
  {
    return $this->active;
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
  public function setRouteCode($routeCode)
  {
    $this->routeCode = $routeCode;
  }
  public function getRouteCode()
  {
    return $this->routeCode;
  }
  public function setRouteId($routeId)
  {
    $this->routeId = $routeId;
  }
  public function getRouteId()
  {
    return $this->routeId;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
}

class DoThatAPI_Service_Order_Schedule extends Google_Collection
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

class DoThatAPI_Service_Order_ServiceArea extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $area;
  public $block;
  public $building;
  public $city;
  public $country;
  public $locality;
  public $postalCode;
  public $serviceAreaId;
  public $state;
  public $stateCode;
  public $subLocality;


  public function setArea($area)
  {
    $this->area = $area;
  }
  public function getArea()
  {
    return $this->area;
  }
  public function setBlock($block)
  {
    $this->block = $block;
  }
  public function getBlock()
  {
    return $this->block;
  }
  public function setBuilding($building)
  {
    $this->building = $building;
  }
  public function getBuilding()
  {
    return $this->building;
  }
  public function setCity($city)
  {
    $this->city = $city;
  }
  public function getCity()
  {
    return $this->city;
  }
  public function setCountry($country)
  {
    $this->country = $country;
  }
  public function getCountry()
  {
    return $this->country;
  }
  public function setLocality($locality)
  {
    $this->locality = $locality;
  }
  public function getLocality()
  {
    return $this->locality;
  }
  public function setPostalCode($postalCode)
  {
    $this->postalCode = $postalCode;
  }
  public function getPostalCode()
  {
    return $this->postalCode;
  }
  public function setServiceAreaId($serviceAreaId)
  {
    $this->serviceAreaId = $serviceAreaId;
  }
  public function getServiceAreaId()
  {
    return $this->serviceAreaId;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
  public function setStateCode($stateCode)
  {
    $this->stateCode = $stateCode;
  }
  public function getStateCode()
  {
    return $this->stateCode;
  }
  public function setSubLocality($subLocality)
  {
    $this->subLocality = $subLocality;
  }
  public function getSubLocality()
  {
    return $this->subLocality;
  }
}

class DoThatAPI_Service_Order_ServicedAddress extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $businessName;
  public $floor;
  public $houseNumber;
  protected $serviceAreaType = 'Dothatapi_Service_Order_ServiceArea';
  protected $serviceAreaDataType = '';
  public $servicedAddressId;


  public function setBusinessName($businessName)
  {
    $this->businessName = $businessName;
  }
  public function getBusinessName()
  {
    return $this->businessName;
  }
  public function setFloor($floor)
  {
    $this->floor = $floor;
  }
  public function getFloor()
  {
    return $this->floor;
  }
  public function setHouseNumber($houseNumber)
  {
    $this->houseNumber = $houseNumber;
  }
  public function getHouseNumber()
  {
    return $this->houseNumber;
  }
  public function setServiceArea(Dothatapi_Service_Order_ServiceArea $serviceArea)
  {
    $this->serviceArea = $serviceArea;
  }
  public function getServiceArea()
  {
    return $this->serviceArea;
  }
  public function setServicedAddressId($servicedAddressId)
  {
    $this->servicedAddressId = $servicedAddressId;
  }
  public function getServicedAddressId()
  {
    return $this->servicedAddressId;
  }
}
