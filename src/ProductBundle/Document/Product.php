<?php

namespace ProductBundle\Document;

class Product
{
	protected $id;


	protected $productName;


	protected $category;
	protected $brand;
	protected $productMaterial;
	protected $imageUrl;
	protected $delivery;
	protected $details;
	protected $price;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set category
     *
     * @param string $category
     * @return self
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Get category
     *
     * @return string $category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set brand
     *
     * @param string $brand
     * @return self
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * Get brand
     *
     * @return string $brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set productMaterial
     *
     * @param string $productMaterial
     * @return self
     */
    public function setProductMaterial($productMaterial)
    {
        $this->productMaterial = $productMaterial;
        return $this;
    }

    /**
     * Get productMaterial
     *
     * @return string $productMaterial
     */
    public function getProductMaterial()
    {
        return $this->productMaterial;
    }

    /**
     * Set imageUrl
     *
     * @param string $imageUrl
     * @return self
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    /**
     * Get imageUrl
     *
     * @return string $imageUrl
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * Set delivery
     *
     * @param date $delivery
     * @return self
     */
    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * Get delivery
     *
     * @return date $delivery
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Set details
     *
     * @param string $details
     * @return self
     */
    public function setDetails($details)
    {
        $this->details = $details;
        return $this;
    }

    /**
     * Get details
     *
     * @return string $details
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Get price
     *
     * @return float $price
     */
    public function getPrice()
    {
        return $this->price;
    }


    /**
     * Set productName
     *
     * @param string $productName
     * @return self
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * Get productName
     *
     * @return string $productName
     */
    public function getProductName()
    {
        return $this->productName;
    }


    /**
    * @return array
    */
    public function showProduct()
    {
        $product = array("ProductName"=>$this->productName,
                         "Category"=>$this->category,
                         "Brand"=>$this->brand,
                         "ProductMaterial"=>$this->productMaterial,
                         "Image"=>$this->imageUrl,
                         "Delivery_Time"=>$this->delivery,
                         "Details"=>$this->details
                         );
        return $product;

    }



}