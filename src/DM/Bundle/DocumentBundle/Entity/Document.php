<?php

namespace DM\Bundle\DocumentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Document
 *
 * @Vich\Uploadable
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DM\Bundle\DocumentBundle\Entity\DocumentRepository")
 */
class Document {
	/**
	 * @var integer
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="titre", type="string", length=255)
	 */
	private $titre;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="createdAt", type="datetime")
	 */
	private $createdAt;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="updatedAt", type="datetime")
	 */
	private $updatedAt;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="CreatedOrigineAt", type="datetime")
	 */
	private $createdOrigineAt;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="description", type="text")
	 */
	private $description;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="tags", type="string", length=255, nullable=true)
	 */
	private $tags;

	/**
	 *
	 * @Vich\UploadableField(mapping="document_image", fileNameProperty="imageName")
	 *
	 * @var File $file
	 */
	protected $file;

	/**
	 * @ORM\Column(type="string", length=255, name="image_name", nullable=true)
	 *
	 * @var string $imageName
	 */
	protected $imageName;

	public function __toString() {
		return $this->titre;
	}

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->updatedAt = new \DateTime();
		$this->createdAt = new \DateTime();

	}

	/**
	 * Lifecycle callback
	 * @ORM\PreUpdate
	 */
	public function preUpdate() {
		$this->updatedAt = new \DateTime();

	}

	/**
	 * Sets file.
	 *
	 * @param UploadedFile $file
	 */
	public function setFile(File $file = null) {
		$this->file = $file;

		$this->setUpdatedAt(new \DateTime());
	}

	/**
	 * Get file.
	 *
	 * @return UploadedFile
	 */
	public function getFile() {
		return $this->file;
	}

	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set titre
	 *
	 * @param string $titre
	 * @return Document
	 */
	public function setTitre($titre) {
		$this->titre = $titre;

		return $this;
	}

	/**
	 * Get titre
	 *
	 * @return string
	 */
	public function getTitre() {
		return $this->titre;
	}

	/**
	 * Set createdAt
	 *
	 * @param \DateTime $createdAt
	 * @return Document
	 */
	public function setCreatedAt($createdAt) {
		$this->createdAt = $createdAt;

		return $this;
	}

	/**
	 * Get createdAt
	 *
	 * @return \DateTime
	 */
	public function getCreatedAt() {
		return $this->createdAt;
	}

	/**
	 * Set updatedAt
	 *
	 * @param \DateTime $updatedAt
	 * @return Document
	 */
	public function setUpdatedAt($updatedAt) {
		$this->updatedAt = $updatedAt;

		return $this;
	}

	/**
	 * Get updatedAt
	 *
	 * @return \DateTime
	 */
	public function getUpdatedAt() {
		return $this->updatedAt;
	}

	/**
	 * Set createdOrigineAt
	 *
	 * @param \DateTime $createdOrigineAt
	 * @return Document
	 */
	public function setCreatedOrigineAt($createdOrigineAt) {
		$this->createdOrigineAt = $createdOrigineAt;

		return $this;
	}

	/**
	 * Get createdOrigineAt
	 *
	 * @return \DateTime
	 */
	public function getCreatedOrigineAt() {
		return $this->createdOrigineAt;
	}

	/**
	 * Set description
	 *
	 * @param string $description
	 * @return Document
	 */
	public function setDescription($description) {
		$this->description = $description;

		return $this;
	}

	/**
	 * Get description
	 *
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Set tags
	 *
	 * @param string $tags
	 * @return Document
	 */
	public function setTags($tags) {
		$this->tags = $tags;

		return $this;
	}

	/**
	 * Get tags
	 *
	 * @return string
	 */
	public function getTags() {
		return $this->tags;
	}

	/**
	 * Set imageName
	 *
	 * @param string $imageName
	 * @return Document
	 */
	public function setImageName($imageName) {
		$this->imageName = $imageName;

		return $this;
	}

	/**
	 * Get imageName
	 *
	 * @return string
	 */
	public function getImageName() {
		return $this->imageName;
	}
}
