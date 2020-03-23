<?php

/**
 * Object for storing an individual collected item as an 'Item Card'
 * 
 * @property $title String the name of the item
 * @property $attribs Array an array of strings storing the item's attributes
 * 
 * @method __construct(String $title, Array $attribs) initialise the card with the title $title and array of attributes $attribs
 * 
 * @method printCard() none method to print a card to html inside a div with class of itemCard
 * @method getTitle() getter method for title variable
 * @method setTitle(String $newTitle) setter method for title variable
 * @method getAttrib(String $attribName) getter method for attribute with key Attrib
 * @method setAttrib(String $attribName, $attribValue) set the attribute with key $attribName to $attribValue
 * @method getAttribs() return the array of attributes for this card
 * @method removeAttrib(String $attribName) unset the attrib with key $attribName
 */

class Card
{
    public $title;
    public $attribs = [];

    public function __construct (String $title, Array $attribs=[])
    {
        $this->title = $title;
        $this->attribs = $attribs;
    }

    public function printCard()
    {
        echo '<div class=itemCard>';
        echo '<h1>' . $this->title . '</h1>';
        foreach($this->attribs as $attrib => $desc)
        {
            echo '<h2>' . $attrib . '</h2>';
            echo '<p>' . $desc . '</p>';
        }
        echo '</div>';
    }

    public function getTitle () : String
    {
        return $this->title;
    }

    public function setTitle (String $newTitle)
    {
        $this->title = $newTitle;
    }

    public function getAttrib (String $attribName)
    {
        return $this->attribs[$attribName];
    }

    public function setAttrib (String $attribName, $attribValue)
    {
        $this->attribs[$attribName] = $attribValue;
    }

    public function getAttribs ()
    {
        return $this->attribs;
    }

    public function removeAttrib (String $attribName)
    {
        unset($this->attribs[$attribName]);
    }
}