<?php

namespace Intuit\Data;

/**
 * @xmlNamespace http://schema.intuit.com/finance/v3
 * @xmlType string
 * @xmlName IPPETransactionStatusEnum
 * @var IPPETransactionStatusEnum
 * @xmlDefinition
Product: ALL
 * Description: Enumeration of eTransaction status values. The statuses (Sent, Viewed, Paid, Delivery Error, Updated, Sent With ICN Error) are used by QBO eInvoicing. The rest statuses are to be used for Tradeshift Integration
 */
class IPPETransactionStatusEnum
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
            if (property_exists('IPPETransactionStatusEnum', $initPropName)) {
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
    const IPPETRANSACTIONSTATUSENUM_SENT = "Sent";
    const IPPETRANSACTIONSTATUSENUM_VIEWED = "Viewed";
    const IPPETRANSACTIONSTATUSENUM_PAID = "Paid";
    const IPPETRANSACTIONSTATUSENUM_DELIVERY_ERROR = "Delivery Error";
    const IPPETRANSACTIONSTATUSENUM_UPDATED = "Updated";
    const IPPETRANSACTIONSTATUSENUM_ERROR = "Error";
    const IPPETRANSACTIONSTATUSENUM_ACCEPTED = "Accepted";
    const IPPETRANSACTIONSTATUSENUM_REJECTED = "Rejected";
    const IPPETRANSACTIONSTATUSENUM_SENT_WITH_ICN_ERROR = "Sent With ICN Error";
    const IPPETRANSACTIONSTATUSENUM_DELIVERED = "Delivered";
    const IPPETRANSACTIONSTATUSENUM_DISPUTED = "Disputed";

} // end class IPPETransactionStatusEnum
