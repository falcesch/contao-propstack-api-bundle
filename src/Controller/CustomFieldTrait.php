<?php

namespace Oveleon\ContaoPropstackApiBundle\Controller;

/**
 * Trait for classes which allow the passing of custom fields
 *
 * @author Daniele Sciannimanica <https://github.com/doishub>
 */
trait CustomFieldTrait
{
    private ?array $customFields = null;

    /**
     * Set custom fields
     *
     * Allows to add unknown option fields (they must be created in Propstack)
     */
    public function setCustomFields(array $fields): self
    {
        $this->customFields = $fields;

        return $this;
    }

    /**
     * Get custom fields
     */
    public function getCustomFields(): ?array
    {
        return ['custom_fields' => $this->customFields];
    }
}
