<?php

namespace Intuit\Data;

/**
 * @xmlNamespace http://schema.intuit.com/finance/v3
 * @xmlType string
 * @xmlName IPPTimeActivityTypeEnum
 * @var IPPTimeActivityTypeEnum
 * @xmlDefinition
Product: ALL
 * Description: Enumeration of time activity types.
 */
class IPPTimeActivityTypeEnum
{

    /**
     * Initializes this object, optionally with pre-defined property values
     *
     * Initializes this object and it's property members, using the dictionary
     * of key/value pairs passed as an optional argument.
     *
     * @param dictionary $keyValInitializers key/value pairs to be populated into object's properties
     * @param boolean $verbose specifies whether object should echo warnings
     */
    public function __construct($keyValInitializers = [], $verbose = false)
    {
        foreach ($keyValInitializers as $initPropName => $initPropVal) {
            if (property_exists('IPPTimeActivityTypeEnum', $initPropName)) {
                $this->{$initPropName} = $initPropVal;
            } else {
                if ($verbose)
                    echo "Property does not exist ($initPropName) in class (" . get_class($this) . ")";
            }
        }
    }

    /**
     * @xmlType value
     * @var string
     */
    public $value;
    const IPPTIMEACTIVITYTYPEENUM_EMPLOYEE = "Employee";
    const IPPTIMEACTIVITYTYPEENUM_OTHER = "Other";
    const IPPTIMEACTIVITYTYPEENUM_VENDOR = "Vendor";

} // end class IPPTimeActivityTypeEnum
