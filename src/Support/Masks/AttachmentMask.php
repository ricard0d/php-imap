<?php
/*
* File: AttachmentMask.php
* Category: Mask
* Author: M.Goldenbaum
* Created: 14.03.19 20:49
* Updated: -
*
* Description:
*  -
*/

namespace ricard0d\PHPIMAP\Support\Masks;

use ricard0d\PHPIMAP\Attachment;

/**
 * Class AttachmentMask
 *
 * @package ricard0d\PHPIMAP\Support\Masks
 */
class AttachmentMask extends Mask {

    /** @var Attachment $parent */
    protected $parent;

    /**
     * Get the attachment content base64 encoded
     *
     * @return string|null
     */
    public function getContentBase64Encoded() {
        return base64_encode($this->parent->content);
    }

    /**
     * Get a base64 image src string
     *
     * @return string|null
     */
    public function getImageSrc() {
        return 'data:'.$this->parent->content_type.';base64,'.$this->getContentBase64Encoded();
    }
}