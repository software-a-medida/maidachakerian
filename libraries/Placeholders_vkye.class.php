<?php

defined('_EXEC') or die;

class Placeholders_vkye
{
    private $buffer;
    private $format;

    public function __construct($buffer)
    {
        $this->buffer = $buffer;
        $this->format = new Format();
    }

    public function run()
    {
        $this->buffer = $this->replace_placeholders();

        return $this->buffer;
    }

    private function replace_placeholders()
    {
        $replace = [
            '{$_vkye_seo_keywords}' => '',
            '{$_vkye_seo_description}' => ''
        ];

        return $this->format->replace($replace, $this->buffer);
    }
}
