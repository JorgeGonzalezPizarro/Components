<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:27
 */

namespace App\Domain\Components\Domain\Component\Components;


use App\Domain\Components\Domain\Component\Component;
use App\Domain\Components\Domain\Component\Components\ComponentsVO\ComponentAlto;
use App\Domain\Components\Domain\Component\Components\ComponentsVO\ComponentAncho;
use App\Domain\Components\Domain\Component\Components\ComponentsVO\ComponentId;
use App\Domain\Components\Domain\Component\Components\ComponentsVO\ComponentNombre;
use App\Domain\Components\Domain\Component\Components\ComponentsVO\ComponentPosition;
use App\Domain\Components\Exception\ImplementDomainException;
use App\Domain\Components\Exception\MyException;
use Doctrine\ORM\Mapping as ORM;
use DomainException;
use Exception;
use App\Domain\Components\Exception\ArrayException;
use function json_encode;

/**
 * @ORM\Entity
 * @ORM\Table(name="component_image")
 */
class ComponentImage extends \App\Domain\Components\Domain\Component\Component
{
    protected $componentId;
    protected $ancho;
    protected $alto;
    protected $position;
    private $imageFormat;
    private $imageUrl;
    private $imageWeight;
    protected $anuncioId;
    public function __construct($anuncioId,$ancho,$alto,$position,$nombre,ImageUrl $imageUrl, ImageFormat $imageFormat, ImageWeight $imageWeight)
    {
        $this->anuncioId=$anuncioId;
        $this->componentId= new ComponentId(new UUid());
        $this->position=new ComponentPosition($position);
        $this->ancho=new ComponentAncho($ancho);
        $this->alto=new ComponentAlto($alto);
        $this->nombre = new ComponentNombre($nombre);
        $this->imageFormat = $imageFormat;
        $this->imageUrl = $imageUrl;
        $this->imageWeight = $imageWeight;
    }
    
    protected static function constructComponent($anuncioId,$componentObject)
    {
        try {
            return new self ($anuncioId,
                $componentObject['imageUrl'],
                $componentObject['imageFormat'],
                $componentObject['imageWeight'],
                $componentObject['ancho'],
                $componentObject['alto'],
                $componentObject['position'],
                $componentObject['name']);;
        } catch (Exception $domainException) {
            throw new MyException($domainException);
    
        }

        }
    
    
    public function getComponentId()
    {
        return $this->componentId;
        
    }
    
    public function setComponentId($id)
    {
        parent::setIdComponent($this->componentId);
    }
    
    public function getPosicion()
    {
        return $this->position;
    }
    
    public function getNombre()
    {
        return $this->nombre;
    }
    
    public function setNombre($nombre)
    {
        parent::setNombre($this->nombre);
    }
    
    public function setAncho($ancho)
    {
        parent::setAncho($this->ancho);
    }
    
    public function setAlto($alto)
    {
        parent::setAlto($this->alto);
    }
    
    public function setComponentPosition($position)
    {
        parent::setPosicion($this->position);
    }
    
    public function getAncho()
    {
        return $this->ancho;
    }
    
    public function getAlto()
    {
        return $this->alto;
    }
    
    public function getComponentPosition()
    {
        return $this->position;
    }
    
    public function getComponent()
    {
        return $this;
    }
    
    public function getAnuncioId()
    {
        return $this->anuncioId;
    }
    
    public function setAnuncioId($anuncioId)
    {
        parent::setAnuncioId($this->anuncioId);
        
    }
}