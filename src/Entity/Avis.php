<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AvisRepository")
 */
class Avis
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $question1;

    /**
     * @ORM\Column(type="integer")
     */
    private $question2;

    /**
     * @ORM\Column(type="integer")
     */
    private $question3;

    /**
     * @ORM\Column(type="integer")
     */
    private $question4;

    /**
     * @ORM\Column(type="integer")
     */
    private $question5;

    /**
     * @ORM\Column(type="integer")
     */
    private $question6;

    /**
     * @ORM\Column(type="integer")
     */
    private $question7;

    /**
     * @ORM\Column(type="integer")
     */
    private $question8;

    /**
     * @ORM\Column(type="integer")
     */
    private $question9;

    /**
     * @ORM\Column(type="integer")
     */
    private $question10;

    /**
     * @ORM\Column(type="integer")
     */
    private $question11;

    /**
     * @ORM\Column(type="integer")
     */
    private $question12;

    /**
     * @ORM\Column(type="integer")
     */
    private $question13;

    /**
     * @ORM\Column(type="integer")
     */
    private $question14;

    /**
     * @ORM\Column(type="integer")
     */
    private $question15;

    /**
     * @ORM\Column(type="integer")
     */
    private $question16;

    /**
     * @ORM\Column(type="integer")
     */
    private $question17;

    /**
     * @ORM\Column(type="integer")
     */
    private $question18;

    /**
     * @ORM\Column(type="integer")
     */
    private $question19;

    /**
     * @ORM\Column(type="integer")
     */
    private $question20;

    /**
     * @ORM\Column(type="integer")
     */
    private $question21;

    /**
     * @ORM\Column(type="integer")
     */
    private $question22;

    /**
     * @ORM\Column(type="integer")
     */
    private $question23;

    /**
     * @ORM\Column(type="integer")
     */
    private $question24;

    /**
     * @ORM\Column(type="integer")
     */
    private $question25;

    /**
     * @ORM\Column(type="integer")
     */
    private $question26;

    /**
     * @ORM\Column(type="integer")
     */
    private $question27;

    /**
     * @ORM\Column(type="integer")
     */
    private $question28;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $telephone;

    /**
     * @ORM\Column(type="integer")
     */
    private $question33;

    /**
     * @ORM\Column(type="integer")
     */
    private $question34;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion1(): ?int
    {
        return $this->question1;
    }

    public function setQuestion1(int $question1): self
    {
        $this->question1 = $question1;

        return $this;
    }

    public function getQuestion2(): ?int
    {
        return $this->question2;
    }

    public function setQuestion2(int $question2): self
    {
        $this->question2 = $question2;

        return $this;
    }

    public function getQuestion3(): ?int
    {
        return $this->question3;
    }

    public function setQuestion3(int $question3): self
    {
        $this->question3 = $question3;

        return $this;
    }

    public function getQuestion4(): ?int
    {
        return $this->question4;
    }

    public function setQuestion4(int $question4): self
    {
        $this->question4 = $question4;

        return $this;
    }

    public function getQuestion5(): ?int
    {
        return $this->question5;
    }

    public function setQuestion5(int $question5): self
    {
        $this->question5 = $question5;

        return $this;
    }

    public function getQuestion6(): ?int
    {
        return $this->question6;
    }

    public function setQuestion6(int $question6): self
    {
        $this->question6 = $question6;

        return $this;
    }

    public function getQuestion7(): ?int
    {
        return $this->question7;
    }

    public function setQuestion7(int $question7): self
    {
        $this->question7 = $question7;

        return $this;
    }

    public function getQuestion8(): ?int
    {
        return $this->question8;
    }

    public function setQuestion8(int $question8): self
    {
        $this->question8 = $question8;

        return $this;
    }

    public function getQuestion9(): ?int
    {
        return $this->question9;
    }

    public function setQuestion9(int $question9): self
    {
        $this->question9 = $question9;

        return $this;
    }

    public function getQuestion10(): ?int
    {
        return $this->question10;
    }

    public function setQuestion10(int $question10): self
    {
        $this->question10 = $question10;

        return $this;
    }

    public function getQuestion11(): ?int
    {
        return $this->question11;
    }

    public function setQuestion11(int $question11): self
    {
        $this->question11 = $question11;

        return $this;
    }

    public function getQuestion12(): ?int
    {
        return $this->question12;
    }

    public function setQuestion12(int $question12): self
    {
        $this->question12 = $question12;

        return $this;
    }

    public function getQuestion13(): ?int
    {
        return $this->question13;
    }

    public function setQuestion13(int $question13): self
    {
        $this->question13 = $question13;

        return $this;
    }

    public function getQuestion14(): ?int
    {
        return $this->question14;
    }

    public function setQuestion14(int $question14): self
    {
        $this->question14 = $question14;

        return $this;
    }

    public function getQuestion15(): ?int
    {
        return $this->question15;
    }

    public function setQuestion15(int $question15): self
    {
        $this->question15 = $question15;

        return $this;
    }

    public function getQuestion16(): ?int
    {
        return $this->question16;
    }

    public function setQuestion16(int $question16): self
    {
        $this->question16 = $question16;

        return $this;
    }

    public function getQuestion17(): ?int
    {
        return $this->question17;
    }

    public function setQuestion17(int $question17): self
    {
        $this->question17 = $question17;

        return $this;
    }

    public function getQuestion18(): ?int
    {
        return $this->question18;
    }

    public function setQuestion18(int $question18): self
    {
        $this->question18 = $question18;

        return $this;
    }

    public function getQuestion19(): ?int
    {
        return $this->question19;
    }

    public function setQuestion19(int $question19): self
    {
        $this->question19 = $question19;

        return $this;
    }

    public function getQuestion20(): ?int
    {
        return $this->question20;
    }

    public function setQuestion20(int $question20): self
    {
        $this->question20 = $question20;

        return $this;
    }

    public function getQuestion21(): ?int
    {
        return $this->question21;
    }

    public function setQuestion21(int $question21): self
    {
        $this->question21 = $question21;

        return $this;
    }

    public function getQuestion22(): ?int
    {
        return $this->question22;
    }

    public function setQuestion22(int $question22): self
    {
        $this->question22 = $question22;

        return $this;
    }

    public function getQuestion23(): ?int
    {
        return $this->question23;
    }

    public function setQuestion23(int $question23): self
    {
        $this->question23 = $question23;

        return $this;
    }

    public function getQuestion24(): ?int
    {
        return $this->question24;
    }

    public function setQuestion24(int $question24): self
    {
        $this->question24 = $question24;

        return $this;
    }

    public function getQuestion25(): ?int
    {
        return $this->question25;
    }

    public function setQuestion25(int $question25): self
    {
        $this->question25 = $question25;

        return $this;
    }

    public function getQuestion26(): ?int
    {
        return $this->question26;
    }

    public function setQuestion26(int $question26): self
    {
        $this->question26 = $question26;

        return $this;
    }

    public function getQuestion27(): ?int
    {
        return $this->question27;
    }

    public function setQuestion27(int $question27): self
    {
        $this->question27 = $question27;

        return $this;
    }

    public function getQuestion28(): ?int
    {
        return $this->question28;
    }

    public function setQuestion28(int $question28): self
    {
        $this->question28 = $question28;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(?string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(?string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(?int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getQuestion33(): ?int
    {
        return $this->question33;
    }

    public function setQuestion33(int $question33): self
    {
        $this->question33 = $question33;

        return $this;
    }

    public function getQuestion34(): ?int
    {
        return $this->question34;
    }

    public function setQuestion34(int $question34): self
    {
        $this->question34 = $question34;

        return $this;
    }
}
