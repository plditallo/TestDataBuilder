<?php
 
abstract class TestDataBuilder_CustomBuilder extends TestDataBuilder_Builder
{
    /**
     * @var array
     */
    protected $fields = array();

    /**
     * @param string $field
     * @param mixed $value
     * @return TestDataBuilder_CustomBuilder
     */
    public function with($field, $value)
    {
        $this->fields[$field] = $value;
        return $this;
    }
}
