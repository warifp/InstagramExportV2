<?php

namespace InstagramAPI\Response;

use InstagramAPI\Response;

/**
 * OnTagProductResponse.
 *
 * @method mixed getMessage()
 * @method Model\Product getProductItem()
 * @method string getStatus()
 * @method Model\User getUser()
 * @method Model\_Message[] get_Messages()
 * @method bool isMessage()
 * @method bool isProductItem()
 * @method bool isStatus()
 * @method bool isUser()
 * @method bool is_Messages()
 * @method $this setMessage(mixed $value)
 * @method $this setProductItem(Model\Product $value)
 * @method $this setStatus(string $value)
 * @method $this setUser(Model\User $value)
 * @method $this set_Messages(Model\_Message[] $value)
 * @method $this unsetMessage()
 * @method $this unsetProductItem()
 * @method $this unsetStatus()
 * @method $this unsetUser()
 * @method $this unset_Messages()
 */
class OnTagProductResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'product_item'       => 'Model\Product',
        'user'               => 'Model\User',
    ];
}
