<?php
namespace TravisLykes\BookStoreApp\Domain\Model;


/***
 *
 * This file is part of the "Book Store App" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Travis Lykes <fopokuamoako@gmail.com>, Ho
 *
 ***/
/**
 * Book
 */
class Book extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * isbn
     * 
     * @var string
     */
    protected $isbn = '';

    /**
     * title
     * 
     * @var string
     */
    protected $title = '';

    /**
     * blurb
     * 
     * @var string
     */
    protected $blurb = '';

    /**
     * description
     * 
     * @var string
     */
    protected $description = '';

    /**
     * price
     * 
     * @var float
     */
    protected $price = 0.0;

    /**
     * pages
     * 
     * @var int
     */
    protected $pages = 0;

    /**
     * images
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $images = null;

    /**
     * Returns the isbn
     * 
     * @return string $isbn
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Sets the isbn
     * 
     * @param string $isbn
     * @return void
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    /**
     * Returns the title
     * 
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     * 
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the blurb
     * 
     * @return string $blurb
     */
    public function getBlurb()
    {
        return $this->blurb;
    }

    /**
     * Sets the blurb
     * 
     * @param string $blurb
     * @return void
     */
    public function setBlurb($blurb)
    {
        $this->blurb = $blurb;
    }

    /**
     * Returns the description
     * 
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     * 
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the price
     * 
     * @return float $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets the price
     * 
     * @param float $price
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Returns the pages
     * 
     * @return int $pages
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Sets the pages
     * 
     * @param int $pages
     * @return void
     */
    public function setPages($pages)
    {
        $this->pages = $pages;
    }

    /**
     * Returns the images
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $images
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Sets the images
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $images
     * @return void
     */
    public function setImages(\TYPO3\CMS\Extbase\Domain\Model\FileReference $images)
    {
        $this->images = $images;
    }
}
