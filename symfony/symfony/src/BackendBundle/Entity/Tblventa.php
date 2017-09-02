<?php

namespace BackendBundle\Entity;

/**
 * Tblventa
 */
class Tblventa
{
    /**
     * @var integer
     */
    private $idventa;

    /**
     * @var string
     */
    private $categoria;

    /**
     * @var string
     */
    private $mes;

    /**
     * @var string
     */
    private $total;


    /**
     * Get idventa
     *
     * @return integer
     */
    public function getIdventa()
    {
        return $this->idventa;
    }

    /**
     * Set categoria
     *
     * @param string $categoria
     *
     * @return Tblventa
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set mes
     *
     * @param string $mes
     *
     * @return Tblventa
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return string
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set total
     *
     * @param string $total
     *
     * @return Tblventa
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }
}

