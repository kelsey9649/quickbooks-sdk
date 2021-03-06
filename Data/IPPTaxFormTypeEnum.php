<?php

namespace Intuit\Data;

/**
 * @xmlNamespace http://schema.intuit.com/finance/v3
 * @xmlType string
 * @xmlName IPPTaxFormTypeEnum
 * @var IPPTaxFormTypeEnum
 * @xmlDefinition
Product: QBO
 * Description: Tax Form Type holds data related to Tax Information (Tax Form Type) based on Regional compliance laws. Applicable for IN region currently. Can be used to extend for other Regions.
 */
class IPPTaxFormTypeEnum
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
            if (property_exists('IPPTaxFormTypeEnum', $initPropName)) {
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
    const IPPTAXFORMTYPEENUM_FORM_C = "Form C";
    const IPPTAXFORMTYPEENUM_FORM_F = "Form F";
    const IPPTAXFORMTYPEENUM_FORM_I = "Form I";
    const IPPTAXFORMTYPEENUM_FORM_H = "Form H";
    const IPPTAXFORMTYPEENUM_FORM_E1 = "Form E1";
    const IPPTAXFORMTYPEENUM_FORM_E2 = "Form E2";

} // end class IPPTaxFormTypeEnum
