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
 * Service definition for Customer (v1).
 *
 * <p>
 * API to access Customers</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class DoThatAPI_Service_Customer extends Google_Service
{
  /** View your email address. */
  const USERINFO_EMAIL =
      "https://www.googleapis.com/auth/userinfo.email";


  private $base_methods;

  /**
   * Constructs the internal representation of the Customer service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://dev-dothat-api.appspot.com/_ah/api/';
    $this->servicePath = 'customer/v1/serviceProviders/';
    $this->version = 'v1';
    $this->serviceName = 'customer';

    $this->base_methods = new Google_Service_Resource(
        $this,
        $this->serviceName,
        '',
        array(
          'methods' => array(
            'addCustomerAddressRequest' => array(
              'path' => '{svcProviderId}/customers/{custId}/addresses',
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
            ),'addCustomerContactRequest' => array(
              'path' => '{svcProviderId}/customers/{custId}/contacts',
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
            ),'createCustomerRequest' => array(
              'path' => '{svcProviderId}/customers',
              'httpMethod' => 'POST',
              'parameters' => array(
                'svcProviderId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'findCustomersRequest' => array(
              'path' => '{svcProviderId}/customers',
              'httpMethod' => 'GET',
              'parameters' => array(
                'svcProviderId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'query' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'getCustomerRequest' => array(
              'path' => '{svcProviderId}/customers/{custId}',
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
            ),'removeCustomerAddressRequest' => array(
              'path' => '{svcProviderId}/customers/{custId}/addresses/{addrId}',
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
                'addrId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'expunge' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                  'required' => true,
                ),
              ),
            ),'removeCustomerContactRequest' => array(
              'path' => '{svcProviderId}/customers/{custId}/contacts/{custContactId}',
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
                'custContactId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'expunge' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                  'required' => true,
                ),
              ),
            ),'updateCustomerAddressRequest' => array(
              'path' => '{svcProviderId}/customers/{custId}/addresses/{addrId}',
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
                'addrId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'updateCustomerContactRequest' => array(
              'path' => '{svcProviderId}/customers/{custId}/contacts/{custContactId}',
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
                'custContactId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'updateCustomerRequest' => array(
              'path' => '{svcProviderId}/customers/{custId}',
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
              ),
            ),
          )
        )
    );
  }
  /**
   * (addCustomerAddressRequest)
   *
   * @param string $svcProviderId
   * @param string $custId
   * @param DoThatAPI_CustomerAddress $postBody
   * @param array $optParams Optional parameters.
   * @return DoThatAPI_Service_Customer_CustomerAddress
   */
  public function addCustomerAddressRequest($svcProviderId, $custId, DoThatAPI_Service_Customer_CustomerAddress $postBody, $optParams = array())
  {
    $params = array('svcProviderId' => $svcProviderId, 'custId' => $custId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->base_methods->call('addCustomerAddressRequest', array($params), "DoThatAPI_Service_Customer_CustomerAddress");
  }
  /**
   * (addCustomerContactRequest)
   *
   * @param string $svcProviderId
   * @param string $custId
   * @param DoThatAPI_CustomerContact $postBody
   * @param array $optParams Optional parameters.
   * @return DoThatAPI_Service_Customer_CustomerContact
   */
  public function addCustomerContactRequest($svcProviderId, $custId, DoThatAPI_Service_Customer_CustomerContact $postBody, $optParams = array())
  {
    $params = array('svcProviderId' => $svcProviderId, 'custId' => $custId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->base_methods->call('addCustomerContactRequest', array($params), "DoThatAPI_Service_Customer_CustomerContact");
  }
  /**
   * (createCustomerRequest)
   *
   * @param string $svcProviderId
   * @param DoThatAPI_Customer $postBody
   * @param array $optParams Optional parameters.
   * @return DoThatAPI_Service_Customer_Customer
   */
  public function createCustomerRequest($svcProviderId, DoThatAPI_Service_Customer_Customer $postBody, $optParams = array())
  {
    $params = array('svcProviderId' => $svcProviderId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->base_methods->call('createCustomerRequest', array($params), "DoThatAPI_Service_Customer_Customer");
  }
  /**
   * (findCustomersRequest)
   *
   * @param string $svcProviderId
   * @param array $optParams Optional parameters.
   *
   * @opt_param string query
   * @return DoThatAPI_Service_Customer_CustomerCollection
   */
  public function findCustomersRequest($svcProviderId, $optParams = array())
  {
    $params = array('svcProviderId' => $svcProviderId);
    $params = array_merge($params, $optParams);
    return $this->base_methods->call('findCustomersRequest', array($params), "DoThatAPI_Service_Customer_CustomerCollection");
  }
  /**
   * (getCustomerRequest)
   *
   * @param string $svcProviderId
   * @param string $custId
   * @param array $optParams Optional parameters.
   * @return DoThatAPI_Service_Customer_Customer
   */
  public function getCustomerRequest($svcProviderId, $custId, $optParams = array())
  {
    $params = array('svcProviderId' => $svcProviderId, 'custId' => $custId);
    $params = array_merge($params, $optParams);
    return $this->base_methods->call('getCustomerRequest', array($params), "DoThatAPI_Service_Customer_Customer");
  }
  /**
   * (removeCustomerAddressRequest)
   *
   * @param string $svcProviderId
   * @param string $custId
   * @param string $addrId
   * @param bool $expunge
   * @param array $optParams Optional parameters.
   * @return DoThatAPI_Service_Customer_CustomerAddress
   */
  public function removeCustomerAddressRequest($svcProviderId, $custId, $addrId, $expunge, $optParams = array())
  {
    $params = array('svcProviderId' => $svcProviderId, 'custId' => $custId, 'addrId' => $addrId, 'expunge' => $expunge);
    $params = array_merge($params, $optParams);
    return $this->base_methods->call('removeCustomerAddressRequest', array($params), "DoThatAPI_Service_Customer_CustomerAddress");
  }
  /**
   * (removeCustomerContactRequest)
   *
   * @param string $svcProviderId
   * @param string $custId
   * @param string $custContactId
   * @param bool $expunge
   * @param array $optParams Optional parameters.
   * @return DoThatAPI_Service_Customer_CustomerContact
   */
  public function removeCustomerContactRequest($svcProviderId, $custId, $custContactId, $expunge, $optParams = array())
  {
    $params = array('svcProviderId' => $svcProviderId, 'custId' => $custId, 'custContactId' => $custContactId, 'expunge' => $expunge);
    $params = array_merge($params, $optParams);
    return $this->base_methods->call('removeCustomerContactRequest', array($params), "DoThatAPI_Service_Customer_CustomerContact");
  }
  /**
   * (updateCustomerAddressRequest)
   *
   * @param string $svcProviderId
   * @param string $custId
   * @param string $addrId
   * @param DoThatAPI_CustomerAddress $postBody
   * @param array $optParams Optional parameters.
   * @return DoThatAPI_Service_Customer_CustomerAddress
   */
  public function updateCustomerAddressRequest($svcProviderId, $custId, $addrId, DoThatAPI_Service_Customer_CustomerAddress $postBody, $optParams = array())
  {
    $params = array('svcProviderId' => $svcProviderId, 'custId' => $custId, 'addrId' => $addrId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->base_methods->call('updateCustomerAddressRequest', array($params), "DoThatAPI_Service_Customer_CustomerAddress");
  }
  /**
   * (updateCustomerContactRequest)
   *
   * @param string $svcProviderId
   * @param string $custId
   * @param string $custContactId
   * @param DoThatAPI_CustomerContact $postBody
   * @param array $optParams Optional parameters.
   * @return DoThatAPI_Service_Customer_CustomerContact
   */
  public function updateCustomerContactRequest($svcProviderId, $custId, $custContactId, DoThatAPI_Service_Customer_CustomerContact $postBody, $optParams = array())
  {
    $params = array('svcProviderId' => $svcProviderId, 'custId' => $custId, 'custContactId' => $custContactId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->base_methods->call('updateCustomerContactRequest', array($params), "DoThatAPI_Service_Customer_CustomerContact");
  }
  /**
   * (updateCustomerRequest)
   *
   * @param string $svcProviderId
   * @param string $custId
   * @param DoThatAPI_Customer $postBody
   * @param array $optParams Optional parameters.
   * @return DoThatAPI_Service_Customer_Customer
   */
  public function updateCustomerRequest($svcProviderId, $custId, DoThatAPI_Service_Customer_Customer $postBody, $optParams = array())
  {
    $params = array('svcProviderId' => $svcProviderId, 'custId' => $custId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->base_methods->call('updateCustomerRequest', array($params), "DoThatAPI_Service_Customer_Customer");
  }
}





class DoThatAPI_Service_Customer_Customer extends Google_Collection
{
  protected $collection_key = 'contacts';
  protected $internal_gapi_mappings = array(
  );
  public $active;
  protected $addressesType = 'Dothatapi_Service_Customer_CustomerAddress';
  protected $addressesDataType = 'array';
  public $businessName;
  protected $contactsType = 'Dothatapi_Service_Customer_CustomerContact';
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

class DoThatAPI_Service_Customer_CustomerAddress extends Google_Model
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
  protected $routeType = 'Dothatapi_Service_Customer_Route';
  protected $routeDataType = '';
  public $routeId;
  protected $serviceAreaType = 'Dothatapi_Service_Customer_ServiceArea';
  protected $serviceAreaDataType = '';
  public $serviceAreaId;
  protected $servicedAddressType = 'Dothatapi_Service_Customer_ServicedAddress';
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
  public function setRoute(Dothatapi_Service_Customer_Route $route)
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
  public function setServiceArea(Dothatapi_Service_Customer_ServiceArea $serviceArea)
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
  public function setServicedAddress(Dothatapi_Service_Customer_ServicedAddress $servicedAddress)
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

class DoThatAPI_Service_Customer_CustomerCollection extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Dothatapi_Service_Customer_Customer';
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

class DoThatAPI_Service_Customer_CustomerContact extends Google_Collection
{
  protected $collection_key = 'phoneNumbers';
  protected $internal_gapi_mappings = array(
  );
  public $active;
  public $contactId;
  public $creationTimestamp;
  public $deleted;
  protected $emailAddressesType = 'Dothatapi_Service_Customer_EmailAddress';
  protected $emailAddressesDataType = 'array';
  public $label;
  public $modificationTimestamp;
  public $name;
  protected $phoneNumbersType = 'Dothatapi_Service_Customer_PhoneNumber';
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

class DoThatAPI_Service_Customer_EmailAddress extends Google_Model
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

class DoThatAPI_Service_Customer_PhoneNumber extends Google_Model
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

class DoThatAPI_Service_Customer_Route extends Google_Model
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

class DoThatAPI_Service_Customer_ServiceArea extends Google_Model
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

class DoThatAPI_Service_Customer_ServicedAddress extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $businessName;
  public $floor;
  public $houseNumber;
  protected $serviceAreaType = 'Dothatapi_Service_Customer_ServiceArea';
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
  public function setServiceArea(Dothatapi_Service_Customer_ServiceArea $serviceArea)
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
