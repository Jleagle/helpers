<?php
namespace Jleagle\HtmlBuilder\Tags\Interactive;

use Jleagle\HtmlBuilder\Tags\Abstracts\AbstractContent;

class MenuItem extends AbstractContent
{
  const TYPE_CHECKBOX = 'checkbox';
  const TYPE_COMMAND = 'command';
  const TYPE_RADIO = 'radio';

  protected function _getTag()
  {
    return 'menuitem';
  }

  /**
   * @param string $label
   * @param        $content
   *
   * @return static
   */
  public static function make($label, $content = null)
  {
    $tag = new static();
    $tag->setLabel($label);
    $tag->setContents($content);
    return $tag;
  }

  /**
   * @param bool $checked
   *
   * @return $this
   */
  public function setChecked($checked = true)
  {
    if($checked)
    {
      $this->setAttribute('checked', 'checked');
    }
    else
    {
      $this->removeAttribute('checked');
    }
    return $this;
  }

  /**
   * @param string $command
   *
   * @return $this
   */
  public function setCommand($command)
  {
    $this->setAttribute('command', $command);
    return $this;
  }

  /**
   * @param bool $default
   *
   * @return $this
   */
  public function setDefault($default = true)
  {
    if($default)
    {
      $this->setAttribute('default', 'default');
    }
    else
    {
      $this->removeAttribute('default');
    }
    return $this;
  }

  /**
   * @param bool $disabled
   *
   * @return $this
   */
  public function setDisabled($disabled = true)
  {
    if($disabled)
    {
      $this->setAttribute('disabled', 'disabled');
    }
    else
    {
      $this->removeAttribute('disabled');
    }
    return $this;
  }

  /**
   * @param string $icon
   *
   * @return $this
   */
  public function setIcon($icon)
  {
    $this->setAttribute('icon', $icon);
    return $this;
  }

  /**
   * @param string $label
   *
   * @return $this
   */
  public function setLabel($label)
  {
    $this->setAttribute('label', $label);
    return $this;
  }

  /**
   * @param string $radioGroup
   *
   * @return $this
   */
  public function setRadioGroup($radioGroup)
  {
    $this->setAttribute('radiogroup', $radioGroup);
    return $this;
  }

  /**
   * @param string $type
   *
   * @return $this
   */
  public function setType($type)
  {
    $this->setAttribute('type', $type);
    return $this;
  }
}
