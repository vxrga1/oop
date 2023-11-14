<?php


class Hirek
{
  private $cim;
  private $kategoria;
  private $tartalom;
  private $tags;

    /**
     * @param $cim
     * @param $kategoria
     */
    public function __construct($cim, $kategoria)
    {
        $this->cim = $cim;
        $this->kategoria = $kategoria;
        $this->tartalom = "";
        $this->tags = [];

    }

    /**
     * @param string $tartalom
     */
    public function setTartalom($tartalom)
    {
        $this->tartalom = $tartalom;
        return $this;
    }

    /**
     * @param array $tags
     */
    public function setTags($tag)
    {
        $this->tags[] = $tag;
        return $this;
    }
// html előnézet létrehozás eljárással
public function HtmlEloNezet()
{
    $html='<div class="preview">';
    $html.=('<h3>'.$this->cim . '</h3>');
    $html.=('<p><stron>Kategória'. $this->kategoria);
    $html.=('<p>'.$this->tartalom.'</p>');
    $html.=('<p>Címkék:'. implode(", ",$this->tags).'</p>');
    $html.='</div>';
    print ("<hr>");
    return $html;

}


}