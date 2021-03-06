<?php

namespace Intuit\Data;

/**
 * @xmlNamespace http://schema.intuit.com/finance/v3
 * @xmlType string
 * @xmlName IPPDayOfWeekEnum
 * @var IPPDayOfWeekEnum
 * @xmlDefinition
Product: ALL
 * Description: Enumeration of the days of the week.
 */
class IPPDayOfWeekEnum
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
            if (property_exists('IPPDayOfWeekEnum', $initPropName)) {
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
    const IPPDAYOFWEEKENUM_MONDAY = "Monday";
    const IPPDAYOFWEEKENUM_TUESDAY = "Tuesday";
    const IPPDAYOFWEEKENUM_WEDNESDAY = "Wednesday";
    const IPPDAYOFWEEKENUM_THURSDAY = "Thursday";
    const IPPDAYOFWEEKENUM_FRIDAY = "Friday";
    const IPPDAYOFWEEKENUM_SATURDAY = "Saturday";
    const IPPDAYOFWEEKENUM_SUNDAY = "Sunday";

} // end class IPPDayOfWeekEnum
