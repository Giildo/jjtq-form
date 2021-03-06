<?php

namespace Jojotique\Form\Form;

/**
 * Classe qui permet de créer un formulaire avec des "class" Bootstrap
 *
 * Class BootstrapForm
 * @package Jojotique\Framework\Form
 */
class BootstrapForm extends Form implements FormInterface
{
    /**
     * @param string $legend
     * @param null|string $class
     */
    public function fieldset(string $legend, ?string $class = ' form-group'): void
    {
        parent::fieldset($legend, $class);
    }

    /**
     * @param string $name
     * @param null|string $label
     * @param null|string $value
     * @param null|string $type
     * @param null|string $class
     * @param null|string $autocompletion
     * @return void
     */
    public function input(
        string $name,
        ?string $label = null,
        ?string $value = null,
        ?string $type = 'text',
        ?string $class = null,
        ?string $autocompletion = ''
    ): void {
        $class .= ' form-control';

        $this->form .= "<div class='form-group'>";
        parent::input($name, $label, $value, $type, $class, $autocompletion);
        $this->form .= "</div>";
    }

    /**
     * @param string $name
     * @param null|string $label
     * @param int|null $rows
     * @param null|string $value
     * @param null|string $class
     * @return void
     */
    public function textarea(
        string $name,
        ?string $label = null,
        ?int $rows = 10,
        ?string $value = null,
        ?string $class = null
    ): void {
        $class .= ' form-control';

        $this->form .= "<div class='form-group'>";
        parent::textarea($name, $label, $rows, $value, $class);
        $this->form .= "</div>";
    }

    /**
     * @param string $name
     * @param array $options
     * @param null|string $optionCurrent
     * @param null|string $label
     * @param null|string $class
     */
    public function select(
        string $name,
        array $options,
        ?string $optionCurrent = '',
        ?string $label = '',
        ?string $class = ''
    ): void {
        $class .= ' form-control';

        $this->form .= "<div class='form-group'>";
        parent::select($name, $options, $optionCurrent, $label, $class);
        $this->form .= "</div>";
    }

    /**
     * @param array $valuesCheckbox
     * @param array|null $labelsCheckbox
     * @param array|null $valuesChecked
     * @param null|string $classLabel
     * @param null|string $classInput
     * @param bool|null $bootstrap
     */
    public function checkbox(
        array $valuesCheckbox,
        ?array $labelsCheckbox = [],
        ?array $valuesChecked = [],
        ?string $classLabel = '',
        ?string $classInput = '',
        ?bool $bootstrap = true
    ): void
    {
        $classLabel .= ' form-check-label';
        $classInput .= ' form-check-input';

        parent::checkbox($valuesCheckbox, $labelsCheckbox, $valuesChecked, $classLabel, $classInput, $bootstrap);
    }

    /**
     * @param null|string $text
     * @param null|string $type
     * @param null|string $class
     * @return string
     */
    public function submit(?string $text = 'Valider', ?string $type = 'button', ?string $class = ''): string
    {
        $class .= ' btn btn-primary';

        return parent::submit($text, $type, $class);
    }
}
