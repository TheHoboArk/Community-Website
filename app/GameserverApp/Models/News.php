<?php

namespace GameserverApp\Models;

use GameserverApp\Interfaces\LinkableInterface;
use GameserverApp\Traits\Linkable;

class News extends Model implements LinkableInterface
{
    const EVENT = 1;
    const MAINTENANCE = 2;
    const IMPORTANT = 3;
    
    use Linkable;

    public function title()
    {
        return $this->title;
    }

    public function slug()
    {
        return $this->slug;
    }

    public function summary()
    {
        return $this->summary;
    }

    public function content()
    {
        return $this->content;
    }

    public function metaDescription()
    {
        return '';//$this->meta_description;
    }

    public function hasType()
    {
        if($this->type == '0') {
            return false;
        }

        return true;
    }

    public function presentType()
    {
        switch($this->type) {
            case self::MAINTENANCE:
                return '<span class="label label-maintenance">Maintenance</span>';

            case self::EVENT:
                return '<span class="label label-vip">Event</span>';

            case self::IMPORTANT:
                return '<span class="label label-important">Important</span>';

            default:
                return;
        }
    }

    public function linkableTemplate($url, $options = [])
    {
        // TODO: Implement name() method.
    }

    public function indexRoute()
    {
        // TODO: Implement indexRoute() method.
    }

    public function showRoute()
    {
        // TODO: Implement showRoute() method.
    }
}