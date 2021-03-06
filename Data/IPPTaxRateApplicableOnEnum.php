<?php

namespace Intuit\Data;

/**
 * @xmlNamespace http://schema.intuit.com/finance/v3
 * @xmlType string
 * @xmlName IPPTaxRateApplicableOnEnum
 * @var IPPTaxRateApplicableOnEnum
 * @xmlDefinition
Product: QBO
 * Description: Enumeration of  transaction type a given tax rate can be applied to
 */
class IPPTaxRateApplicableOnEnum
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
            if (property_exists('IPPTaxRateApplicableOnEnum', $initPropName)) {
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
    const IPPTAXRATEAPPLICABLEONENUM_SALES = "Sales";
    const IPPTAXRATEAPPLICABLEONENUM_PURCHASE = "Purchase";
    const IPPTAXRATEAPPLICABLEONENUM_ADJUSTMENT = "Adjustment";
    const IPPTAXRATEAPPLICABLEONENUM_OTHER = "Other";

} // end class IPPTaxRateApplicableOnEnum
